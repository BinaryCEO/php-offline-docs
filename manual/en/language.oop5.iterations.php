<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Object Iteration - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.iterations.php">
 <link rel="shorturl" href="https://www.php.net/oop5.iterations">
 <link rel="alternate" href="https://www.php.net/oop5.iterations" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.overloading.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.magic.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.iterations.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.iterations.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.iterations.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.iterations.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.iterations.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.iterations.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.iterations.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.iterations.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.iterations.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.iterations.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.iterations.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Object Iteration" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Object Iteration - Manual" />
<meta name="twitter:description" content="Object Iteration" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Object Iteration - Manual" />
<meta itemprop="description" content="Object Iteration" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Object Iteration" />

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
        <a href="language.oop5.magic.php">
          Magic Methods &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.overloading.php">
          &laquo; Overloading        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.oop5.php'>Classes and Objects</a></li>      </ul>
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
            <option value='en/language.oop5.iterations.php' selected="selected">English</option>
            <option value='de/language.oop5.iterations.php'>German</option>
            <option value='es/language.oop5.iterations.php'>Spanish</option>
            <option value='fr/language.oop5.iterations.php'>French</option>
            <option value='it/language.oop5.iterations.php'>Italian</option>
            <option value='ja/language.oop5.iterations.php'>Japanese</option>
            <option value='pt_BR/language.oop5.iterations.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.iterations.php'>Russian</option>
            <option value='tr/language.oop5.iterations.php'>Turkish</option>
            <option value='uk/language.oop5.iterations.php'>Ukrainian</option>
            <option value='zh/language.oop5.iterations.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.iterations" class="sect1">
  <h2 class="title">Object Iteration</h2>
  <p class="para">

   PHP provides a way for objects to be defined so it is possible to iterate
   through a list of items, with, for example a <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> statement. By default,
   all <a href="language.oop5.visibility.php" class="link">visible</a> properties will be used
   for the iteration.

  </p>

  <div class="example" id="example-348">
   <p><strong>Example #1 Simple Object Iteration</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$var1 </span><span style="color: #007700">= </span><span style="color: #DD0000">'value 1'</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$var2 </span><span style="color: #007700">= </span><span style="color: #DD0000">'value 2'</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$var3 </span><span style="color: #007700">= </span><span style="color: #DD0000">'value 3'</span><span style="color: #007700">;<br /><br />    protected </span><span style="color: #0000BB">$protected </span><span style="color: #007700">= </span><span style="color: #DD0000">'protected var'</span><span style="color: #007700">;<br />    private   </span><span style="color: #0000BB">$private   </span><span style="color: #007700">= </span><span style="color: #DD0000">'private var'</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">iterateVisible</span><span style="color: #007700">() {<br />       echo </span><span style="color: #DD0000">"MyClass::iterateVisible:\n"</span><span style="color: #007700">;<br />       foreach (</span><span style="color: #0000BB">$this </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />           print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000"> =&gt; </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />       }<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$class </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br /><br />foreach(</span><span style="color: #0000BB">$class </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000"> =&gt; </span><span style="color: #0000BB">$value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /><br /></span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">iterateVisible</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div> 
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
var1 =&gt; value 1
var2 =&gt; value 2
var3 =&gt; value 3

MyClass::iterateVisible:
var1 =&gt; value 1
var2 =&gt; value 2
var3 =&gt; value 3
protected =&gt; protected var
private =&gt; private var
</pre></div>
   </div>

  </div>

 <p class="para">
  As the output shows, the <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> iterated through all of the
  <a href="language.oop5.visibility.php" class="link">visible</a> properties that could be
  accessed.
 </p>

 <div class="simplesect">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="language.generators.php" class="link">Generators</a></li>
    <li><span class="interfacename"><a href="class.iterator.php" class="interfacename">Iterator</a></span></li>
    <li><span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> </li>
    <li><a href="spl.iterators.php" class="link">SPL Iterators</a></li>
   </ul>
  </p>
 </div>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/iterations.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.iterations%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.iterations&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.iterations.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109267">  <div class="votes">
    <div id="Vu109267">
    <a href="/manual/vote-note.php?id=109267&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109267">
    <a href="/manual/vote-note.php?id=109267&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109267" title="72% like this...">
    22
    </div>
  </div>
  <a href="#109267" class="name">
  <strong class="user"><em>php dot net dot nsp at cvogt dot org</em></strong></a><a class="genanchor" href="#109267"> &para;</a><div class="date" title="2012-07-01 10:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109267">
