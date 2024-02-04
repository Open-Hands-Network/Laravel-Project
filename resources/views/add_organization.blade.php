@extends('layout.layout')

@section('content')
    <div class="container mt-3 add bg-light p-3">
        <h3>This page is for adding new Charity to our website</h3>
        <p class="text-secondary">specifiy the data in arabic to accept your request</p>
        <div class="form mt-3" method="post">
            <span class="d-flex">
                <span class="p-3 img-container"><img src="{{ asset('assets/images/company.png') }}" class="company-img"></span>
                <span class="p-3">
                    <p>Please upload the charity photo to accept your request</p>
                    <p>Your photo should be in PNG or JPG format</p>
                    <input type="file" class="form-control">
                </span>
            </span>
            <br>
            <label>
                <h6>Charity name</h6>
            </label>
            <input type="text" name="name" class="form-control" placeholder="charity name">
            <br>
            <div class="row">
                <div class="col-6">
                    <label>
                        <h6>Contact phone</h6>
                    </label>
                    <input type="number" name="contact_phone" class="form-control" placeholder="Contact phone">
                </div>
                <div class="col-6">
                    <label>
                        <h6>Volunteer or donation</h6>
                    </label>
                    <select name="volunteer_donation" class="form-select mb-3" id = "donation_volunteer_select">
                        <option selected>اختار بين التبرع/التطوع</option>
                        <option value="تبرع">تبرع</option>
                        <option value="تطوع">تطوع</option>
                    </select>
                </div>
            </div>
            <span id="type_select"></span>
            <label>
                <h6>Description</h6>
            </label>
            <textarea name="description" class="form-control"></textarea>
            <input class="submit-btn mt-3" type="submit">
        </div>

    </div>
    <script src="{{ asset('assets/js/add_organization.js') }}"></script>
@endsection

@section('title', 'Add new')
