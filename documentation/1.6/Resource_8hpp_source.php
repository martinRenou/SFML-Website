<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Resource.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
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
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_60c5c649f8df3b69a45a020d59f81335.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Resource.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007 Laurent Gomila (laurent.gom@gmail.com)</span></div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_RESOURCE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_RESOURCE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;set&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;{</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="comment">// These two classes are defined in the same header because</span></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="comment">// they depend on each other. And as they&#39;re template classes,</span></div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="comment">// they must be entirely defined in header files, which</span></div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="comment">// prevents from proper separate compiling</span></div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00043"></a><span class="lineno"><a class="code" href="classResourcePtr.php">   43</a></span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span>&gt; <span class="keyword">class </span><a class="code" href="classResourcePtr.php">ResourcePtr</a>;</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00050"></a><span class="lineno"><a class="code" href="classsf_1_1Resource.php">   50</a></span>&#160;<span class="keyword">class </span><a class="code" href="classsf_1_1Resource.php" title="Base class for every resource that needs to notify dependent classes about its destruction.">Resource</a></div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;{</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="keyword">protected</span> :</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;    <a class="code" href="classsf_1_1Resource.php#aa044d32edfcd9b6aebd50d03658e8130" title="Default constructor.">Resource</a>();</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    <a class="code" href="classsf_1_1Resource.php#aa044d32edfcd9b6aebd50d03658e8130" title="Default constructor.">Resource</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Resource.php" title="Base class for every resource that needs to notify dependent classes about its destruction.">Resource&lt;T&gt;</a>&amp; Copy);</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;    <a class="code" href="classsf_1_1Resource.php#a0e83e83339851d7b3246939bde3fc1ac" title="Destructor.">~Resource</a>();</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;    <a class="code" href="classsf_1_1Resource.php" title="Base class for every resource that needs to notify dependent classes about its destruction.">Resource&lt;T&gt;</a>&amp; <a class="code" href="classsf_1_1Resource.php#a772badbe4813a5b459f588698ac7ad60" title="Assignment operator.">operator =</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Resource.php" title="Base class for every resource that needs to notify dependent classes about its destruction.">Resource&lt;T&gt;</a>&amp; Other);</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1ResourcePtr.php" title="Safe pointer to a T resource (inheriting from sf::Resource&lt;T&gt;), its pointer is automatically reseted ...">ResourcePtr</a>&lt;T&gt;;</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;    <span class="keywordtype">void</span> Connect(<a class="code" href="classsf_1_1ResourcePtr.php" title="Safe pointer to a T resource (inheriting from sf::Resource&lt;T&gt;), its pointer is automatically reseted ...">ResourcePtr&lt;T&gt;</a>&amp; Observer) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;    <span class="keywordtype">void</span> Disconnect(<a class="code" href="classsf_1_1ResourcePtr.php" title="Safe pointer to a T resource (inheriting from sf::Resource&lt;T&gt;), its pointer is automatically reseted ...">ResourcePtr&lt;T&gt;</a>&amp; Observer) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;<span class="comment"></span>    <span class="keyword">mutable</span> std::set&lt;ResourcePtr&lt;T&gt;*&gt; myObservers;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;};</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00116"></a><span class="lineno"><a class="code" href="classsf_1_1ResourcePtr.php">  116</a></span>&#160;<span class="keyword">class </span><a class="code" href="classsf_1_1ResourcePtr.php" title="Safe pointer to a T resource (inheriting from sf::Resource&lt;T&gt;), its pointer is automatically reseted ...">ResourcePtr</a></div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;{</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;    <a class="code" href="classsf_1_1ResourcePtr.php#a48ddcd15ed75e9ee3ea88e4d29402140" title="Default constructor.">ResourcePtr</a>();</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;    <a class="code" href="classsf_1_1ResourcePtr.php#a48ddcd15ed75e9ee3ea88e4d29402140" title="Default constructor.">ResourcePtr</a>(<span class="keyword">const</span> T* <a class="code" href="classsf_1_1Resource.php" title="Base class for every resource that needs to notify dependent classes about its destruction.">Resource</a>);</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;    <a class="code" href="classsf_1_1ResourcePtr.php#a48ddcd15ed75e9ee3ea88e4d29402140" title="Default constructor.">ResourcePtr</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1ResourcePtr.php" title="Safe pointer to a T resource (inheriting from sf::Resource&lt;T&gt;), its pointer is automatically reseted ...">ResourcePtr&lt;T&gt;</a>&amp; Copy);</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;    <a class="code" href="classsf_1_1ResourcePtr.php#a0ec69fdecccd1240030b24385f6884dd" title="Destructor.">~ResourcePtr</a>();</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;    <a class="code" href="classsf_1_1ResourcePtr.php" title="Safe pointer to a T resource (inheriting from sf::Resource&lt;T&gt;), its pointer is automatically reseted ...">ResourcePtr&lt;T&gt;</a>&amp; <a class="code" href="classsf_1_1ResourcePtr.php#aefd17640cfe8d96934435fb8f2b40574" title="Assignment operator from another ResourcePtr.">operator =</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1ResourcePtr.php" title="Safe pointer to a T resource (inheriting from sf::Resource&lt;T&gt;), its pointer is automatically reseted ...">ResourcePtr&lt;T&gt;</a>&amp; Other);</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;    <a class="code" href="classsf_1_1ResourcePtr.php" title="Safe pointer to a T resource (inheriting from sf::Resource&lt;T&gt;), its pointer is automatically reseted ...">ResourcePtr&lt;T&gt;</a>&amp; <a class="code" href="classsf_1_1ResourcePtr.php#aefd17640cfe8d96934435fb8f2b40574" title="Assignment operator from another ResourcePtr.">operator =</a>(<span class="keyword">const</span> T* Resource);</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;</div>
<div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;    <span class="keyword">operator</span> <span class="keyword">const</span> T*() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;</div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;    <span class="keyword">const</span> T&amp; <a class="code" href="classsf_1_1ResourcePtr.php#a4e5401c5a07347a35cc3b9192e11b071" title="Operator * overload to return a reference to the actual resource.">operator *</a>() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;    <span class="keyword">const</span> T* <a class="code" href="classsf_1_1ResourcePtr.php#ae58ea517eee0a97a778c3c59e4c3fe3a" title="Operator -&gt; overload to return a pointer to the actual resource.">operator -&gt;</a>() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;</div>
<div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;    <span class="keywordtype">void</span> <a class="code" href="classsf_1_1ResourcePtr.php#ae7e9d9ed819db0f541a7c22f5a28abf9" title="Function called when the observed resource is about to be destroyed.">OnResourceDestroyed</a>();</div>
<div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;</div>
<div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;</div>
<div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;<span class="comment"></span>    <span class="keyword">const</span> T* myResource; </div>
<div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;};</div>
<div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;</div>
<div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Resource.inl&gt;</span></div>
<div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;<span class="preprocessor">#include &lt;SFML/System/ResourcePtr.inl&gt;</span></div>
<div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;</div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;</div>
<div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;</div>
<div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;<span class="preprocessor">#endif // SFML_RESOURCE_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
