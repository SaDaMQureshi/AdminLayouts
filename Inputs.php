<?php
$title = "Input Tags";
$secondBreadcrumb = "Input Tags";
ob_start();
?>
<div class="container">
    <!-- Select Inputs  -->
    <div class="row">
        <div class="card table-card">
            <div class="card-header">
                <h5 class="mb-0">Select Tags</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Default Select</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Big Size Select</label>
                        <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Small Size Select</label>
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-label">Search Select</label>
                        <select id="select" class="form-select" aria-label="Default select example">
                            <option value="">Select Employee</option>
                            <option value="1">Fiona Green</option>
                            <option value="2">John Doe</option>
                            <option value="3">Jane Smith</option>
                            <option value="4">Michael Johnson</option>
                            <option value="5">Alice Brown</option>
                        </select>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Input Boxes. -->
    <div class="row mt-2">
        <div class="card table-card">
            <div class="card-header">
                <h5>Input Boxes</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Default Input</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Large Input</label>
                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Small Input</label>
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="inputPassword5" class="form-label">Form Text Input</label>
                        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Disable Input</label>
                        <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Readonly Input</label>
                        <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Left Icon Input</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Right Icon Input</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Left Right Icon Input</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkbox And Radios  -->
    <div class="row mt-2">
        <div class="card table-card">
            <div class="card-header">
                <h5>Check Box And Radios</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-check col-6 mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check col-6 mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Checked checkbox
                        </label>
                    </div>
                    <div class="form-check col-6 mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="checkDisabled" disabled>
                        <label class="form-check-label" for="checkDisabled">
                            Disabled checkbox
                        </label>
                    </div>
                    <div class="form-check col-6 mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="checkCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="checkCheckedDisabled">
                            Disabled checked checkbox
                        </label>
                    </div>
                    <!-- Radios -->
                    <div class="form-check col-6 mb-3">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                        <label class="form-check-label" for="radioDefault1">
                            Default radio
                        </label>
                    </div>
                    <div class="form-check col-6 mb-3">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                        <label class="form-check-label" for="radioDefault2">
                            Default checked radio
                        </label>
                    </div>
                    <div class="form-check col-6 mb-3">
                        <input class="form-check-input" type="radio" name="radioDisabled" id="radioDisabled" disabled>
                        <label class="form-check-label" for="radioDisabled">
                            Disabled radio
                        </label>
                    </div>
                    <div class="form-check col-6 mb-3">
                        <input class="form-check-input" type="radio" name="radioDisabled" id="radioCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="radioCheckedDisabled">
                            Disabled checked radio
                        </label>
                    </div>
                    <!-- Switches -->
                    <div class="form-check form-switch col-6 mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault">
                        <label class="form-check-label" for="switchCheckDefault">Default switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch col-6 mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked" checked>
                        <label class="form-check-label" for="switchCheckChecked">Checked switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch col-6 mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDisabled" disabled>
                        <label class="form-check-label" for="switchCheckDisabled">Disabled switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch col-6 mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="switchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-check-label" for="">Inline</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                            <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-check-label" for="">Inline</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">
                        <label class="btn btn-primary" for="btn-check">Single toggle</label>

                        <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
                        <label class="btn btn-primary" for="btn-check-2">Checked</label>

                        <input type="checkbox" class="btn-check" id="btn-check-3" autocomplete="off" disabled>
                        <label class="btn btn-primary" for="btn-check-3">Disabled</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FileUpload -->
    <div class="row mt-2">
        <div class="card table-card">
            <div class="card-header">
                <h5>FileUpload</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Textarea -->
    <div class="row mt-2">
        <div class="card table-card">
            <div class="card-header">
                <h5>Textarea</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Default Textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Color Picker -->
    <div class="row mt-2">
        <div class="card table-card">
            <div class="card-header">
                <h5>Color Picker</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="exampleColorInput" class="form-label">Color picker</label>
                        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Floating Labels -->
    <div class="row mt-2">
        <div class="card table-card">
            <div class="card-header">
                <h5>Floating Labels</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 mb-3">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">Works with selects</label>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                                <label for="floatingInputGroup1">Username</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Addons -->
    <div class="row mt-2">
        <div class="card table-card">
            <div class="card-header">
                <h5>Addons</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient’s username" aria-label="Recipient’s username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Your vanity URL</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                            <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group">
                            <span class="input-group-text">With textarea</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">@</span>
                            <input type="text" class="form-control" placeholder="Wrapping" aria-label="Wrapping" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="visible-addon">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="visible-addon">
                            <input type="text" class="form-control d-none" placeholder="Hidden input" aria-label="Hidden input" aria-describedby="visible-addon">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with radio button">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group">
                            <span class="input-group-text">First and last name</span>
                            <input type="text" aria-label="First name" class="form-control">
                            <input type="text" aria-label="Last name" class="form-control">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $content = ob_get_clean();
    include 'layout.php';
