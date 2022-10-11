<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
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
                    <span class="product-title">Product List</span>
                </div>
                <div class="ms-auto group-button  d-flex justify-content-between align-items-start py-2">
                    <button class="btn btn-sm btn-default product-button-inline mx-2">
                        <span>save</span>
                    </button>
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
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Price($)</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="price">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="productType" class="col-sm-2 col-form-label">Type Switcher</label>
                        <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="productType">
                                <option selected>--------select--------</option>
                                <option value="DVD">DVD</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Book">Book</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 d-none" id="dvd" >
                        <label for="size" class="col-sm-2 col-form-label">Size(MB)</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="size">
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
                    </div>

                    <div class="row mb-3 d-none" id="book" >
                        <label for="weight" class="col-sm-2 col-form-label">Weight(Kg)</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="weight">
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
        $('#productType').on('change', function(){
            if (this.value == "DVD" ){
                $('#dvd').removeClass('d-none');
            }
        });
    </script>
</body>
</html>
