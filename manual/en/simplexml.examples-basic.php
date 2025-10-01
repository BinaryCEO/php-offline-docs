<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Basic SimpleXML usage - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/simplexml.examples-basic.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/simplexml.examples-basic.php">
 <link rel="alternate" href="https://www.php.net/manual/en/simplexml.examples-basic.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/simplexml.examples.php">
 <link rel="prev" href="https://www.php.net/manual/en/simplexml.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/simplexml.examples-errors.php">

 <link rel="alternate" href="https://www.php.net/manual/en/simplexml.examples-basic.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/simplexml.examples-basic.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/simplexml.examples-basic.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/simplexml.examples-basic.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/simplexml.examples-basic.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/simplexml.examples-basic.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/simplexml.examples-basic.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/simplexml.examples-basic.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/simplexml.examples-basic.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/simplexml.examples-basic.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/simplexml.examples-basic.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Basic SimpleXML usage" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Basic SimpleXML usage - Manual" />
<meta name="twitter:description" content="Basic SimpleXML usage" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Basic SimpleXML usage - Manual" />
<meta itemprop="description" content="Basic SimpleXML usage" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Basic SimpleXML usage" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="simplexml.examples-errors.php">
          Dealing with XML errors &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="simplexml.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.simplexml.php'>SimpleXML</a></li>      <li><a href='simplexml.examples.php'>Examples</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/simplexml.examples-basic.php' selected="selected">English</option>
            <option value='de/simplexml.examples-basic.php'>German</option>
            <option value='es/simplexml.examples-basic.php'>Spanish</option>
            <option value='fr/simplexml.examples-basic.php'>French</option>
            <option value='it/simplexml.examples-basic.php'>Italian</option>
            <option value='ja/simplexml.examples-basic.php'>Japanese</option>
            <option value='pt_BR/simplexml.examples-basic.php'>Brazilian Portuguese</option>
            <option value='ru/simplexml.examples-basic.php'>Russian</option>
            <option value='tr/simplexml.examples-basic.php'>Turkish</option>
            <option value='uk/simplexml.examples-basic.php'>Ukrainian</option>
            <option value='zh/simplexml.examples-basic.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="simplexml.examples-basic" class="section">
  <h2 class="title">Basic SimpleXML usage</h2>
  <p class="para">
   Many examples in this reference require an XML string. Instead of
   repeating this string in every example, we put it into a file which
   we include in each example. This included file is shown in the 
   following example section. Alternatively, you could create an XML
   document and read it with <span class="function"><a href="function.simplexml-load-file.php" class="function">simplexml_load_file()</a></span>.
  </p>
  <p class="para">
   <div class="example" id="example-5860">
    <p><strong>Example #1 Include file examples/simplexml-data.php with XML string</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$xmlstr </span><span style="color: #007700">= &lt;&lt;&lt;XML<br /></span><span style="color: #DD0000">&lt;?xml version='1.0' standalone='yes'?&gt;<br />&lt;movies&gt;<br /> &lt;movie&gt;<br />  &lt;title&gt;PHP: Behind the Parser&lt;/title&gt;<br />  &lt;characters&gt;<br />   &lt;character&gt;<br />    &lt;name&gt;Ms. Coder&lt;/name&gt;<br />    &lt;actor&gt;Onlivia Actora&lt;/actor&gt;<br />   &lt;/character&gt;<br />   &lt;character&gt;<br />    &lt;name&gt;Mr. Coder&lt;/name&gt;<br />    &lt;actor&gt;El Act&amp;#211;r&lt;/actor&gt;<br />   &lt;/character&gt;<br />  &lt;/characters&gt;<br />  &lt;plot&gt;<br />   So, this language. It's like, a programming language. Or is it a<br />   scripting language? All is revealed in this thrilling horror spoof<br />   of a documentary.<br />  &lt;/plot&gt;<br />  &lt;great-lines&gt;<br />   &lt;line&gt;PHP solves all my web problems&lt;/line&gt;<br />  &lt;/great-lines&gt;<br />  &lt;rating type="thumbs"&gt;7&lt;/rating&gt;<br />  &lt;rating type="stars"&gt;5&lt;/rating&gt;<br /> &lt;/movie&gt;<br />&lt;/movies&gt;<br /></span><span style="color: #007700">XML;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   The simplicity of SimpleXML appears most clearly when one extracts
   a string or number from a basic XML document.
   <div class="example" id="example-5861">
    <p><strong>Example #2 Getting <code class="literal">&lt;plot&gt;</code></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$movies </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">plot</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>

   So, this language. It&#039;s like, a programming language. Or is it a
   scripting language? All is revealed in this thrilling horror spoof
   of a documentary.

