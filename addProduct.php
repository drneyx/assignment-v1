<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Add</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/dist/css/style.css">
</head>
<body class="light">
    <!-- Header section -->
    <header class="header-section">
        <div class="container flex-grow-1 d-flex mt-4">
            <div class="w-100 d-flex justify-content-between mt-3 top">
                <div class="d-flex justify-content-start align-items-start py-2">
                    <span class="product-title">Product Add</span>
                </div>
                <div class="ms-auto group-button  d-flex justify-content-between align-items-start py-2">
                    <button id="addProduct" class="btn btn-sm btn-default product-button-inline mx-2">Save</button>
                    <button class="btn btn-sm btn-default product-button text-nowrap"> Cancel</button>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Add Product Section -->
    <section class="content-section">
        <div class="container">
            <div class="w-100 content-section-products mt-2">
                <form action=""  method="post" class="mt-3">
                    <div class="row mb-3">
                        <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="sku">
                            <small class="text-danger d-none" id="skuCheck">Please, Enter SKU</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name">
                            <small class="text-danger d-none" id="nameCheck">Please, enter the name of the product</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Price($)</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="price">
                            <small class="text-danger d-none" id="priceCheck">Please, enter the price of the product</small>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="productType" class="col-sm-2 col-form-label">Type Switcher</label>
                        <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="productType">
                                <option selected>Select</option>
                                <option value="DVD">DVD</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Book">Book</option>
                            </select>
                            <small class="text-danger d-none" id="typeCheck">Please, select the product Type</small>
                        </div>
                    </div>
                    <div class="d-none" id="dvd">
                        <div class="row mb-3">
                            <label for="size" class="col-sm-2 col-form-label">Size(MB)</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="size">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <small class="mt-2"><strong>Please, provide size in MB</strong></small>
                            </div>
                        </div>
                    </div>

                    <div id="furniture" class="d-none">
                        <div class="row mb-3">
                            <label for="height" class="col-sm-2 col-form-label">Height (CM)</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="height">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="height" class="col-sm-2 col-form-label">Width (CM)</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="height">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="height" class="col-sm-2 col-form-label">Length (CM)</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="height">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <small><strong>Please, provide dimensions in HxWxL</strong></small>
                            </div>
                        </div>
                    </div>

                    <div class="d-none" id="book">
                        <div class="row mb-3"  >
                            <label for="weight" class="col-sm-2 col-form-label">Weight(Kg)</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="weight">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <small class="mt-2"><strong>Please, provide weight in Kg</strong></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer section -->
    <footer>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center footer-section">
                <div class="align-self-center">Scandiweb Test assignment</div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        /* Handle onchange event of product type */
        $('#productType').on('change', function(){
            if (this.value == "DVD" ){
                $('#dvd').removeClass('d-none');
                $('#furniture').addClass('d-none');
                $('#book').addClass('d-none');
            }
            else if (this.value == "Furniture" ){
                $('#dvd').addClass('d-none');
                $('#furniture').removeClass('d-none');
                $('#book').addClass('d-none');
            }
            else if (this.value == "Book" ){
                $('#dvd').addClass('d-none');
                $('#furniture').addClass('d-none');
                $('#book').removeClass('d-none');
            }
            else {
                $('#dvd').addClass('d-none');
                $('#furniture').addClass('d-none');
                $('#book').addClass('d-none');
            }
        });


        $(document).ready(function () {
            // Validate SKU
            let skuError = true;
            $("#sku").on("keyup", function(){
                validateSKU();
            });
            function validateSKU() {
                let skuValue = $("#sku").val();
                if (skuValue.length == 0) {
                    $("#skuCheck").removeClass('d-none');
                    skuError = false;
                    return false;
                }else {
                    $("#skuCheck").addClass('d-none');
                }
            }

            // Validate Name
            let nameError = true;
            $("#name").keyup(function () {
                validateName();
            });
        
            function validateName() {
                let nameValue = $("#name").val();
                if (nameValue.length == "") {
                    $("#nameCheck").removeClass('d-none');
                    nameError = false;
                    return false;
                }else {
                    $("#nameCheck").addClass('d-none');
                }
            }
        
            // Validate Price
            let priceError = true;
            $("#price").keyup(function () {
                validatePrice();
            });
            function validatePrice() {
                let priceValue = $("#price").val();
                let regex = /^(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/;
                if (priceValue.length == "") {
                    $("#priceCheck").removeClass('d-none');
                    priceError = false;
                    return false;
                }
                /* else if (regex.test(priceValue)) {
                    $("#priceCheck").removeClass('d-none');
                    $("#priceCheck").html("Please, enter a valid price");
                    $("#priceCheck").css("color", "red");
                    priceError = false;
                    return false;
                }*/
                 else {
                    $("#priceCheck").addClass('d-none');
                }
            }


            // Validate Product type
            let typeError = true;
            $("#productType").keyup(function () {
                validateProductType();
            });
        
            function validateProductType() {
                let typeValue = $("#productType").val();
                console.log(typeValue);
                if (typeValue == "Select") {
                    $("#typeCheck").removeClass('d-none');
                    typeError = false;
                return false;
                }else {
                    $("#typeCheck").addClass('d-none');
                }
            }
        
        
        // Submit button
        $("#addProduct").click(function () {
            validateSKU();
            validateName();
            validatePrice();
            validateProductType();
            if (skuError == true) {
                console.log("DATA IS SAFE");
                return true;
            } 
            else {
                console.log("DATA IS not SAFE");
                return false;
            }
        });
        });
    </script>
</body>
</html>