<div class="phpcode"><code><span class="html">there is still an open bug about using current() etc. with iterators<br /><a href="https://bugs.php.net/bug.php?id=49369" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=49369</a></span></code></div>
  </div>
 </div>
  <div class="note" id="81508">  <div class="votes">
    <div id="Vu81508">
    <a href="/manual/vote-note.php?id=81508&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81508">
    <a href="/manual/vote-note.php?id=81508&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81508" title="71% like this...">
    21
    </div>
  </div>
  <a href="#81508" class="name">
  <strong class="user"><em>wavetrex A(nospam)T gmail DOT com</em></strong></a><a class="genanchor" href="#81508"> &para;</a><div class="date" title="2008-03-01 02:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81508">
<div class="phpcode"><code><span class="html">By reading the posts below I wondered if it really is impossible to make an ArrayAccess implementation really behave like a true array ( by being multi level )<br /><br />Seems like it's not impossible. Not very preety but usable<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">ArrayAccessImpl </span><span class="keyword">implements </span><span class="default">ArrayAccess </span><span class="keyword">{<br /><br />  private </span><span class="default">$data </span><span class="keyword">= array();<br /><br />  public function </span><span class="default">offsetUnset</span><span class="keyword">(</span><span class="default">$index</span><span class="keyword">) {}<br /><br />  public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$index</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br /></span><span class="comment">//    echo ("SET: ".$index."&lt;br&gt;");<br />    <br />    </span><span class="keyword">if(isset(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">])) {<br />        unset(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />    }<br />    <br />    </span><span class="default">$u </span><span class="keyword">= &amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">];<br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />        </span><span class="default">$u </span><span class="keyword">= new </span><span class="default">ArrayAccessImpl</span><span class="keyword">();<br />        foreach(</span><span class="default">$value </span><span class="keyword">as </span><span class="default">$idx</span><span class="keyword">=&gt;</span><span class="default">$e</span><span class="keyword">)<br />            </span><span class="default">$u</span><span class="keyword">[</span><span class="default">$idx</span><span class="keyword">]=</span><span class="default">$e</span><span class="keyword">;<br />    } else<br />        </span><span class="default">$u</span><span class="keyword">=</span><span class="default">$value</span><span class="keyword">;<br />  }<br /><br />  public function </span><span class="default">offsetGet</span><span class="keyword">(</span><span class="default">$index</span><span class="keyword">) {<br /></span><span class="comment">//    echo ("GET: ".$index."&lt;br&gt;");<br /><br />    </span><span class="keyword">if(!isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]))<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]=new </span><span class="default">ArrayAccessImpl</span><span class="keyword">();<br />    <br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">];<br />  }<br /><br />  public function </span><span class="default">offsetExists</span><span class="keyword">(</span><span class="default">$index</span><span class="keyword">) {<br /></span><span class="comment">//    echo ("EXISTS: ".$index."&lt;br&gt;");<br />    <br />    </span><span class="keyword">if(isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">])) {<br />        if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">] instanceof </span><span class="default">ArrayAccessImpl</span><span class="keyword">) {<br />            if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]-&gt;</span><span class="default">data</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">)<br />                return </span><span class="default">true</span><span class="keyword">;<br />            else<br />                return </span><span class="default">false</span><span class="keyword">;<br />        } else<br />            return </span><span class="default">true</span><span class="keyword">;<br />    } else<br />        return </span><span class="default">false</span><span class="keyword">;<br />  }<br /><br />}<br /><br />echo </span><span class="string">"ArrayAccess implementation that behaves like a multi-level array&lt;hr /&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$data </span><span class="keyword">= new </span><span class="default">ArrayAccessImpl</span><span class="keyword">();<br /><br /></span><span class="default">$data</span><span class="keyword">[</span><span class="string">'string'</span><span class="keyword">]=</span><span class="string">"Just a simple string"</span><span class="keyword">;<br /></span><span class="default">$data</span><span class="keyword">[</span><span class="string">'number'</span><span class="keyword">]=</span><span class="default">33</span><span class="keyword">;<br /></span><span class="default">$data</span><span class="keyword">[</span><span class="string">'array'</span><span class="keyword">][</span><span class="string">'another_string'</span><span class="keyword">]=</span><span class="string">"Alpha"</span><span class="keyword">;<br /></span><span class="default">$data</span><span class="keyword">[</span><span class="string">'array'</span><span class="keyword">][</span><span class="string">'some_object'</span><span class="keyword">]=new </span><span class="default">stdClass</span><span class="keyword">();<br /></span><span class="default">$data</span><span class="keyword">[</span><span class="string">'array'</span><span class="keyword">][</span><span class="string">'another_array'</span><span class="keyword">][</span><span class="string">'x'</span><span class="keyword">][</span><span class="string">'y'</span><span class="keyword">]=</span><span class="string">"LOL @ Whoever said it can't be done !"</span><span class="keyword">;<br /></span><span class="default">$data</span><span class="keyword">[</span><span class="string">'blank_array'</span><span class="keyword">]=array();<br /><br />echo </span><span class="string">"'array' Isset? "</span><span class="keyword">; </span><span class="default">print_r</span><span class="keyword">(isset(</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'array'</span><span class="keyword">])); echo </span><span class="string">"&lt;hr /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">; </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'array'</span><span class="keyword">][</span><span class="string">'non_existent'</span><span class="keyword">]); echo </span><span class="string">"&lt;/pre&gt;If attempting to read an offset that doesn't exist it returns a blank object! Use isset() to check if it exists!&lt;br&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"'non_existent' Isset? "</span><span class="keyword">; </span><span class="default">print_r</span><span class="keyword">(isset(</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'array'</span><span class="keyword">][</span><span class="string">'non_existent'</span><span class="keyword">])); echo </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">; </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'blank_array'</span><span class="keyword">]); echo </span><span class="string">"&lt;/pre&gt;A blank array unfortunately returns similar results :(&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"'blank_array' Isset? "</span><span class="keyword">; </span><span class="default">print_r</span><span class="keyword">(isset(</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'blank_array'</span><span class="keyword">])); echo </span><span class="string">"&lt;hr /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">; </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">); echo </span><span class="string">"&lt;/pre&gt; (non_existent remains in the structure. If someone can help to solve this I'll appreciate it)&lt;hr /&gt;"</span><span class="keyword">;<br /><br />echo </span><span class="string">"Display some value that exists: "</span><span class="keyword">.</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'array'</span><span class="keyword">][</span><span class="string">'another_string'</span><span class="keyword">];<br /><br /></span><span class="default">?&gt;<br /></span><br />(in the two links mentioned below by artur at jedlinski... they say you can't use references, so I didn't used them.<br />My implementation uses recursive objects)<br /><br />If anyone finds a better (cleaner) sollution, please e-mail me.<br />Thanks,<br />Wave.</span></code></div>
  </div>
 </div>
  <div class="note" id="86371">  <div class="votes">
    <div id="Vu86371">
    <a href="/manual/vote-note.php?id=86371&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86371">
    <a href="/manual/vote-note.php?id=86371&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86371" title="78% like this...">
    8
    </div>
  </div>
  <a href="#86371" class="name">
  <strong class="user"><em>hlegius at gmail dot com</em></strong></a><a class="genanchor" href="#86371"> &para;</a><div class="date" title="2008-10-15 05:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86371">
