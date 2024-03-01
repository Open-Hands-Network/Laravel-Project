function formatDate(timestamp) {
    const options = {
        month: 'short',
        day: '2-digit',
        year: 'numeric'
    };
    const date = new Date(timestamp);
    return date.toLocaleDateString('en-US', options);
}

function lang(text) {
    return Boolean(text.match(/^[\u0600-\u06FF\u0750-\u077F]+/u)) ? "text-end" : "text-start"
}

let pfpPath, postPath, user

function addposts(posts, postsPath, profilePath, obj = null) {
    pfpPath = profilePath
    postPath = postPath
    user = obj
    for (let i = 0; i < posts.length; i++) {
        cnt.innerHTML += `
        <div class="card w-75 m-auto mt-5" id="post${posts[i].id}">
    <div class="d-flex card-header justify-content-between">
        <div class="d-flex profile-section justify-content-between align-items-center">
        <a class=" text-decoration-none" href="/profile/${posts[i].user.id}">
        <img class="me-2 rounded-circle" width="40" height="40"
        src="${profilePath + "/" + posts[i].user.image ?? "defaultPFP.png"}">
        </a>
            <div class="text">
                <span style="font-weight:600">${posts[i].user.first_name + " " + posts[i].user.last_name}</span><br>
                <div style="color:grey">${formatDate(posts[i].created_at)}</div>
            </div>
        </div>
        <button class="fa-solid fa-ellipsis-vertical"
            style="border:none;background:none;padding:5px;font-size:24px"></button>
    </div>
    <div class="card-body">
        <div
            class="w-100 ${lang(posts[i].title)} mb-4">
            ${posts[i].title}
        </div>
        <div class="m-auto d-flex justify-content-center">
            <img class="img-fluid" src="${postsPath}/${posts[i].image}" alt="">
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between">

        <div class="d-flex">
            <div class="d-flex pe-4">
                <button style = "padding:0px;margin:0px;background:none;border:none" class="p-0 pe-lg-2" onclick="addLike(${posts[i].id})"
                    style="text-decoration: none;font-size:24px;color:var(--blue-6)"><i style = "color:var(--blue-6);font-size:24px"
                        class="${posts[i].likes.length > 0 ? "fa-solid fa-thumbs-up" : "fa-regular fa-thumbs-up"}" id = "like${posts[i].id}"></i></button>
                <div style="color:var(--blue-6);font-size:24px" id="like_count${posts[i].id}">${posts[i].likes_count}</div>
            </div>
            <div class="d-flex">
                <button class="p-0 pe-lg-2" data-bs-toggle="modal" data-bs-target="#modal${posts[i].id}" href="#"
                    style="border: none;background:none;font-size:24px;color:var(--blue-6)"><i
                        class="fa-regular fa-comments"></i></button>
                <div style="color:var(--blue-6);font-size:24px" id="comment_count_1${posts[i].id}">${posts[i].comments_count}</div>
            </div>
        </div>
        <div class="d-flex">
            <a class="p-0 pe-lg-2" href="#"
                style="text-decoration: none;font-size:24px;color:var(--blue-6)"><i
                    class="fa-solid fa-share-nodes"></i></a>
            <div style="color:var(--blue-6);font-size:24px">17</div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" id="modal${posts[i].id}">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <div style="font-weight:600" ><span id="comment_count_2${posts[i].id}">${posts[i].comments_count}</span> Comments</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id = "comments${posts[i].id}">
            </div>
            <div class="modal-footer d-flex justify-content-evenly">
                <input class="form-control" style="width:80%" type="text" name="comment" id="input${posts[i].id}"
                    placeholder="Add a comment...">
                <button onclick="addComment(${posts[i].id})" style ="padding:0px;margin:0px;background:none;border:none"><i style="color:var(--blue-6)" class="fa-solid fa-paper-plane"></i></button> <br>
                <div class = "text-danger" id = "inputError${posts[i].id}"></div>
            </div>
        </div>
    </div>
</div>
`
        if (posts[i].comments_count > 0) {

            for (let j = 0; j < posts[i].comments_count; j++) {
                document.getElementById("comments" + posts[i].id).innerHTML += `
                <div class="d-flex mb-3">
                    <img class="me-2 rounded-circle" width="30" height="30"
                src="${profilePath + "/" + posts[i].comments[j].user.image ?? "defaultPFP.png"}">
                        <div style="background-color:var(--blue-1);border-radius:4px;padding:5px" class="${lang(posts[i].comments[j].comment)}">
                            <span style="background-color:var(--blue-2);border-radius:5px" class="p-1">${posts[i].comments[j].user.first_name + " " + posts[i].comments[j].user.last_name}</span> <br>
                            ${posts[i].comments[j].comment}
                            </div>
                            </div>
                            `

            }
        }

    }
}

async function addComment(post_id) {
    if (!user.token) {
        window.location.href = "/sign-in"
        return
    }
    let input = document.getElementById("input" + post_id).value
    if (input == "") {
        let inputError = document.getElementById("inputError" + post_id).innerHTML = "You need to type something to add a comment"
        return
    }
    let res = await fetch(`http://localhost:8000/api/addComment`, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            'Authorization': `Bearer ${user.token}`
        },
        body: JSON.stringify({
            post_id: post_id,
            comment: input
        }),
        method: 'POST',
        
    })
    let code = await res.status
    console.log(code)
    if (code == 200) {
        document.getElementById(`comments${post_id}`).innerHTML +=
            `
                <div class="d-flex mb-3">
                    <img class="me-2 rounded-circle" width="30" height="30"
                src="${pfpPath + "/" + user.image ?? "defaultPFP.png"}">
                        <div style="background-color:var(--blue-1);border-radius:4px;padding:5px" class="${lang(input)}">
                            <span style="background-color:var(--blue-2);border-radius:5px" class="p-1">${user.name}</span> <br>
                            ${input}
                            </div>
                            </div>
        `
        input = "";
        document.getElementById(`comment_count_1${post_id}`).innerText = Number(document.getElementById(`comment_count_1${post_id}`).innerText) + 1 
        document.getElementById(`comment_count_2${post_id}`).innerText = Number(document.getElementById(`comment_count_2${post_id}`).innerText) + 1 
    }
    else if (code == 401 || code == 403) {
        window.location.href = "/forbidden"
    }
}
async function addLike(post_id){
    if(!user.token){
        window.location.href = "/sign-in"
    }
    let res = await fetch(`http://localhost:8000/api/like/${post_id}`, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            'Authorization': `Bearer ${user.token}`
        },
        method: 'POST',
    })
    let code = await res.status
    let data = await res.json()
    let like = document.getElementById("like"+post_id)
    if (code == 200 && data.action == "added"){
        like.setAttribute("class", 'fa-solid fa-thumbs-up')
        document.getElementById("like_count"+post_id).innerText = Number(document.getElementById("like_count"+post_id).innerText) + 1
    }
    else if (code == 200 && data.action == "removed"){
        like.setAttribute("class", 'fa-regular fa-thumbs-up')
        document.getElementById("like_count"+post_id).innerText = Number(document.getElementById("like_count"+post_id).innerText) - 1
    }
    else if (code == 401 || code == 403){
        window.location.href = "/forbidden"
    }
}