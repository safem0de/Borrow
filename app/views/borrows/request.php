<!-- https://www.youtube.com/watch?v=GcpayqY7jag -->
<!-- https://artisansweb.net/drag-drop-file-upload-using-javascript-php/ -->
<!-- https://codepen.io/dcode-software/pen/xxwpLQo -->

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-md-6 mx-auto my-3 text-center">
        <h4>CSV file upload</h4>
        <p>กรุณาลากวาง หรือ คลิ๊ก เพื่ออัพโหลดไฟล์</p>
        
        <div class="drop-zone">
            <span class="drop-zone__prompt">Drag & drop file here or click to upload</span>
            <input type="file" name="myFile" class="drop-zone__input">
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>