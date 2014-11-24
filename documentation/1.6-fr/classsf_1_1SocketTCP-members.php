<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Member List'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SocketTCP.php">SocketTCP</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">sf::SocketTCP Member List</div>  </div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#a70beb8cda69c4e9212fd5987f0d04107">Accept</a>(SocketTCP &amp;Connected, IPAddress *Address=NULL)</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#a70a5111cbddd1edbfa6cbd6017c6d044">Close</a>()</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#add590d0119fa8edbe8da1574b6c8f07f">Connect</a>(unsigned short Port, const IPAddress &amp;HostAddress, float Timeout=0.f)</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#a098d613057a72d9e5cfa76a77b5f7124">IsValid</a>() const </td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#a3153062e1fb2a7afe9e0ed80f9204b39">Listen</a>(unsigned short Port)</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#a4d4dd9e422c485b8a8b390d1f210e84e">operator!=</a>(const SocketTCP &amp;Other) const </td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#adbcfa2c662f98a92beb509d3e5ebb1ce">operator&lt;</a>(const SocketTCP &amp;Other) const </td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#aae32dcf5042a50544848140ec1f94ed1">operator==</a>(const SocketTCP &amp;Other) const </td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#a47027b00ab5589017a5c235f2deb3ab0">Receive</a>(char *Data, std::size_t MaxSize, std::size_t &amp;SizeReceived)</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#a4389aa92523e0a6b3f2d6517cbde74fa">Receive</a>(Packet &amp;PacketToReceive)</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"class="even"><td class="entry"><b>Selector&lt; SocketTCP &gt;</b> (defined in <a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a>)</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"><span class="mlabel">friend</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#a4debed568966f75e3e63a70f08e67c21">Send</a>(const char *Data, std::size_t Size)</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#aa1825883276970b3d2f9b1d61763e5c7">Send</a>(Packet &amp;PacketToSend)</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#aa80f7711b15fe33a5c7005acedae43c9">SetBlocking</a>(bool Blocking)</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php#a098157a901a6f355b499085a3fb97afa">SocketTCP</a>()</td><td class="entry"><a class="el" href="classsf_1_1SocketTCP.php">sf::SocketTCP</a></td><td class="entry"></td></tr>
</table></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