<div class="phpcode"><code><span class="html">Iterator interface usign key() next() rewind() is MORE slow than extends ArrayIterator with ArrayIterator::next(), ArrayIterator::rewind(), etc.,</span></code></div>
  </div>
 </div>
  <div class="note" id="50490">  <div class="votes">
    <div id="Vu50490">
    <a href="/manual/vote-note.php?id=50490&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50490">
    <a href="/manual/vote-note.php?id=50490&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50490" title="68% like this...">
    6
    </div>
  </div>
  <a href="#50490" class="name">
  <strong class="user"><em>strrev(&#039;ed.relpmeur@ekneos&#039;);</em></strong></a><a class="genanchor" href="#50490"> &para;</a><div class="date" title="2005-03-01 02:25"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50490">
<div class="phpcode"><code><span class="html">Use the SPL ArrayAccess interface to call an object as array:<br /><br /><a href="http://www.php.net/~helly/php/ext/spl/interfaceArrayAccess.html" rel="nofollow" target="_blank">http://www.php.net/~helly/php/ext/spl/interfaceArrayAccess.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="65668">  <div class="votes">
    <div id="Vu65668">
    <a href="/manual/vote-note.php?id=65668&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65668">
    <a href="/manual/vote-note.php?id=65668&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65668" title="66% like this...">
    6
    </div>
  </div>
  <a href="#65668" class="name">
  <strong class="user"><em>chad 0x40 herballure 0x2e com</em></strong></a><a class="genanchor" href="#65668"> &para;</a><div class="date" title="2006-05-05 06:46"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65668">
<div class="phpcode"><code><span class="html">The example code given for valid() will break if the array contains a FALSE value. This code prints out a single "bool(true)" and exits the loop when it gets to the FALSE:<br /><br /><span class="default">&lt;?php<br />$A </span><span class="keyword">= array(</span><span class="default">TRUE</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />while(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">) {<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">));<br />  </span><span class="default">next</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Instead, the key() function should be used, since it returns NULL only at the end of the array. This code displays all four elements and then exits:<br /><br /><span class="default">&lt;?php<br />$A </span><span class="keyword">= array(</span><span class="default">TRUE</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />while(!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">key</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">))) {<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">));<br />  </span><span class="default">next</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55545">  <div class="votes">
    <div id="Vu55545">
    <a href="/manual/vote-note.php?id=55545&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55545">
    <a href="/manual/vote-note.php?id=55545&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55545" title="70% like this...">
    4
    </div>
  </div>
  <a href="#55545" class="name">
  <strong class="user"><em>markushe at web dot de</em></strong></a><a class="genanchor" href="#55545"> &para;</a><div class="date" title="2005-08-06 11:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55545">
<div class="phpcode"><code><span class="html">Just something i noticed:<br />It seems, that when you are implementing the interface Iterator, yout method key() has to return a string or integer.<br /><br />I was trying to return a object an got this error:<br />Illegal type returned from MyClass::key()</span></code></div>
  </div>
 </div>
  <div class="note" id="51771">  <div class="votes">
    <div id="Vu51771">
    <a href="/manual/vote-note.php?id=51771&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51771">
    <a href="/manual/vote-note.php?id=51771&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51771" title="66% like this...">
    5
    </div>
  </div>
  <a href="#51771" class="name">
  <strong class="user"><em>elias at need dot spam</em></strong></a><a class="genanchor" href="#51771"> &para;</a><div class="date" title="2005-04-10 03:15"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51771">
<div class="phpcode"><code><span class="html">The MyIterator::valid() method above ist bad, because it<br />breaks on entries with 0 or empty strings, use key() instead:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">public function </span><span class="default">valid</span><span class="keyword">()<br />{<br />    return ! </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">key</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">var</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />read about current() drawbacks:<br /><a href="http://php.net/current" rel="nofollow" target="_blank">http://php.net/current</a></span></code></div>
  </div>
 </div>
  <div class="note" id="54223">  <div class="votes">
    <div id="Vu54223">
    <a href="/manual/vote-note.php?id=54223&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54223">
    <a href="/manual/vote-note.php?id=54223&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54223" title="63% like this...">
    3
    </div>
  </div>
  <a href="#54223" class="name">
  <strong class="user"><em>just_somedood at yahoo dot com</em></strong></a><a class="genanchor" href="#54223"> &para;</a><div class="date" title="2005-06-27 12:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54223">
<div class="phpcode"><code><span class="html">To clarify on php at moechofe's post, you CAN use the SPL to overide the array operator for a class.  This, with the new features of object, and autoloading (among a buch of other things) has me completely sold on PHP5.  You can also find this information on the SPL portion of the manual, but I'll post it here as well so it isn't passed up.  The below Collection class will let you use the class as an array, while also using the foreach iterator:<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="keyword">class </span><span class="default">Collection </span><span class="keyword">implements </span><span class="default">ArrayAccess</span><span class="keyword">,</span><span class="default">IteratorAggregate<br /></span><span class="keyword">{<br />    public </span><span class="default">$objectArray </span><span class="keyword">= Array();<br />    </span><span class="comment">//**these are the required iterator functions    <br />    </span><span class="keyword">function </span><span class="default">offsetExists</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)<br />    {          <br />        if(isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">objectArray</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]))  return </span><span class="default">TRUE</span><span class="keyword">;<br />        else return </span><span class="default">FALSE</span><span class="keyword">;          <br />    }    <br />    <br />    function &amp; </span><span class="default">offsetGet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)<br />    {   <br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">offsetExists</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">))  return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">objectArray</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">];<br />        else return (</span><span class="default">false</span><span class="keyword">);<br />    }<br />    <br />    function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)<br />    {          <br />        if (</span><span class="default">$offset</span><span class="keyword">)  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">objectArray</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        else  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">objectArray</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">offsetUnset</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)<br />    {<br />        unset (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">objectArray</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]);<br />    }<br />    <br />    function &amp; </span><span class="default">getIterator</span><span class="keyword">()<br />    {<br />        return new </span><span class="default">ArrayIterator</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">objectArray</span><span class="keyword">);<br />    }<br />    </span><span class="comment">//**end required iterator functions<br /><br />    </span><span class="keyword">public function </span><span class="default">doSomething</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"I'm doing something"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />I LOVE the new SPL stuff in PHP!  An example of usage is below:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Contact<br /></span><span class="keyword">{<br />    protected </span><span class="default">$name </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br /><br />    public function </span><span class="default">set_name</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">get_name</span><span class="keyword">()<br />    {<br />        return (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$bob </span><span class="keyword">= new </span><span class="default">Collection</span><span class="keyword">();<br /></span><span class="default">$bob</span><span class="keyword">-&gt;</span><span class="default">doSomething</span><span class="keyword">();<br /></span><span class="default">$bob</span><span class="keyword">[] = new </span><span class="default">Contact</span><span class="keyword">();<br /></span><span class="default">$bob</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] = new </span><span class="default">Contact</span><span class="keyword">();<br /></span><span class="default">$bob</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">set_name</span><span class="keyword">(</span><span class="string">"Superman"</span><span class="keyword">);<br /></span><span class="default">$bob</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]-&gt;</span><span class="default">set_name</span><span class="keyword">(</span><span class="string">"a name of a guy"</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$bob </span><span class="keyword">as </span><span class="default">$aContact</span><span class="keyword">)<br />{<br />     echo </span><span class="default">$aContact</span><span class="keyword">-&gt;</span><span class="default">get_name</span><span class="keyword">() . </span><span class="string">"\r\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Would work just fine.  This makes code so much simpler and easy to follow, it's great.  This is exactly the direction I had hoped PHP5 was going!</span></code></div>
  </div>
 </div>
  <div class="note" id="48317">  <div class="votes">
    <div id="Vu48317">
    <a href="/manual/vote-note.php?id=48317&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48317">
    <a href="/manual/vote-note.php?id=48317&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48317" title="61% like this...">
    3
    </div>
  </div>
  <a href="#48317" class="name">
  <strong class="user"><em>knj at aider dot dk</em></strong></a><a class="genanchor" href="#48317"> &para;</a><div class="date" title="2004-12-18 07:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48317">
<div class="phpcode"><code><span class="html">if you in a string define classes that implements IteratorAggregate.<br />you cant use the default;<br />&lt;?<br />...<br />public function getIterator() {<br />       return new MyIterator(\\$this-&gt;&lt;What ever&gt;);<br />}<br />..<br />?&gt;<br />at least not if you want to use eval(&lt;The string&gt;).<br />You have to use:<br />&lt;?<br />...<br />public function getIterator() {<br />      \\$arrayObj=new ArrayObject(\\$this-&gt;&lt;What ever&gt;);<br />      return \\$arrayObj-&gt;getIterator();<br />}<br />...<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="73527">  <div class="votes">
    <div id="Vu73527">
    <a href="/manual/vote-note.php?id=73527&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73527">
    <a href="/manual/vote-note.php?id=73527&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73527" title="59% like this...">
    4
    </div>
  </div>
  <a href="#73527" class="name">
  <strong class="user"><em>rune at zedeler dot dk</em></strong></a><a class="genanchor" href="#73527"> &para;</a><div class="date" title="2007-02-27 08:00"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73527">
<div class="phpcode"><code><span class="html">The iterator template from knj at aider dot dk does not yield correct results.<br />If you do<br />&lt;?<br />reset($a);<br />next($a);<br />echo current($a);<br />?&gt;<br />where $a is defined over the suggested template, then the first element will be output, not the second, as expected.</span></code></div>
  </div>
 </div>
  <div class="note" id="128190">  <div class="votes">
    <div id="Vu128190">
    <a href="/manual/vote-note.php?id=128190&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128190">
    <a href="/manual/vote-note.php?id=128190&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128190" title="60% like this...">
    1
    </div>
  </div>
  <a href="#128190" class="name">
  <strong class="user"><em>mike at eastghost dot com</em></strong></a><a class="genanchor" href="#128190"> &para;</a><div class="date" title="2023-02-05 08:32"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128190">
<div class="phpcode"><code><span class="html">The days of lovely care-to-the-wind typecasting are coming to close.  Finding this devilish bug took us entirely too long.<br /><br />PHP-8.2.1 was throwing errors seemingly uncaught (they were eventually seen amassing in  / var / log / apache / DOMAIN-ssl-err.log  ) due to mismatch between return types of the necessary interface methods in our 'implements \Iterator' class (which had worked fine for many years, until our leap up to 8.2.1) versus the interface methods required by PHP.<br /><br />Particularly:<br /><br />next()<br />=====<br />ours:<br />public function next() {...}<br /><br />PHP-8.2.1's<br />public function next() : void {...}<br /><br />valid()<br />======<br />ours:<br />public function valid() {...}<br /><br />PHP-8.2.1's:<br />public function valid() : bool {...}<br /><br />key()<br />====<br />ours:<br />public function key() {...}<br /><br />PHP-8.2.1's:<br />public function key() : mixed {...}<br /><br />rewind()<br />========<br />ours:<br />public function rewind() {...}<br /><br />PHP-8.2.1's:<br />public function rewind() : void {...}<br /><br />current()<br />=======<br />ours:<br />public function current() {...}<br /><br />PHP-8.2.1's:<br />public function current() : mixed {...}<br /><br />We added the missing / now all-important return types to our function/method declarations and everything instantly worked again.<br /><br />This extreme stringency is not made clear enough, IMHO, in the Iterator manual page.</span></code></div>
  </div>
 </div>
  <div class="note" id="68764">  <div class="votes">
    <div id="Vu68764">
    <a href="/manual/vote-note.php?id=68764&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68764">
    <a href="/manual/vote-note.php?id=68764&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68764" title="55% like this...">
    4
    </div>
  </div>
  <a href="#68764" class="name">
  <strong class="user"><em>baldurien at bbnwn dot eu</em></strong></a><a class="genanchor" href="#68764"> &para;</a><div class="date" title="2006-08-09 06:01"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68764">
<div class="phpcode"><code><span class="html">Beware of how works iterator in PHP if you come from Java!<br /><br />In Java, iterator works like this :<br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">Iterator</span><span class="keyword">&lt;</span><span class="default">O</span><span class="keyword">&gt; {<br />  </span><span class="default">boolean hasNext</span><span class="keyword">();<br />  </span><span class="default">O next</span><span class="keyword">();<br />  </span><span class="default">void remove</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;<br /></span>But in php, the interface is this (I kept the generics and type because it's easier to understand)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">Iterator</span><span class="keyword">&lt;</span><span class="default">O</span><span class="keyword">&gt; {<br />  </span><span class="default">boolean valid</span><span class="keyword">();<br />  </span><span class="default">mixed key</span><span class="keyword">();<br />  </span><span class="default">O current</span><span class="keyword">();<br />  </span><span class="default">void next</span><span class="keyword">();<br />  </span><span class="default">void previous</span><span class="keyword">();<br />  </span><span class="default">void rewind</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;<br /></span><br />1. valid() is more or less the equivalent of hasNext()<br />2. next() is not the equivalent of java next(). It returns nothing, while Java next() method return the next object, and move to next object in Collections. PHP's next() method will simply move forward.<br /><br />Here is a sample with an array, first in java, then in php :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">ArrayIterator</span><span class="keyword">&lt;</span><span class="default">O</span><span class="keyword">&gt; implements </span><span class="default">Iterator</span><span class="keyword">&lt;</span><span class="default">O</span><span class="keyword">&gt; {<br />  private final </span><span class="default">O</span><span class="keyword">[] array;<br />  private </span><span class="default">int index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />  public </span><span class="default">ArrayIterator</span><span class="keyword">(</span><span class="default">O</span><span class="keyword">[] array) {<br />     </span><span class="default">this</span><span class="keyword">.array = array;<br />  }<br />  <br />  public </span><span class="default">boolean hasNext</span><span class="keyword">() {<br />    return </span><span class="default">index </span><span class="keyword">&lt; array.</span><span class="default">length</span><span class="keyword">;<br />  }  <br /><br />  public </span><span class="default">O next</span><span class="keyword">() {<br />     if ( !</span><span class="default">hasNext</span><span class="keyword">()) <br />       throw new </span><span class="default">NoSuchElementException</span><span class="keyword">(</span><span class="string">'at end of array'</span><span class="keyword">);<br />     return array[</span><span class="default">index</span><span class="keyword">++];<br />  }<br /><br />  public </span><span class="default">void remove</span><span class="keyword">() {<br />    throw new </span><span class="default">UnsupportedOperationException</span><span class="keyword">(</span><span class="string">'remove() not supported in array'</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">?&gt;</span> <br /><br />And here is the same in php (using the appropriate function) :<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Since the array is not mutable, it should use an internal <br /> * index over the number of elements for the previous/next <br /> * validation.<br /> */<br /></span><span class="keyword">class </span><span class="default">ArrayIterator </span><span class="keyword">implements </span><span class="default">Iterator </span><span class="keyword">{<br />  private </span><span class="default">$array</span><span class="keyword">;<br />  public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) {<br />    if ( !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) <br />      throw new </span><span class="default">IllegalArgumentException</span><span class="keyword">(</span><span class="string">'argument 0 is not an array'</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array </span><span class="keyword">= array;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">();<br />  }<br />  public function </span><span class="default">valid</span><span class="keyword">() {<br />    return </span><span class="default">current</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="comment">// that's the bad method (should use arrays_keys, + index)<br />  </span><span class="keyword">}<br />  public function </span><span class="default">key</span><span class="keyword">() {<br />     return </span><span class="default">key</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">);<br />  }<br />  public function </span><span class="default">current</span><span class="keyword">() {<br />    return </span><span class="default">current</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">);<br />  }<br />  public function </span><span class="default">next</span><span class="keyword">() {<br />    if ( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()) <br />      throw new </span><span class="default">NoSuchElementException</span><span class="keyword">(</span><span class="string">'at end of array'</span><span class="keyword">);<br />    </span><span class="default">next</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">);<br />  }<br />  public function </span><span class="default">previous</span><span class="keyword">()  {<br />    </span><span class="comment">// fails if current() = first item of array<br />    </span><span class="default">previous</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">);<br />  }<br />  public function </span><span class="default">rewind</span><span class="keyword">() {<br />     </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />The difference is notable : don't expect next() to return something like in Java, instead use current(). This also means that you have to prefetch your collection to set the current() object. For instance, if you try to make a Directory iterator (like the one provided by PECL), rewind should invoke next() to set the first element and so on. (and the constructor should call rewind())<br /><br />Also, another difference :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">ArrayIterable</span><span class="keyword">&lt;</span><span class="default">O</span><span class="keyword">&gt; implements </span><span class="default">Iterable</span><span class="keyword">&lt;</span><span class="default">O</span><span class="keyword">&gt; {<br />  private final </span><span class="default">O</span><span class="keyword">[] array;<br /><br />  public </span><span class="default">ArrayIterable</span><span class="keyword">(</span><span class="default">O</span><span class="keyword">[] array) {<br />     </span><span class="default">this</span><span class="keyword">.array = array;<br />  }  <br /><br />  public </span><span class="default">Iterator</span><span class="keyword">&lt;</span><span class="default">O</span><span class="keyword">&gt; </span><span class="default">iterator</span><span class="keyword">() {<br />     return new </span><span class="default">ArrayIterator</span><span class="keyword">(array);<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />When using an Iterable, in Java 1.5, you may do such loops :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">for ( </span><span class="default">String s </span><span class="keyword">: new </span><span class="default">ArrayIterable</span><span class="keyword">&lt;</span><span class="default">String</span><span class="keyword">&gt;(new </span><span class="default">String</span><span class="keyword">[] {</span><span class="string">"a"</span><span class="keyword">, </span><span class="string">"b"</span><span class="keyword">})) {<br />  ...<br />}<br /></span><span class="default">?&gt;<br /></span>Which is the same as :<br /><br /><span class="default">&lt;?php<br />Iterator</span><span class="keyword">&lt;</span><span class="default">String</span><span class="keyword">&gt; </span><span class="default">it </span><span class="keyword">= new </span><span class="default">ArrayIterable</span><span class="keyword">&lt;</span><span class="default">String</span><span class="keyword">&gt;(new </span><span class="default">String</span><span class="keyword">[] {</span><span class="string">"a"</span><span class="keyword">, </span><span class="string">"b"</span><span class="keyword">});<br />while (</span><span class="default">it</span><span class="keyword">.</span><span class="default">hasNext</span><span class="keyword">()) {<br />  </span><span class="default">String s </span><span class="keyword">= </span><span class="default">it</span><span class="keyword">.</span><span class="default">next</span><span class="keyword">();<br />  ...<br />}<br /></span><span class="default">?&gt;<br /></span>While in PHP it's not the case :<br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach ( </span><span class="default">$iterator </span><span class="keyword">as </span><span class="default">$current </span><span class="keyword">) {<br />  ...<br />}<br /></span><span class="default">?&gt;<br /></span>Is the same as :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">for ( </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">(); </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()) {<br />  </span><span class="default">$current </span><span class="keyword">= </span><span class="default">$iterator</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">();<br />  ...<br />}<br /></span><span class="default">?&gt;<br /></span><br />(I think we may also use IteratorAggregate to do it like with Iterable).<br /><br />Take that in mind if you come from Java.<br /><br />I hope this explanation is not too long...</span></code></div>
  </div>
 </div>
  <div class="note" id="74662">  <div class="votes">
    <div id="Vu74662">
    <a href="/manual/vote-note.php?id=74662&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74662">
    <a href="/manual/vote-note.php?id=74662&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74662" title="58% like this...">
    2
    </div>
  </div>
  <a href="#74662" class="name">
  <strong class="user"><em>artur at jedlinski dot pl</em></strong></a><a class="genanchor" href="#74662"> &para;</a><div class="date" title="2007-04-22 12:38"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74662">
<div class="phpcode"><code><span class="html">One should be aware that ArrayAccess functionality described by "just_somedood at yahoo dot com" below is currently broken and thus it's pretty unusable.<br /><br />Read following links to find more:<br /><a href="http://bugs.php.net/bug.php?id=34783" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=34783</a><br /><a href="http://bugs.php.net/bug.php?id=32983" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=32983</a></span></code></div>
  </div>
 </div>
  <div class="note" id="123953">  <div class="votes">
    <div id="Vu123953">
    <a href="/manual/vote-note.php?id=123953&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123953">
    <a href="/manual/vote-note.php?id=123953&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123953" title="55% like this...">
    1
    </div>
  </div>
  <a href="#123953" class="name">
  <strong class="user"><em>celsowm</em></strong></a><a class="genanchor" href="#123953"> &para;</a><div class="date" title="2019-06-19 12:51"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123953">
<div class="phpcode"><code><span class="html">I've created a dinamic version of grzeniufication code to allow un-, serialize more than one property:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Person </span><span class="keyword">implements </span><span class="default">\Serializable </span><span class="keyword">{<br /><br />    public </span><span class="default">$id</span><span class="keyword">;<br />    public </span><span class="default">$name</span><span class="keyword">;<br />    public </span><span class="default">$birthDate</span><span class="keyword">;<br />    public </span><span class="default">$surname</span><span class="keyword">;<br /><br />    public function </span><span class="default">serialize</span><span class="keyword">() {<br />        return </span><span class="default">serialize</span><span class="keyword">((array) </span><span class="default">$this</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$serialized</span><span class="keyword">): </span><span class="default">void </span><span class="keyword">{<br /><br />        foreach (</span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$serialized</span><span class="keyword">) as </span><span class="default">$p </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$p</span><span class="keyword">} = </span><span class="default">$v</span><span class="keyword">;<br />        }<br />    }<br /><br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50235">  <div class="votes">
    <div id="Vu50235">
    <a href="/manual/vote-note.php?id=50235&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50235">
    <a href="/manual/vote-note.php?id=50235&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50235" title="57% like this...">
    1
    </div>
  </div>
  <a href="#50235" class="name">
  <strong class="user"><em>phpnet at nicecupofteaandasitdown dot com</em></strong></a><a class="genanchor" href="#50235"> &para;</a><div class="date" title="2005-02-22 08:09"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50235">
<div class="phpcode"><code><span class="html">You should be prepared for your iterator's current method to be called before its next method is ever called. This certainly happens in a foreach loop. If your means of finding the next item is expensive you might want to use something like this<br /><br />private $item;<br />        <br />function next() {<br />    $this-&gt;item = &amp;$this-&gt;getNextItem();<br />    return $this-&gt;item;<br />}<br />    <br />public function current() {<br />     if(!isset($this-&gt;item)) $this-&gt;next();<br />    return $this-&gt;item;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="75215">  <div class="votes">
    <div id="Vu75215">
    <a href="/manual/vote-note.php?id=75215&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75215">
    <a href="/manual/vote-note.php?id=75215&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75215" title="54% like this...">
    1
    </div>
  </div>
  <a href="#75215" class="name">
  <strong class="user"><em>doctorrock83_at_gmail.com</em></strong></a><a class="genanchor" href="#75215"> &para;</a><div class="date" title="2007-05-18 03:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75215">
<div class="phpcode"><code><span class="html">Please remember that actually the only PHP iterating structure that uses Iterator is foreach().<br /><br />Any each() or list() applied to an Object implementing iterator will not provide the expected result</span></code></div>
  </div>
 </div>
  <div class="note" id="53273">  <div class="votes">
    <div id="Vu53273">
    <a href="/manual/vote-note.php?id=53273&amp;page=language.oop5.iterations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53273">
    <a href="/manual/vote-note.php?id=53273&amp;page=language.oop5.iterations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53273" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#53273" class="name">
  <strong class="user"><em>PrzemekG_ at poczta dot onet dot pl</em></strong></a><a class="genanchor" href="#53273"> &para;</a><div class="date" title="2005-05-27 04:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53273">
<div class="phpcode"><code><span class="html">If you want to do someting like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach(</span><span class="default">$MyObject </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$value</span><span class="keyword">)<br />   </span><span class="default">$value </span><span class="keyword">= </span><span class="string">'new '</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>you must return values by reference in your iterator object:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyObject </span><span class="keyword">implements </span><span class="default">Iterator<br /></span><span class="keyword">{<br /></span><span class="comment">/* ...... other iterator functions ...... */<br />/* return by reference */<br /></span><span class="keyword">public function &amp;</span><span class="default">current</span><span class="keyword">()<br />{<br />   return </span><span class="default">$something</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />This won't change values:<br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach(</span><span class="default">$MyObject </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />   </span><span class="default">$value </span><span class="keyword">= </span><span class="string">'new '</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />This will change values:<br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach(</span><span class="default">$MyObject </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$value</span><span class="keyword">)<br />   </span><span class="default">$value </span><span class="keyword">= </span><span class="string">'new '</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />I think this should be written somewhere in the documentations, but I couldn't find it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.iterations&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.iterations.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.basic.php" title="The Basics">The Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.properties.php" title="Properties">Properties</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.property-hooks.php" title="Property Hooks">Property Hooks</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.constants.php" title="Class Constants">Class Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.autoload.php" title="Autoloading Classes">Autoloading Classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.decon.php" title="Constructors and Destructors">Constructors and Destructors</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.visibility.php" title="Visibility">Visibility</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.inheritance.php" title="Object Inheritance">Object Inheritance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.static.php" title="Static Keyword">Static Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.anonymous.php" title="Anonymous classes">Anonymous classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="current">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.magic.php" title="Magic Methods">Magic Methods</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.final.php" title="Final Keyword">Final Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.cloning.php" title="Object Cloning">Object Cloning</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.object-comparison.php" title="Comparing Objects">Comparing Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.late-static-bindings.php" title="Late Static Bindings">Late Static Bindings</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.references.php" title="Objects and references">Objects and references</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.serialization.php" title="Object Serialization">Object Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.variance.php" title="Covariance and Contravariance">Covariance and Contravariance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.lazy-objects.php" title="Lazy Objects">Lazy Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.changelog.php" title="OOP Changelog">OOP Changelog</a>
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
