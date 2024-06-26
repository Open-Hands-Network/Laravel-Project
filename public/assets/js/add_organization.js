const donation_volunteer_select = document.getElementById("donation_volunteer_select");
const type_select = document.getElementById("type_select");
donation_volunteer_select.addEventListener("change", () => {
    if (donation_volunteer_select.value == "تبرع") {
        type_select.innerHTML = `<select class="form-select mb-3" id = "donation-select" name="type">
        <option selected value="default">اختار نوع التبرع</option>
        <option value="التبرع النقدي">التبرع النقدي</option>
        <option value="التبرع بالوقت و المجهود">التبرع بالوقت و المجهود</option>
        <option value="التبرع بالطعام">التبرع بالطعام</option>
        <option value = "التبرع بالموارد - التبرع بالوقت والجهد" >التبرع بالموارد - التبرع بالوقت والجهد</option>
        <option value="التبرع بالدم">التبرع بالدم</option>
    </select>`
    } else {
        type_select.innerHTML = `<select class="form-select mb-3" id = "volunteer-select" name="type">
        <option selected value="default">اختار نوع التطوع</option>
        <option value="التطوع الدائم">التطوع الدائم</option>
        <option value="التطوع المؤقت">التطوع المؤقت</option>
        <option value="التطوع للإغاثة و الطوارئ">التطوع للإغاثة والطوارئ</option>
        <option value="التطوع لمساعدة الدول الفقيرة >التطوع لمساعدة الدول الفقيرة</option>
        <option value="التطوع المهني" >التطوع المهني</option>
    </select>`;
    }
})
