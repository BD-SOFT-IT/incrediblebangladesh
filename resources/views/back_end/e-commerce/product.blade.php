@extends('back_end.layouts.master')

@section('title','Create Product')

@section('content')
    <div class="container">
        <form action="{{ route('travel.package') }}" method="post" autocomplete="off">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Package Details section started -->
                    <div class="card">
                        <div class="card-header ib-card-header"><h4>Create Product</h4></div>
                        <div class="card-body">
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Product Title <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="product_title" id="productTitle"
                                           class="form-control form-control-sm" placeholder="Exploring Coxsbazar">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Product Brand <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="product_brand" id="productBrand"
                                           class="form-control form-control-sm"
                                           placeholder="Coxsbazar such a beautiful place over the world.">
                                </div>
                                <div class="col">
                                    <small class="ib-custom-label">Product Category <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="product_category" id="productCategory" onblur="setProductCode()"
                                           class="form-control form-control-sm" placeholder="January - April">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Product Code <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="product_code" id="productCode"
                                           class="form-control form-control-sm" placeholder="ADHC-HDGT-NJDHC" readonly>
                                </div>
                                <div class="col">
                                    <small class="ib-custom-label">Product Price <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="product_price" id="productPrice"
                                           class="form-control form-control-sm" placeholder="1,000,000 ৳ ">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Product Discount <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="product_discount" id="productDiscount"
                                           class="form-control form-control-sm" placeholder="" onblur="setAfterDiscountPrice()">
                                </div>
                                <div class="col">
                                    <small class="ib-custom-label">After Discount Price <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="after_discount_price" id="afterDiscountPrice"
                                           class="form-control form-control-sm" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Product Description <sup
                                            class="text-danger">*</sup></small>
                                    <textarea name="product_description" id="packageDescription"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
{{--                    <div class="card">--}}
{{--                        <div class="card-header ib-card-header"><h4>Package Features</h4></div>--}}
{{--                        <div class="card-body">--}}

{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="card">
                        <div class="card-header ib-card-header"><h4>Package Image Manager</h4></div>
                        <div class="card-body">

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header ib-card-header"><h4>Package Preview</h4></div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col">
                                    <input type="submit" value="Preview" class="btn btn-info text-uppercase">
                                    <input type="submit" value="Submit" class="btn btn-success text-uppercase">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        function randomString(length, chars) {
            var result = '';
            for (var i = length; i > 0; --i)
                result += chars[Math.floor(Math.random() * chars.length)];
            return result;
        }

        function setProductCode() {
            let rString = randomString(4, '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ');
            let title    = document.getElementById('productTitle').value;
            let brand    = document.getElementById('productBrand').value;
            let category = document.getElementById('productCategory').value;


            let finalTitle      = title.toUpperCase().slice(0,2);
            let finalBrand      = brand.toUpperCase().slice(0,3);
            let finalCategory   = category.toUpperCase().slice(0,4);

            const result = rString+'-'+finalTitle+'-'+finalBrand+'-'+rString+'-'+finalCategory+'-'+rString;

            document.getElementById('productCode').value = result;
        }
        function setAfterDiscountPrice() {
            let price = document.getElementById('productPrice').value;
            let discount = document.getElementById('productDiscount').value;

            const discountPrice = (price * discount)/100;

            const finalPrice = price - discountPrice;
            document.getElementById('afterDiscountPrice').value = finalPrice;
        }
    </script>
@endsection