</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   Accessing elements within an XML document that contain characters not permitted under 
   PHP&#039;s naming convention (e.g. the hyphen) can be accomplished by encapsulating the
   element name within braces and the apostrophe.
   <div class="example" id="example-5862">
    <p><strong>Example #3 Getting <code class="literal">&lt;line&gt;</code></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$movies </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">-&gt;{</span><span style="color: #DD0000">'great-lines'</span><span style="color: #007700">}-&gt;</span><span style="color: #0000BB">line</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
PHP solves all my web problems
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5863">
    <p><strong>Example #4 Accessing non-unique elements in SimpleXML</strong></p>
    <div class="example-contents"><p>
     When multiple instances of an element exist as children of
     a single parent element, normal iteration techniques apply.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$movies </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* For each &lt;character&gt; node, we echo a separate &lt;name&gt;. */<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">characters</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">character </span><span style="color: #007700">as </span><span style="color: #0000BB">$character</span><span style="color: #007700">) {<br />   echo </span><span style="color: #0000BB">$character</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">, </span><span style="color: #DD0000">' played by '</span><span style="color: #007700">, </span><span style="color: #0000BB">$character</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">actor</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Ms. Coder played by Onlivia Actora
Mr. Coder played by El ActÓr
</pre></div>
    </div>
   </div>
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Properties (<code class="literal">$movies-&gt;movie</code> in previous example) are not
    arrays. They are <a href="class.iterator.php" class="link">iterable</a> and
    <a href="class.arrayaccess.php" class="link">accessible</a> objects.
   </p>
  </p></blockquote>
  <p class="para">
   <div class="example" id="example-5864">
    <p><strong>Example #5 Using attributes</strong></p>
    <div class="example-contents"><p>
     So far, we have only covered the work of reading element names
     and their values. SimpleXML can also access element attributes.
     Access attributes of an element just as you would elements
     of an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$movies </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Access the &lt;rating&gt; nodes of the first movie.<br /> * Output the rating scale, too. */<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">rating </span><span style="color: #007700">as </span><span style="color: #0000BB">$rating</span><span style="color: #007700">) {<br />    switch((string) </span><span style="color: #0000BB">$rating</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]) { </span><span style="color: #FF8000">// Get attributes as element indices<br />    </span><span style="color: #007700">case </span><span style="color: #DD0000">'thumbs'</span><span style="color: #007700">:<br />        echo </span><span style="color: #0000BB">$rating</span><span style="color: #007700">, </span><span style="color: #DD0000">' thumbs up'</span><span style="color: #007700">;<br />        break;<br />    case </span><span style="color: #DD0000">'stars'</span><span style="color: #007700">:<br />        echo </span><span style="color: #0000BB">$rating</span><span style="color: #007700">, </span><span style="color: #DD0000">' stars'</span><span style="color: #007700">;<br />        break;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
7 thumbs up5 stars
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5865">
    <p><strong>Example #6 Comparing Elements and Attributes with Text</strong></p>
    <div class="example-contents"><p>
     To compare an element or attribute with a string or pass it into a 
     function that requires a string, you must cast it to a string using 
     <code class="literal">(string)</code>. Otherwise, PHP treats the element as an object.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$movies </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /><br />if ((string) </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">title </span><span style="color: #007700">== </span><span style="color: #DD0000">'PHP: Behind the Parser'</span><span style="color: #007700">) {<br />    print </span><span style="color: #DD0000">'My favorite movie.'</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">((string) </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">title</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
My favorite movie.PHP: Behind the Parser
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5866">
    <p><strong>Example #7 Comparing Two Elements</strong></p>
    <div class="example-contents"><p>
     Two SimpleXMLElements are considered different even if they point to the
     same element.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$movies1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$movies2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$movies1 </span><span style="color: #007700">== </span><span style="color: #0000BB">$movies2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(false)
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5867">
    <p><strong>Example #8 Using XPath</strong></p>
    <div class="example-contents"><p>
     SimpleXML includes built-in <abbr title="XML Path Language">XPath</abbr> support.
     To find all <code class="literal">&lt;character&gt;</code> elements.
    </p></div>
    <div class="example-contents"><p>
     &#039;<code class="literal">//</code>&#039; serves as a wildcard. To specify absolute
     paths, omit one of the slashes:
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$movies </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">xpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'//character'</span><span style="color: #007700">) as </span><span style="color: #0000BB">$character</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$character</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">, </span><span style="color: #DD0000">' played by '</span><span style="color: #007700">, </span><span style="color: #0000BB">$character</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">actor</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Ms. Coder played by Onlivia Actora
Mr. Coder played by El ActÓr
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5868">
    <p><strong>Example #9 Setting values</strong></p>
    <div class="example-contents"><p>
     Data in SimpleXML doesn&#039;t have to be constant. The object allows
     for manipulation of all of its elements.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$movies </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">characters</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">character</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">name </span><span style="color: #007700">= </span><span style="color: #DD0000">'Miss Coder'</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asXML</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
&lt;?xml version=&quot;1.0&quot; standalone=&quot;yes&quot;?&gt;
&lt;movies&gt;
 &lt;movie&gt;
  &lt;title&gt;PHP: Behind the Parser&lt;/title&gt;
  &lt;characters&gt;
   &lt;character&gt;
    &lt;name&gt;Miss Coder&lt;/name&gt;
    &lt;actor&gt;Onlivia Actora&lt;/actor&gt;
   &lt;/character&gt;
   &lt;character&gt;
    &lt;name&gt;Mr. Coder&lt;/name&gt;
    &lt;actor&gt;El Act&amp;#xD3;r&lt;/actor&gt;
   &lt;/character&gt;
  &lt;/characters&gt;
  &lt;plot&gt;
   So, this language. It&#039;s like, a programming language. Or is it a
   scripting language? All is revealed in this thrilling horror spoof
   of a documentary.
  &lt;/plot&gt;
  &lt;great-lines&gt;
   &lt;line&gt;PHP solves all my web problems&lt;/line&gt;
  &lt;/great-lines&gt;
  &lt;rating type=&quot;thumbs&quot;&gt;7&lt;/rating&gt;
  &lt;rating type=&quot;stars&quot;&gt;5&lt;/rating&gt;
 &lt;/movie&gt;
&lt;/movies&gt;
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5869">
    <p><strong>Example #10 Adding elements and attributes</strong></p>
    <div class="example-contents"><p>
     SimpleXML has had the ability to easily add children and
     attributes.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$movies </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$character </span><span style="color: #007700">= </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">characters</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'character'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$character</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Mr. Parser'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$character</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'actor'</span><span style="color: #007700">, </span><span style="color: #DD0000">'John Doe'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$rating </span><span style="color: #007700">= </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'rating'</span><span style="color: #007700">, </span><span style="color: #DD0000">'PG'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$rating</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'type'</span><span style="color: #007700">, </span><span style="color: #DD0000">'mpaa'</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asXML</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
&lt;?xml version=&quot;1.0&quot; standalone=&quot;yes&quot;?&gt;
&lt;movies&gt;
 &lt;movie&gt;
  &lt;title&gt;PHP: Behind the Parser&lt;/title&gt;
  &lt;characters&gt;
   &lt;character&gt;
    &lt;name&gt;Ms. Coder&lt;/name&gt;
    &lt;actor&gt;Onlivia Actora&lt;/actor&gt;
   &lt;/character&gt;
   &lt;character&gt;
    &lt;name&gt;Mr. Coder&lt;/name&gt;
    &lt;actor&gt;El Act&amp;#xD3;r&lt;/actor&gt;
   &lt;/character&gt;
  &lt;character&gt;&lt;name&gt;Mr. Parser&lt;/name&gt;&lt;actor&gt;John Doe&lt;/actor&gt;&lt;/character&gt;&lt;/characters&gt;
  &lt;plot&gt;
   So, this language. It&#039;s like, a programming language. Or is it a
   scripting language? All is revealed in this thrilling horror spoof
   of a documentary.
  &lt;/plot&gt;
  &lt;great-lines&gt;
   &lt;line&gt;PHP solves all my web problems&lt;/line&gt;
  &lt;/great-lines&gt;
  &lt;rating type=&quot;thumbs&quot;&gt;7&lt;/rating&gt;
  &lt;rating type=&quot;stars&quot;&gt;5&lt;/rating&gt;
 &lt;rating type=&quot;mpaa&quot;&gt;PG&lt;/rating&gt;&lt;/movie&gt;
&lt;/movies&gt;
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5870">
    <p><strong>Example #11 DOM Interoperability</strong></p>
    <div class="example-contents"><p>
     PHP has a mechanism to convert XML nodes between SimpleXML
     and DOM formats. This example shows how one might change
     a DOM element to SimpleXML.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$dom </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadXML</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;books&gt;&lt;book&gt;&lt;title&gt;blah&lt;/title&gt;&lt;/book&gt;&lt;/books&gt;'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$dom</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Error while parsing the document'</span><span style="color: #007700">;<br />    exit;<br />}<br /><br /></span><span style="color: #0000BB">$books </span><span style="color: #007700">= </span><span style="color: #0000BB">simplexml_import_dom</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$books</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">book</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">title</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
blah
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5871">
    <p><strong>Example #12 Working with namespaces</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$data </span><span style="color: #007700">= &lt;&lt;&lt;XML<br /></span><span style="color: #DD0000">&lt;movies xmlns="http://default" xmlns:a="http://a"&gt;<br /> &lt;movie xml:id="movie1" a:link="IMDB"&gt;<br />  &lt;a:actor&gt;Onlivia Actora&lt;/a:actor&gt;<br /> &lt;/movie&gt;<br />&lt;/movies&gt;<br /></span><span style="color: #007700">XML;<br /><br /></span><span style="color: #0000BB">$movies </span><span style="color: #007700">= </span><span style="color: #0000BB">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Namespace http://www.w3.org/XML/1998/namespace is available as "xml".<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">(</span><span style="color: #DD0000">"xml"</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">)[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Namespaced attributes can be accessed with attributes().<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">(</span><span style="color: #DD0000">"a"</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">)[</span><span style="color: #DD0000">"link"</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Using namespace URI allows document to use any namespace alias.<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://a"</span><span style="color: #007700">)[</span><span style="color: #DD0000">"link"</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Children can be accessed with children().<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://a"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">actor </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Using xpath() with namespace requires registering it first.<br /></span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerXPathNamespace</span><span style="color: #007700">(</span><span style="color: #DD0000">"a"</span><span style="color: #007700">, </span><span style="color: #DD0000">"http://a"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">xpath</span><span style="color: #007700">(</span><span style="color: #DD0000">"//a:actor"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Even the default namespace must be registered.<br /></span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerXPathNamespace</span><span style="color: #007700">(</span><span style="color: #DD0000">"default"</span><span style="color: #007700">, </span><span style="color: #DD0000">"http://default"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">xpath</span><span style="color: #007700">(</span><span style="color: #DD0000">"//default:movie"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// This is empty.<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$movies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">xpath</span><span style="color: #007700">(</span><span style="color: #DD0000">"//movie"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/simplexml/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsimplexml.examples-basic%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=simplexml.examples-basic&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexml.examples-basic.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117406">  <div class="votes">
    <div id="Vu117406">
    <a href="/manual/vote-note.php?id=117406&amp;page=simplexml.examples-basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117406">
    <a href="/manual/vote-note.php?id=117406&amp;page=simplexml.examples-basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117406" title="80% like this...">
    87
    </div>
  </div>
  <a href="#117406" class="name">
  <strong class="user"><em>rowan dot collins at gmail dot com</em></strong></a><a class="genanchor" href="#117406"> &para;</a><div class="date" title="2015-06-04 06:58"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117406">
<div class="phpcode"><code><span class="html">There is a common "trick" often proposed to convert a SimpleXML object to an array, by running it through json_encode() and then json_decode(). I'd like to explain why this is a bad idea.<br /><br />Most simply, because the whole point of SimpleXML is to be easier to use and more powerful than a plain array. For instance, you can write <span class="default">&lt;?php $foo</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">-&gt;</span><span class="default">baz</span><span class="keyword">[</span><span class="string">'bing'</span><span class="keyword">] </span><span class="default">?&gt;</span> and it means the same thing as <span class="default">&lt;?php $foo</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">baz</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'bing'</span><span class="keyword">] </span><span class="default">?&gt;</span>, regardless of how many bar or baz elements there are in the XML; and if you write <span class="default">&lt;?php </span><span class="keyword">(string)</span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">baz</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] </span><span class="default">?&gt;</span> you get all the string content of that node - including CDATA sections - regardless of whether it also has child elements or attributes. You also have access to namespace information, the ability to make simple edits to the XML, and even the ability to "import" into a DOM object, for much more powerful manipulation. All of this is lost by turning the object into an array rather than reading understanding the examples on this page.<br /><br />Additionally, because it is not designed for this purpose, the conversion to JSON and back will actually lose information in some situations. For instance, any elements or attributes in a namespace will simply be discarded, and any text content will be discarded if an element also has children or attributes. Sometimes, this won't matter, but if you get in the habit of converting everything to arrays, it's going to sting you eventually.<br /><br />Of course, you could write a smarter conversion, which didn't have these limitations, but at that point, you are getting no value out of SimpleXML at all, and should just use the lower level XML Parser functions, or the XMLReader class, to create your structure. You still won't have the extra convenience functionality of SimpleXML, but that's your loss.</span></code></div>
  </div>
 </div>
  <div class="note" id="111643">  <div class="votes">
    <div id="Vu111643">
    <a href="/manual/vote-note.php?id=111643&amp;page=simplexml.examples-basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111643">
    <a href="/manual/vote-note.php?id=111643&amp;page=simplexml.examples-basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111643" title="62% like this...">
    65
    </div>
  </div>
  <a href="#111643" class="name">
  <strong class="user"><em>jishcem at gmail dot com</em></strong></a><a class="genanchor" href="#111643"> &para;</a><div class="date" title="2013-03-12 07:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111643">
<div class="phpcode"><code><span class="html">For me it was easier to use arrays than objects, <br /><br />So, I used this code, <br /><br />$xml = simplexml_load_file('xml_file.xml');<br />    <br />$json_string = json_encode($xml);<br />    <br />$result_array = json_decode($json_string, TRUE);<br /><br />Hope it would help someone</span></code></div>
  </div>
 </div>
  <div class="note" id="121547">  <div class="votes">
    <div id="Vu121547">
    <a href="/manual/vote-note.php?id=121547&amp;page=simplexml.examples-basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121547">
    <a href="/manual/vote-note.php?id=121547&amp;page=simplexml.examples-basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121547" title="74% like this...">
    13
    </div>
  </div>
  <a href="#121547" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#121547"> &para;</a><div class="date" title="2017-08-22 12:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121547">
<div class="phpcode"><code><span class="html">If your xml string contains booleans encoded with "0" and "1", you will run into problems when you cast the element directly to bool:<br /><br />$xmlstr = &lt;&lt;&lt;XML<br />&lt;?xml version='1.0' standalone='yes'?&gt;<br />&lt;values&gt;<br />    &lt;truevalue&gt;1&lt;/truevalue&gt;<br />    &lt;falsevalue&gt;0&lt;/falsevalue&gt;<br />&lt;/values&gt;<br />XML;<br />$values = new SimpleXMLElement($xmlstr);<br />$truevalue = (bool)$values-&gt;truevalue; // true<br />$falsevalue = (bool)$values-&gt;falsevalue; // also true!!!<br /><br />Instead you need to cast to string or int first:<br /><br />$truevalue = (bool)(int)$values-&gt;truevalue; // true<br />$falsevalue = (bool)(int)$values-&gt;falsevalue; // false</span></code></div>
  </div>
 </div>
  <div class="note" id="126376">  <div class="votes">
    <div id="Vu126376">
    <a href="/manual/vote-note.php?id=126376&amp;page=simplexml.examples-basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126376">
    <a href="/manual/vote-note.php?id=126376&amp;page=simplexml.examples-basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126376" title="71% like this...">
    3
    </div>
  </div>
  <a href="#126376" class="name">
  <strong class="user"><em>Josef</em></strong></a><a class="genanchor" href="#126376"> &para;</a><div class="date" title="2021-09-01 06:54"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126376">
<div class="phpcode"><code><span class="html">How to find out if a Node exists:<br /><br />&lt;?xml version='1.0' standalone='yes'?&gt;<br />&lt;book&gt;<br />  &lt;author&gt;Josef&lt;/author&gt;<br />  &lt;isbn&gt;&lt;/isbn&gt;<br />&lt;/book&gt;<br /><br />empty($xml-&gt;isbn) will be true<br />isset($xml-&gt;isbn) will be true<br /><br />empty($xml-&gt;title) will be true<br />isset($xml-&gt;title) will be false</span></code></div>
  </div>
 </div>
  <div class="note" id="97111">  <div class="votes">
    <div id="Vu97111">
    <a href="/manual/vote-note.php?id=97111&amp;page=simplexml.examples-basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97111">
    <a href="/manual/vote-note.php?id=97111&amp;page=simplexml.examples-basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97111" title="60% like this...">
    16
    </div>
  </div>
  <a href="#97111" class="name">
  <strong class="user"><em>ie dot raymond at gmail dot com</em></strong></a><a class="genanchor" href="#97111"> &para;</a><div class="date" title="2010-04-01 03:07"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97111">
<div class="phpcode"><code><span class="html">If you need to output valid xml in your response, don't forget to set your header content type to xml in addition to echoing out the result of asXML():
<br />
<br /><span class="default">&lt;?php
<br />
<br />$xml</span><span class="keyword">=</span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">'...'</span><span class="keyword">);
<br />...
<br />...</span><span class="default">xml stuff
<br /></span><span class="keyword">...
<br />
<br /></span><span class="comment">//output xml in your response:
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: text/xml'</span><span class="keyword">);
<br />echo </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102599">  <div class="votes">
    <div id="Vu102599">
    <a href="/manual/vote-note.php?id=102599&amp;page=simplexml.examples-basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102599">
    <a href="/manual/vote-note.php?id=102599&amp;page=simplexml.examples-basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102599" title="60% like this...">
    10
    </div>
  </div>
  <a href="#102599" class="name">
  <strong class="user"><em>gkokmdam at zonnet dot nl</em></strong></a><a class="genanchor" href="#102599"> &para;</a><div class="date" title="2011-02-23 01:54"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102599">
<div class="phpcode"><code><span class="html">A quick tip on xpath queries and default namespaces. It looks like the XML-system behind SimpleXML has the same workings as I believe the XML-system .NET uses: when one needs to address something in the default namespace, one will have to declare the namespace using registerXPathNamespace and then use its prefix to address the otherwise in the default namespace living element.<br /><br /><span class="default">&lt;?php<br />$string </span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;?xml version='1.0'?&gt; <br />&lt;document xmlns="<a href="http://www.w3.org/2005/Atom" rel="nofollow" target="_blank">http://www.w3.org/2005/Atom</a>"&gt;<br /> &lt;title&gt;Forty What?&lt;/title&gt;<br /> &lt;from&gt;Joe&lt;/from&gt;<br /> &lt;to&gt;Jane&lt;/to&gt;<br /> &lt;body&gt;<br />  I know that's the answer -- but what's the question?<br /> &lt;/body&gt;<br />&lt;/document&gt;<br /></span><span class="keyword">XML;<br /><br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">registerXPathNamespace</span><span class="keyword">(</span><span class="string">"def"</span><span class="keyword">, </span><span class="string">"<a href="http://www.w3.org/2005/Atom" rel="nofollow" target="_blank">http://www.w3.org/2005/Atom</a>"</span><span class="keyword">);<br /><br /></span><span class="default">$nodes </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">"//def:document/def:title"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102167">  <div class="votes">
    <div id="Vu102167">
    <a href="/manual/vote-note.php?id=102167&amp;page=simplexml.examples-basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102167">
    <a href="/manual/vote-note.php?id=102167&amp;page=simplexml.examples-basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102167" title="59% like this...">
    8
    </div>
  </div>
  <a href="#102167" class="name">
  <strong class="user"><em>kdos</em></strong></a><a class="genanchor" href="#102167"> &para;</a><div class="date" title="2011-01-31 05:32"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102167">
<div class="phpcode"><code><span class="html">Using stuff like: is_object($xml-&gt;module-&gt;admin) to check if there actually is a node called "admin", doesn't seem to work as expected, since simplexml always returns an object- in that case an empty one  - even if a particular node does not exist. <br />For me good old empty() function seems to work just fine in such cases.<br /><br />Cheers</span></code></div>
  </div>
 </div>
  <div class="note" id="98523">  <div class="votes">
    <div id="Vu98523">
    <a href="/manual/vote-note.php?id=98523&amp;page=simplexml.examples-basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98523">
    <a href="/manual/vote-note.php?id=98523&amp;page=simplexml.examples-basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98523" title="56% like this...">
    4
    </div>
  </div>
  <a href="#98523" class="name">
  <strong class="user"><em>Max K.</em></strong></a><a class="genanchor" href="#98523"> &para;</a><div class="date" title="2010-06-20 02:38"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98523">
<div class="phpcode"><code><span class="html">From the README file:<br /><br />SimpleXML is meant to be an easy way to access XML data.<br /><br />SimpleXML objects follow four basic rules:<br /><br />1) properties denote element iterators<br />2) numeric indices denote elements<br />3) non numeric indices denote attributes<br />4) string conversion allows to access TEXT data<br /><br />When iterating properties then the extension always iterates over<br />all nodes with that element name. Thus method children() must be <br />called to iterate over subnodes. But also doing the following:<br />foreach ($obj-&gt;node_name as $elem) {<br />  // do something with $elem<br />}<br />always results in iteration of 'node_name' elements. So no further <br />check is needed to distinguish the number of nodes of that type.<br /><br />When an elements TEXT data is being accessed through a property<br />then the result does not include the TEXT data of subelements.<br /><br />Known issues<br />============<br /><br />Due to engine problems it is currently not possible to access<br />a subelement by index 0: $object-&gt;property[0].</span></code></div>
  </div>
 </div>
  <div class="note" id="95282">  <div class="votes">
    <div id="Vu95282">
    <a href="/manual/vote-note.php?id=95282&amp;page=simplexml.examples-basic&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95282">
    <a href="/manual/vote-note.php?id=95282&amp;page=simplexml.examples-basic&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95282" title="51% like this...">
    1
    </div>
  </div>
  <a href="#95282" class="name">
  <strong class="user"><em>php at keith tyler dot com</em></strong></a><a class="genanchor" href="#95282"> &para;</a><div class="date" title="2009-12-23 12:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95282">
<div class="phpcode"><code><span class="html">[Editor's Note: The SimpleXMLIterator class, however, does implement these methods.]
<br />
<br />While SimpleXMLElement claims to be iterable, it does not seem to implement the standard Iterator interface functions like ::next and ::reset properly. Therefore while foreach() works, functions like next(), current(), or each() don't seem to work as you would expect -- the pointer never seems to move or keeps getting reset.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=simplexml.examples-basic&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexml.examples-basic.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="simplexml.examples.php">Examples</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="simplexml.examples-basic.php" title="Basic SimpleXML usage">Basic SimpleXML usage</a>
                        </li>
                                                <li class="">
                            <a href="simplexml.examples-errors.php" title="Dealing with XML errors">Dealing with XML errors</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
