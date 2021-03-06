<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Ftp Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Ftp.php">Ftp</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="classsf_1_1Ftp-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Ftp Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>This class provides methods for manipulating the FTP protocol (described in RFC 959).  
 <a href="classsf_1_1Ftp.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Ftp_8hpp_source.php">Ftp.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::Ftp:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1Ftp.png" usemap="#sf::Ftp_map" alt=""/>
  <map id="sf::Ftp_map" name="sf::Ftp_map">
<area href="structsf_1_1NonCopyable.php" title="Utility base class to easily declare non-copyable classes." alt="sf::NonCopyable" shape="rect" coords="0,0,105,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp_1_1DirectoryResponse.php">DirectoryResponse</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Specialization of FTP response returning a directory.  <a href="classsf_1_1Ftp_1_1DirectoryResponse.php#details">More...</a><br/></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp_1_1ListingResponse.php">ListingResponse</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Specialization of FTP response returning a filename lisiting.  <a href="classsf_1_1Ftp_1_1ListingResponse.php#details">More...</a><br/></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">This class wraps a FTP response, which is basically :  <a href="classsf_1_1Ftp_1_1Response.php#details">More...</a><br/></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a1cd6b89ad23253f6d97e6d4ca4d558cb"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cb">TransferMode</a> { <br/>
&#160;&#160;<a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cba6f253b362639fb5e059dc292762a21ee">Binary</a>, 
<br/>
&#160;&#160;<a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cbac9e544a22dce8ef3177449cb235d15c2">Ascii</a>, 
<br/>
&#160;&#160;<a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cbabb1e34435231e73c96534c71090be7f4">Ebcdic</a>
<br/>
 }</td></tr>
