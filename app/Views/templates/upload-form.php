<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>S3 tutorial</title>

    </head>

    <body>

    <h1>Upload a file</h1>

<p>Please select a file by clicking the 'Browse' button and press 'Upload' to start uploading your file.</p>

        <form action="<?php echo base_url('/home/upload'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">

        <input name="theFile" type="file" />

        <input name="Submit" type="submit" value="Upload">

</form>

    </body>

</html>
