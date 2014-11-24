<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_b9ac88db2949395b3130dd4ffb1be4e1.php">Network</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">UdpSocket.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2013 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_UDPSOCKET_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_UDPSOCKET_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Network/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Network/Socket.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">class </span>IpAddress;</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>Packet;</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div>
<div class="line"><a name="l00045"></a><span class="lineno"><a class="code" href="classsf_1_1UdpSocket.php">   45</a></span>&#160;<span class="keyword">class </span>SFML_NETWORK_API <a class="code" href="classsf_1_1UdpSocket.php" title="Specialized socket using the UDP protocol.">UdpSocket</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Socket.php" title="Base class for all the socket types.">Socket</a></div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    <span class="comment">// Constants</span></div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="comment"></span>    <span class="keyword">enum</span></div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;    {</div>
<div class="line"><a name="l00054"></a><span class="lineno"><a class="code" href="classsf_1_1UdpSocket.php#a14c7b7816e33ed1ef1f2fdb2404c06b5a728a7d33027bee0d65f70f964dd9c9eb">   54</a></span>&#160;        MaxDatagramSize = 65507 </div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    };</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    <a class="code" href="classsf_1_1UdpSocket.php" title="Specialized socket using the UDP protocol.">UdpSocket</a>();</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> getLocalPort() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;    Status bind(<span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> port);</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;    <span class="keywordtype">void</span> unbind();</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;    Status send(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t size, <span class="keyword">const</span> <a class="code" href="classsf_1_1IpAddress.php" title="Encapsulate an IPv4 network address.">IpAddress</a>&amp; remoteAddress, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> remotePort);</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;    Status receive(<span class="keywordtype">void</span>* data, std::size_t size, std::size_t&amp; received, <a class="code" href="classsf_1_1IpAddress.php" title="Encapsulate an IPv4 network address.">IpAddress</a>&amp; remoteAddress, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span>&amp; remotePort);</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;</div>
<div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;    Status send(<a class="code" href="classsf_1_1Packet.php" title="Utility class to build blocks of data to transfer over the network.">Packet</a>&amp; packet, <span class="keyword">const</span> <a class="code" href="classsf_1_1IpAddress.php" title="Encapsulate an IPv4 network address.">IpAddress</a>&amp; remoteAddress, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> remotePort);</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;</div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;    Status receive(<a class="code" href="classsf_1_1Packet.php" title="Utility class to build blocks of data to transfer over the network.">Packet</a>&amp; packet, <a class="code" href="classsf_1_1IpAddress.php" title="Encapsulate an IPv4 network address.">IpAddress</a>&amp; remoteAddress, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span>&amp; remotePort);</div>
<div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;</div>
<div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;<span class="comment"></span>    std::vector&lt;char&gt; m_buffer; </div>
<div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;};</div>
<div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;</div>
<div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;</div>
<div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;<span class="preprocessor">#endif // SFML_UDPSOCKET_HPP</span></div>
<div class="line"><a name="l00195"></a><span class="lineno">  195</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00196"></a><span class="lineno">  196</span>&#160;</div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