<tr class="memdesc:a1cd6b89ad23253f6d97e6d4ca4d558cb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Enumeration of transfer modes.  <a href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cb">More...</a><br/></td></tr>
<tr class="separator:a1cd6b89ad23253f6d97e6d4ca4d558cb"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a2edfa8e9009caf27bce74459ae76dc52"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a2edfa8e9009caf27bce74459ae76dc52">~Ftp</a> ()</td></tr>
<tr class="memdesc:a2edfa8e9009caf27bce74459ae76dc52"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor &ndash; close the connection with the server.  <a href="#a2edfa8e9009caf27bce74459ae76dc52"></a><br/></td></tr>
<tr class="separator:a2edfa8e9009caf27bce74459ae76dc52"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8fee5fc52934a4dfef076303b71995d8"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a8fee5fc52934a4dfef076303b71995d8">Connect</a> (const <a class="el" href="classsf_1_1IPAddress.php">IPAddress</a> &amp;Server, unsigned short Port=21, float Timeout=0.f)</td></tr>
<tr class="memdesc:a8fee5fc52934a4dfef076303b71995d8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Connect to the specified FTP server.  <a href="#a8fee5fc52934a4dfef076303b71995d8"></a><br/></td></tr>
<tr class="separator:a8fee5fc52934a4dfef076303b71995d8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a45c9d8037f328aeae34b4eca7f277792"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a45c9d8037f328aeae34b4eca7f277792">Login</a> ()</td></tr>
<tr class="memdesc:a45c9d8037f328aeae34b4eca7f277792"><td class="mdescLeft">&#160;</td><td class="mdescRight">Log in using anonymous account.  <a href="#a45c9d8037f328aeae34b4eca7f277792"></a><br/></td></tr>
<tr class="separator:a45c9d8037f328aeae34b4eca7f277792"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4d40a0f1d9c900eb7be7558f41a896b6"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a4d40a0f1d9c900eb7be7558f41a896b6">Login</a> (const std::string &amp;UserName, const std::string &amp;Password)</td></tr>
<tr class="memdesc:a4d40a0f1d9c900eb7be7558f41a896b6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Log in using a username and a password.  <a href="#a4d40a0f1d9c900eb7be7558f41a896b6"></a><br/></td></tr>
<tr class="separator:a4d40a0f1d9c900eb7be7558f41a896b6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a384c7cc9b9b2b56a913d2c1b19be6053"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a384c7cc9b9b2b56a913d2c1b19be6053">Disconnect</a> ()</td></tr>
<tr class="memdesc:a384c7cc9b9b2b56a913d2c1b19be6053"><td class="mdescLeft">&#160;</td><td class="mdescRight">Close the connection with FTP server.  <a href="#a384c7cc9b9b2b56a913d2c1b19be6053"></a><br/></td></tr>
<tr class="separator:a384c7cc9b9b2b56a913d2c1b19be6053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a43455f62fe8ebec663d16e9f58c07b3d"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a43455f62fe8ebec663d16e9f58c07b3d">KeepAlive</a> ()</td></tr>
<tr class="memdesc:a43455f62fe8ebec663d16e9f58c07b3d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Send a null command just to prevent from being disconnected.  <a href="#a43455f62fe8ebec663d16e9f58c07b3d"></a><br/></td></tr>
<tr class="separator:a43455f62fe8ebec663d16e9f58c07b3d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9eead95300df9c6fbbdb5b9f4ed546e6"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1DirectoryResponse.php">DirectoryResponse</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a9eead95300df9c6fbbdb5b9f4ed546e6">GetWorkingDirectory</a> ()</td></tr>
<tr class="memdesc:a9eead95300df9c6fbbdb5b9f4ed546e6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current working directory.  <a href="#a9eead95300df9c6fbbdb5b9f4ed546e6"></a><br/></td></tr>
<tr class="separator:a9eead95300df9c6fbbdb5b9f4ed546e6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a73d8e6222d3be4f70b9b6e8c5203be13"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1ListingResponse.php">ListingResponse</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a73d8e6222d3be4f70b9b6e8c5203be13">GetDirectoryListing</a> (const std::string &amp;Directory=&quot;&quot;)</td></tr>
<tr class="memdesc:a73d8e6222d3be4f70b9b6e8c5203be13"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the contents of the given directory (subdirectories and files)  <a href="#a73d8e6222d3be4f70b9b6e8c5203be13"></a><br/></td></tr>
<tr class="separator:a73d8e6222d3be4f70b9b6e8c5203be13"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4c3b2d61ea3b14512d62230c8d7ed16a"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a4c3b2d61ea3b14512d62230c8d7ed16a">ChangeDirectory</a> (const std::string &amp;Directory)</td></tr>
<tr class="memdesc:a4c3b2d61ea3b14512d62230c8d7ed16a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the current working directory.  <a href="#a4c3b2d61ea3b14512d62230c8d7ed16a"></a><br/></td></tr>
<tr class="separator:a4c3b2d61ea3b14512d62230c8d7ed16a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0a87e424524a3b9a859401523f3fbe25"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a0a87e424524a3b9a859401523f3fbe25">ParentDirectory</a> ()</td></tr>
<tr class="memdesc:a0a87e424524a3b9a859401523f3fbe25"><td class="mdescLeft">&#160;</td><td class="mdescRight">Go to the parent directory of the current one.  <a href="#a0a87e424524a3b9a859401523f3fbe25"></a><br/></td></tr>
<tr class="separator:a0a87e424524a3b9a859401523f3fbe25"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a041469cd9933e25ff5b7e8e416268052"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a041469cd9933e25ff5b7e8e416268052">MakeDirectory</a> (const std::string &amp;Name)</td></tr>
<tr class="memdesc:a041469cd9933e25ff5b7e8e416268052"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create a new directory.  <a href="#a041469cd9933e25ff5b7e8e416268052"></a><br/></td></tr>
<tr class="separator:a041469cd9933e25ff5b7e8e416268052"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3134faf8de7dd67eccb0f368b628bc0e"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a3134faf8de7dd67eccb0f368b628bc0e">DeleteDirectory</a> (const std::string &amp;Name)</td></tr>
<tr class="memdesc:a3134faf8de7dd67eccb0f368b628bc0e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Remove an existing directory.  <a href="#a3134faf8de7dd67eccb0f368b628bc0e"></a><br/></td></tr>
<tr class="separator:a3134faf8de7dd67eccb0f368b628bc0e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afc5a927da340c9098b81f770505197c8"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#afc5a927da340c9098b81f770505197c8">RenameFile</a> (const std::string &amp;File, const std::string &amp;NewName)</td></tr>
<tr class="memdesc:afc5a927da340c9098b81f770505197c8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Rename a file.  <a href="#afc5a927da340c9098b81f770505197c8"></a><br/></td></tr>
<tr class="separator:afc5a927da340c9098b81f770505197c8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9bc9010d8f91446fec5574565ff07b4f"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a9bc9010d8f91446fec5574565ff07b4f">DeleteFile</a> (const std::string &amp;Name)</td></tr>
<tr class="memdesc:a9bc9010d8f91446fec5574565ff07b4f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Remove an existing file.  <a href="#a9bc9010d8f91446fec5574565ff07b4f"></a><br/></td></tr>
<tr class="separator:a9bc9010d8f91446fec5574565ff07b4f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3a2f842d29d83f7f036a32769ffd273d"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a3a2f842d29d83f7f036a32769ffd273d">Download</a> (const std::string &amp;DistantFile, const std::string &amp;DestPath, <a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cb">TransferMode</a> Mode=<a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cba6f253b362639fb5e059dc292762a21ee">Binary</a>)</td></tr>
<tr class="memdesc:a3a2f842d29d83f7f036a32769ffd273d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Download a file from the server.  <a href="#a3a2f842d29d83f7f036a32769ffd273d"></a><br/></td></tr>
<tr class="separator:a3a2f842d29d83f7f036a32769ffd273d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6108cc321164bea360ca29b1e720051e"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Ftp.php#a6108cc321164bea360ca29b1e720051e">Upload</a> (const std::string &amp;LocalFile, const std::string &amp;DestPath, <a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cb">TransferMode</a> Mode=<a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cba6f253b362639fb5e059dc292762a21ee">Binary</a>)</td></tr>
<tr class="memdesc:a6108cc321164bea360ca29b1e720051e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Upload a file to the server.  <a href="#a6108cc321164bea360ca29b1e720051e"></a><br/></td></tr>
<tr class="separator:a6108cc321164bea360ca29b1e720051e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:a8dee57337b6a7e183bfe21d178757b0c"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a8dee57337b6a7e183bfe21d178757b0c"></a>
class&#160;</td><td class="memItemRight" valign="bottom"><b>DataChannel</b></td></tr>
<tr class="separator:a8dee57337b6a7e183bfe21d178757b0c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>This class provides methods for manipulating the FTP protocol (described in RFC 959). </p>
<p>It provides easy access and transfers to remote directories and files on a FTP server </p>

