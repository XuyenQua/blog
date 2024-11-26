@extends('admin.layouts.master')

@section('title')
    Create Category
@endsection

@section('content')
    <div class="content">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row flex-between-center">
                    <div class="col-md">
                        <h5 class="mb-2 mb-md-0">Add a category</h5>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-secondary me-2" role="button">Discard</button>
                        <button class="btn btn-primary" role="button">Add category</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-8 pe-lg-2">
                <div class="card mb-3">
                    <div class="card-header bg-body-tertiary">
                        <h6 class="mb-0">Basic information</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-2">
                                <div class="col-12 mb-3"><label class="form-label" for="product-name">Product
                                        name:</label><input class="form-control" id="product-name" type="text"></div>
                                <div class="col-12 mb-3"><label class="form-label" for="manufacturar-name">Manufacturar
                                        Name:</label><input class="form-control" id="manufacturar-name" type="text">
                                </div>
                                <div class="col-12 mb-3"><label class="form-label" for="identification-no">Product
                                        Identification
                                        No.:</label><input class="form-control" id="identification-no" type="text">
                                </div>
                                <div class="col-12 mb-3"><label class="form-label" for="product-summary">Product Summary:
                                    </label><input class="form-control" id="product-summary" type="text"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-body-tertiary">
                        <h6 class="mb-0">Add images</h6>
                    </div>
                    <div class="card-body">
                        <form class="dropzone dropzone-multiple p-0 dz-clickable" id="dropzoneMultipleFileUpload"
                            data-dropzone="data-dropzone" action="#!"
                            data-options="{&quot;acceptedFiles&quot;:&quot;image/*&quot;}">

                            <div class="dz-message" data-dz-message="data-dz-message"> <img class="me-2"
                                    src="../../../assets/img/icons/cloud-upload.svg" width="25" alt=""><span
                                    class="d-none d-lg-inline">Drag your image here<br>or, </span><span
                                    class="btn btn-link p-0 fs-10">Browse</span></div>
                            <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column"></div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-body-tertiary">
                        <h6 class="mb-0">Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="row gx-2">
                            <div class="col-12 mb-3"><label class="form-label" for="product-description">Product
                                    description:</label>
                                <div class="create-product-description-textarea">
                                    <textarea class="tinymce d-none" data-tinymce="data-tinymce" name="product-description" id="product-description"
                                        required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3"><label class="form-label" for="import-status">Import Status:
                                </label><select class="form-select" id="import-status" name="import-status">
                                    <option value="imported">Imported</option>
                                    <option value="processing">Processing </option>
                                    <option value="validating">Validating </option>
                                    <option value="draft">Draft</option>
                                </select></div>
                            <div class="col-sm-6 mb-3"><label class="form-label" for="origin-country">Country of Origin:
                                </label><select class="form-select" id="origin-country" name="origin-country">
                                    <option value="">Select </option>
                                    <option value="China">China</option>
                                    <option value="India">India</option>
                                    <option value="United States">United States</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="DR Congo">DR Congo</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Germany">Germany</option>
                                    <option value="France">France</option>
                                </select></div>
                            <div class="col-12 mb-3"><label class="form-label" for="release-date">Release Date:
                                </label><input class="form-control datetimepicker flatpickr-input" id="release-date"
                                    type="text"
                                    data-options="{&quot;dateFormat&quot;:&quot;d/m/y&quot;,&quot;disableMobile&quot;:true}"
                                    readonly="readonly"></div>
                            <div class="col-12 mb-3"><label class="form-label" for="warranty-length">Warranty Lenght:
                                </label><input class="form-control" id="warranty-length" type="text"></div>
                            <div class="col-12 mb-3"><label class="form-label" for="warranty-policy">Warranty Policy:
                                </label><input class="form-control" id="warranty-policy" type="text"></div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 mb-lg-0">
                    <div class="card-header bg-body-tertiary">
                        <h6 class="mb-0">Specifications</h6>
                    </div>
                    <div class="card-body">
                        <div class="row gx-2 flex-between-center mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0 text-600">Processor</h6>
                            </div>
                            <div class="col-sm-9">
                                <div class="d-flex flex-between-center">
                                    <h6 class="mb-0 text-700">2.3GHz quad-core Intel Core i5</h6><a
                                        class="btn btn-sm btn-link text-danger" href="#!" data-bs-toggle="tooltip"
                                        data-bs-placement="top" aria-label="Remove" data-bs-original-title="Remove"><svg
                                            class="svg-inline--fa fa-trash-alt fa-w-14 fs-10" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="trash-alt" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z">
                                            </path>
                                        </svg><!-- <span class="fs-10 fas fa-trash-alt"></span> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-2 flex-between-center mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0 text-600">Memory</h6>
                            </div>
                            <div class="col-sm-9">
                                <div class="d-flex flex-between-center">
                                    <h6 class="mb-0 text-700">8GB of 2133MHz LPDDR3 onboard memory</h6><a
                                        class="btn btn-sm btn-link text-danger" href="#!" data-bs-toggle="tooltip"
                                        data-bs-placement="top" aria-label="Remove" data-bs-original-title="Remove"><svg
                                            class="svg-inline--fa fa-trash-alt fa-w-14 fs-10" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="trash-alt" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z">
                                            </path>
                                        </svg><!-- <span class="fs-10 fas fa-trash-alt"></span> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-2 flex-between-center mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0 text-600">Brand name</h6>
                            </div>
                            <div class="col-sm-9">
                                <div class="d-flex flex-between-center">
                                    <h6 class="mb-0 text-700">Apple</h6><a class="btn btn-sm btn-link text-danger"
                                        href="#!" data-bs-toggle="tooltip" data-bs-placement="top"
                                        aria-label="Remove" data-bs-original-title="Remove"><svg
                                            class="svg-inline--fa fa-trash-alt fa-w-14 fs-10" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="trash-alt" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z">
                                            </path>
                                        </svg><!-- <span class="fs-10 fas fa-trash-alt"></span> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-3 gx-2">
                            <div class="col-sm-3"><input class="form-control form-control-sm" id="specification-label"
                                    type="text" placeholder="Label"></div>
                            <div class="col-sm-9">
                                <div class="d-flex gap-2 flex-between-center"><input class="form-control form-control-sm"
                                        id="specification-property" type="text" placeholder="Property"><button
                                        class="btn btn-sm btn-falcon-default">Add</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ps-lg-2">
                <div class="sticky-sidebar">
                    <div class="card mb-3">
                        <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Type</h6>
                        </div>
                        <div class="card-body">
                            <div class="row gx-2">
                                <div class="col-12 mb-3"><label class="form-label" for="product-category">Select
                                        category:</label><select class="form-select" id="product-category"
                                        name="product-category">
                                        <option value="computerAccessories">Computer &amp; Accessories</option>
                                        <option>Class, Training, or Workshop</option>
                                        <option>Concert or Performance</option>
                                        <option>Conference</option>
                                        <option>Convention</option>
                                        <option>Dinner or Gala</option>
                                        <option>Festival or Fair</option>
                                    </select></div>
                                <div class="col-12"><label class="form-label" for="product-subcategory">Select
                                        sub-category:</label><select class="form-select" id="product-subcategory"
                                        name="product-subcategory">
                                        <option value="laptop">Laptop</option>
                                        <option>Class, Training, or Workshop</option>
                                        <option>Concert or Performance</option>
                                        <option>Conference</option>
                                        <option>Convention</option>
                                        <option>Dinner or Gala</option>
                                        <option>Festival or Fair</option>
                                    </select></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Tags</h6>
                        </div>
                        <div class="card-body"><label class="form-label" for="product-tags">Add a keyword:</label>
                            <div class="choices" data-type="text" aria-haspopup="true" aria-expanded="false">
                                <div class="choices__inner"><input class="form-control js-choice choices__input"
                                        id="product-tags" type="text" name="tags" required="required"
                                        size="1"
                                        data-options="{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:false}"
                                        hidden="" tabindex="-1" data-choice="active" value="">
                                    <div class="choices__list choices__list--multiple"></div><input type="search"
                                        name="search_terms" class="choices__input choices__input--cloned"
                                        autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox"
                                        aria-autocomplete="list" aria-label="null">
                                </div>
                                <div class="choices__list choices__list--dropdown" aria-expanded="false"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Pricing</h6>
                        </div>
                        <div class="card-body">
                            <div class="row gx-2">
                                <div class="col-8 mb-3"><label class="form-label" for="base-price">Base Price: <span
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            aria-label="Product regular price"
                                            data-bs-original-title="Product regular price"><svg
                                                class="svg-inline--fa fa-question-circle fa-w-16 text-primary fs-10 ms-1"
                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="question-circle" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z">
                                                </path>
                                            </svg><!-- <span class="fas fa-question-circle text-primary fs-10 ms-1"></span> Font Awesome fontawesome.com --></span></label><input
                                        class="form-control" id="base-price" type="text"></div>
                                <div class="col-4"> <label class="form-label"
                                        for="price-currency">Currency:</label><select class="form-select"
                                        id="price-currency" name="price-currency">
                                        <option value="usd">USD</option>
                                        <option value="eur">EUR</option>
                                        <option value="gbp">GBP</option>
                                        <option value="cad">CAD</option>
                                    </select></div>
                                <div class="col-12 mb-4"><label class="form-label" for="discount-percentage">Discount
                                        in
                                        percentage:</label><input class="form-control" id="discount-percentage"
                                        type="text"></div>
                                <div class="col-12"><label class="form-label" for="final-price">Final price:<span
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            aria-label="Product final price"
                                            data-bs-original-title="Product final price"><svg
                                                class="svg-inline--fa fa-question-circle fa-w-16 text-primary fs-10 ms-1"
                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="question-circle" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z">
                                                </path>
                                            </svg><!-- <span class="fas fa-question-circle text-primary fs-10 ms-1"></span> Font Awesome fontawesome.com --></span></label><input
                                        class="form-control" id="final-price" disabled="disabled" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Shipping</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-check"><input class="form-check-input p-2" id="vendor-delivery"
                                    type="radio" name="product-shipping"><label
                                    class="form-check-label fs-9 fw-normal text-700" for="vendor-delivery">Delivered by
                                    vendor (you)</label></div>
                            <div class="form-check"><input class="form-check-input p-2" id="falcon-delivery"
                                    type="radio" name="product-shipping"><label
                                    class="form-check-label fs-9 fw-normal text-700" for="falcon-delivery">Delivered by
                                    FALCON <span
                                        class="badge badge-subtle-warning rounded-pill ms-2">Recommended</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Stock status</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-check"><input class="form-check-input p-2" id="in-stock" type="radio"
                                    name="stock-status"><label class="form-check-label fs-9 fw-normal text-700"
                                    for="in-stock">In
                                    stock</label></div>
                            <div class="form-check"><input class="form-check-input p-2" id="unavailable" type="radio"
                                    name="stock-status"><label class="form-check-label fs-9 fw-normal text-700"
                                    for="unavailable">Unavailable</label></div>
                            <div class="form-check"><input class="form-check-input p-2" id="to-be-announced"
                                    type="radio" name="stock-status"><label
                                    class="form-check-label fs-9 fw-normal text-700" for="to-be-announced">To be
                                    announced</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <h5 class="mb-2 mb-md-0">Add a category</h5>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-secondary me-2" role="button">Discard</button>
                        <button class="btn btn-primary" role="button">Add category</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
