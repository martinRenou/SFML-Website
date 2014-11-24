<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Member List'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1RenderTarget.php">RenderTarget</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">sf::RenderTarget Member List</div>  </div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a6bb6f0ba348f2b1e2f46114aeaf60f26">clear</a>(const Color &amp;color=Color(0, 0, 0, 255))</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39">draw</a>(const Drawable &amp;drawable, const RenderStates &amp;states=RenderStates::Default)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#ab636d7363f6681077361ee274ba89a8d">draw</a>(const Vertex *vertices, unsigned int vertexCount, PrimitiveType type, const RenderStates &amp;states=RenderStates::Default)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a718b1aa6296bf855171699cc18251ced">getDefaultView</a>() const </td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a2e5ade2457d9fb4c4907ae5b3d9e94a5">getSize</a>() const =0</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">pure virtual</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a98f721cc6dc11478922427fedfb2288b">getView</a>() const </td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#aae035b0d45f87a0da2a28a0de6ba1086">getViewport</a>(const View &amp;view) const </td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#af530274b34159d644e509b4b4dc43eb7">initialize</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#aa0c11e1989573f2cce64c621205f8e83">mapCoordsToPixel</a>(const Vector2f &amp;point) const </td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a7a2d427bdb9bd8f9f456fcf82813aa60">mapCoordsToPixel</a>(const Vector2f &amp;point, const View &amp;view) const </td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a2b0cab0e4c6af29d4efaba149d28116d">mapPixelToCoords</a>(const Vector2i &amp;point) const </td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a46eb08f775dd1420d6207ea87dde6e54">mapPixelToCoords</a>(const Vector2i &amp;point, const View &amp;view) const </td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1NonCopyable.php#a2110add170580fdb946f887719da6860">NonCopyable</a>()</td><td class="entry"><a class="el" href="classsf_1_1NonCopyable.php">sf::NonCopyable</a></td><td class="entry"><span class="mlabel">inline</span><span class="mlabel">private</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#ad5a98401113df931ddcd54c080f7aa8e">popGLStates</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a8d1998464ccc54e789aaf990242b47f7">pushGLStates</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a2997c96cbd93cb8ce0aba2ddae35b86f">RenderTarget</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#aac7504990d27dada4bfe3c7866920765">resetGLStates</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a063db6dd0a14913504af30e50cb6d946">setView</a>(const View &amp;view)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a9abd1654a99fba46f6887b9c625b9b06">~RenderTarget</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
</table></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