<p>Definition at line <a class="el" href="Ftp_8hpp_source.php#l00047">47</a> of file <a class="el" href="Ftp_8hpp_source.php">Ftp.hpp</a>.</p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a class="anchor" id="a1cd6b89ad23253f6d97e6d4ca4d558cb"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cb">sf::Ftp::TransferMode</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enumeration of transfer modes. </p>
<dl><dt><b>Enumerator: </b></dt><dd><table border="0" cellspacing="2" cellpadding="0">
<tr><td valign="top"><em><a class="anchor" id="a1cd6b89ad23253f6d97e6d4ca4d558cba6f253b362639fb5e059dc292762a21ee"></a>Binary</em>&nbsp;</td><td>
<p>Binary mode (file is transfered as a sequence of bytes) </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="a1cd6b89ad23253f6d97e6d4ca4d558cbac9e544a22dce8ef3177449cb235d15c2"></a>Ascii</em>&nbsp;</td><td>
<p>Text mode using ASCII encoding. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="a1cd6b89ad23253f6d97e6d4ca4d558cbabb1e34435231e73c96534c71090be7f4"></a>Ebcdic</em>&nbsp;</td><td>
<p>Text mode using EBCDIC encoding. </p>
</td></tr>
</table>
</dd>
</dl>

<p>Definition at line <a class="el" href="Ftp_8hpp_source.php#l00054">54</a> of file <a class="el" href="Ftp_8hpp_source.php">Ftp.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a2edfa8e9009caf27bce74459ae76dc52"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Ftp::~Ftp </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor &ndash; close the connection with the server. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a4c3b2d61ea3b14512d62230c8d7ed16a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::ChangeDirectory </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>Directory</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Change the current working directory. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Directory</td><td>: New directory, relative to the current one</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a8fee5fc52934a4dfef076303b71995d8"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::Connect </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1IPAddress.php">IPAddress</a> &amp;&#160;</td>
          <td class="paramname"><em>Server</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned short&#160;</td>
          <td class="paramname"><em>Port</em> = <code>21</code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>Timeout</em> = <code>0.f</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Connect to the specified FTP server. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Server</td><td>: FTP server to connect to </td></tr>
    <tr><td class="paramname">Port</td><td>: Port used for connection (21 by default, standard FTP port) </td></tr>
    <tr><td class="paramname">Timeout</td><td>: Maximum time to wait, in seconds (0 by default, means no timeout)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a3134faf8de7dd67eccb0f368b628bc0e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::DeleteDirectory </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>Name</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Remove an existing directory. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Name</td><td>: Name of the directory to remove</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a9bc9010d8f91446fec5574565ff07b4f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::DeleteFile </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>Name</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Remove an existing file. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Name</td><td>: File to remove</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a384c7cc9b9b2b56a913d2c1b19be6053"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::Disconnect </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Close the connection with FTP server. </p>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a3a2f842d29d83f7f036a32769ffd273d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::Download </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>DistantFile</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>DestPath</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cb">TransferMode</a>&#160;</td>
          <td class="paramname"><em>Mode</em> = <code><a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cba6f253b362639fb5e059dc292762a21ee">Binary</a></code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Download a file from the server. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">DistantFile</td><td>: Path of the distant file to download </td></tr>
    <tr><td class="paramname">DestPath</td><td>: Where to put to file on the local computer </td></tr>
    <tr><td class="paramname">Mode</td><td>: Transfer mode (binary by default)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a73d8e6222d3be4f70b9b6e8c5203be13"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1ListingResponse.php">ListingResponse</a> sf::Ftp::GetDirectoryListing </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>Directory</em> = <code>&quot;&quot;</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the contents of the given directory (subdirectories and files) </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Directory</td><td>: Directory to list ("" by default, the current one)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a9eead95300df9c6fbbdb5b9f4ed546e6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1DirectoryResponse.php">DirectoryResponse</a> sf::Ftp::GetWorkingDirectory </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the current working directory. </p>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a43455f62fe8ebec663d16e9f58c07b3d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::KeepAlive </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Send a null command just to prevent from being disconnected. </p>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a45c9d8037f328aeae34b4eca7f277792"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::Login </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Log in using anonymous account. </p>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a4d40a0f1d9c900eb7be7558f41a896b6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::Login </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>UserName</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>Password</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Log in using a username and a password. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">UserName</td><td>: User name </td></tr>
    <tr><td class="paramname">Password</td><td>: Password</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a041469cd9933e25ff5b7e8e416268052"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::MakeDirectory </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>Name</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Create a new directory. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Name</td><td>: Name of the directory to create</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a0a87e424524a3b9a859401523f3fbe25"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::ParentDirectory </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Go to the parent directory of the current one. </p>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="afc5a927da340c9098b81f770505197c8"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::RenameFile </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>File</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>NewName</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Rename a file. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">File</td><td>: File to rename </td></tr>
    <tr><td class="paramname">NewName</td><td>: New name</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<a class="anchor" id="a6108cc321164bea360ca29b1e720051e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Ftp_1_1Response.php">Response</a> sf::Ftp::Upload </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>LocalFile</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>DestPath</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cb">TransferMode</a>&#160;</td>
          <td class="paramname"><em>Mode</em> = <code><a class="el" href="classsf_1_1Ftp.php#a1cd6b89ad23253f6d97e6d4ca4d558cba6f253b362639fb5e059dc292762a21ee">Binary</a></code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Upload a file to the server. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">LocalFile</td><td>: Path of the local file to upload </td></tr>
    <tr><td class="paramname">DestPath</td><td>: Where to put to file on the server </td></tr>
    <tr><td class="paramname">Mode</td><td>: Transfer mode (binary by default)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server response to the request </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Ftp_8hpp_source.php">Ftp.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
