<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PDF with Different Orientations</title>
<style>
  /* Default @page rule for portrait */
  @page {
    size: A4; /* Default size is A4 portrait */
    margin: 1cm;
  }

  /* @page rule for landscape */
  @page landscape {
    size: A4 landscape; /* Landscape orientation */
  }

  /* Apply styles to ensure proper display in PDF */
  body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
  }

  .content {
    padding: 1cm;
    page-break-before: always; /* Ensure a page break before each .content element */
  }

  .landscape {
    page-break-before: always; /* Ensure a page break before the landscape content */
  }

  h1, p {
    margin-bottom: 10px;
  }
</style>
</head>
<body>


</body>
</html>
