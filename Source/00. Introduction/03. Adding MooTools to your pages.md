Adding MooTools to your pages
-----------------------------

Just create a <script> tag in the head of your document that points to your copy of MooTools. After this tag add another one that either points to an external file with your own javascript that uses MooTools, or write it inline:

<code html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
  <head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Your title</title>
    <script type="text/javascript" src="mootools.js"></script>
    <script type="text/javascript" src="yourSiteCode.js"></script>
    <script type="text/javascript">
      //or write some code in-line
    </script>
  </head>
  <body>....</body>
</html>
</code>

I prefer to have my code in an external file, but where you put it is up to you.