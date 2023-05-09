<!-- https://www.youtube.com/watch?v=GcpayqY7jag -->
<!-- https://artisansweb.net/drag-drop-file-upload-using-javascript-php/ -->
<!-- https://codepen.io/dcode-software/pen/xxwpLQo -->

<!-- https://www.studentstutorial.com/php/mvc/import# -->

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-md-9 px-3">

        <div class="col-md-6 mx-2">
            <div class="input-group my-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">search</button>
                </div>
            </div>
        </div>

        <hr>
        <div class="form-row d-flex my-2">
            <div class="form-group col-md-6 mx-2">
                <label for="inputEmail4">Model</label>
                <input type="date" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6 mx-2">
                <label for="inputEmail4">Status</label>
                <input type="date" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
        </div>

        <div class="form-row d-flex my-2">
            <div class="form-group col-md-6 mx-2">
                <label for="inputEmail4">First Serial</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6 mx-2">
                <label for="inputEmail4">Last Serial</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
        </div>

        <div class="form-row d-flex my-2">
            <div class="form-group col-md-6 mx-2">
                <label for="inputEmail4">From Date</label>
                <input type="date" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6 mx-2">
                <label for="inputEmail4">To Date</label>
                <input type="date" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
        </div>

        <div class="form-group mx-2 my-3">
            <button type="submit" class="btn btn-primary">Filter</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </div>
    </div>


    <div class="col-md-3 my-3 text-center">
        <h4>CSV file upload</h4>
        <p>กรุณาลากวาง หรือ คลิ๊ก เพื่ออัพโหลดไฟล์</p>

        <form method="POST">
            <div class="drop-zone">
                <span class="drop-zone__prompt">Drag & drop file here or click to upload</span>
                <input type="file" name="myFile" class="drop-zone__input">
            </div>

            <!-- <div class="row">
                <div class="col-4 px-2">test</div>
                <div class="col-4 px-2">test2</div>
                <div class="col-4 px-2">test3</div>
            </div> -->
            <div class="btn-group my-2" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Read</button>
                <button type="button" class="btn btn-secondary">Upload</button>
                <button type="button" class="btn btn-secondary">Clear</button>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <!-- try foreach header -->
                    <th scope="col">
                        <input type="checkbox" id="select-all">
                        <label for="select-all">Select all</label>
                    </th>
                    <th scope="col">Article Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Words</th>
                    <th scope="col">Shares</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- try foreach rows of datas -->
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                            <label class="custom-control-label" for="customCheck1">1</label>
                        </div>
                    </td>
                    <td>Bootstrap 4 CDN and Starter Template</td>
                    <td>Cristina</td>
                    <td>913</td>
                    <td>2.846</td>
                </tr>
                <tr>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">2</label>
                        </div>
                    </td>
                    <td>Bootstrap Grid 4 Tutorial and Examples</td>
                    <td>Cristina</td>
                    <td>1.434</td>
                    <td>3.417</td>
                </tr>

                <tr>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">3</label>
                        </div>
                    </td>
                    <td>Bootstrap Flexbox Tutorial and Examples</td>
                    <td>Cristina</td>
                    <td>1.877</td>
                    <td>1.234</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<nav aria-label="Table Pagination">
    <ul class="pagination justify-content-end">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>

<?php require APPROOT . '/views/inc/footer.php'; ?>