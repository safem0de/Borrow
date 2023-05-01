<!-- https://www.youtube.com/watch?v=GcpayqY7jag -->
<!-- https://codepen.io/dcode-software/pen/xxwpLQo -->
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="drop-zone">
    <span class="drop-zone__prompt">Drop file here or click to upload</span>
    <input type="file" name="myFile" class="drop-zone__input">
    <button type="button" class="btn btn-danger mt-2" id="clear-button" style="display:none;">Clear Image</button>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>