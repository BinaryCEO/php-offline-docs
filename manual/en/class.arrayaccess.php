<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ArrayAccess - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.arrayaccess.php">
 <link rel="shorturl" href="https://www.php.net/arrayaccess">
 <link rel="alternate" href="https://www.php.net/arrayaccess" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.interfaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/countable.count.php">
 <link rel="next" href="https://www.php.net/manual/en/arrayaccess.offsetexists.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.arrayaccess.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.arrayaccess.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.arrayaccess.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.arrayaccess.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.arrayaccess.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.arrayaccess.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.arrayaccess.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.arrayaccess.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.arrayaccess.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.arrayaccess.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.arrayaccess.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The ArrayAccess interface" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ArrayAccess - Manual" />
<meta name="twitter:description" content="The ArrayAccess interface" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ArrayAccess - Manual" />
<meta itemprop="description" content="The ArrayAccess interface" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The ArrayAccess interface" />

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
        <a href="arrayaccess.offsetexists.php">
          ArrayAccess::offsetExists &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="countable.count.php">
          &laquo; Countable::count        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='reserved.interfaces.php'>Predefined Interfaces and Classes</a></li>      </ul>
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
            <option value='en/class.arrayaccess.php' selected="selected">English</option>
            <option value='de/class.arrayaccess.php'>German</option>
            <option value='es/class.arrayaccess.php'>Spanish</option>
            <option value='fr/class.arrayaccess.php'>French</option>
            <option value='it/class.arrayaccess.php'>Italian</option>
            <option value='ja/class.arrayaccess.php'>Japanese</option>
            <option value='pt_BR/class.arrayaccess.php'>Brazilian Portuguese</option>
            <option value='ru/class.arrayaccess.php'>Russian</option>
            <option value='tr/class.arrayaccess.php'>Turkish</option>
            <option value='uk/class.arrayaccess.php'>Ukrainian</option>
            <option value='zh/class.arrayaccess.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.arrayaccess" class="reference">

 <h1 class="title">The ArrayAccess interface</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="arrayaccess.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Interface to provide accessing objects as arrays.
   </p>
  </div>


  <div class="section" id="arrayaccess.synopsis">
   <h2 class="title">Interface synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">interface</span> <strong class="interfacename"><strong class="interfacename">ArrayAccess</strong></strong> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="arrayaccess.offsetexists.php" class="methodname">offsetExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayaccess.offsetget.php" class="methodname">offsetGet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayaccess.offsetset.php" class="methodname">offsetSet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$offset</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="arrayaccess.offsetunset.php" class="methodname">offsetUnset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>


  </div>

  <div class="section" id="arrayaccess.examples">
   <h2 class="title">Examples</h2>
   <div class="example" id="arrayaccess.example.basic">
    <p><strong>Example #1 Basic usage</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Obj </span><span style="color: #007700">implements </span><span style="color: #0000BB">ArrayAccess </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$container </span><span style="color: #007700">= [<br />        </span><span style="color: #DD0000">"one"   </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">"two"   </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">"three" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">,<br />    ];<br /><br />    public function </span><span style="color: #0000BB">offsetSet</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">): </span><span style="color: #0000BB">void </span><span style="color: #007700">{<br />        if (</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)) {<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">container</span><span style="color: #007700">[] = </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />        } else {<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">container</span><span style="color: #007700">[</span><span style="color: #0000BB">$offset</span><span style="color: #007700">] = </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />        }<br />    }<br /><br />    public function </span><span style="color: #0000BB">offsetExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">): </span><span style="color: #0000BB">bool </span><span style="color: #007700">{<br />        return isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">container</span><span style="color: #007700">[</span><span style="color: #0000BB">$offset</span><span style="color: #007700">]);<br />    }<br /><br />    public function </span><span style="color: #0000BB">offsetUnset</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">): </span><span style="color: #0000BB">void </span><span style="color: #007700">{<br />        unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">container</span><span style="color: #007700">[</span><span style="color: #0000BB">$offset</span><span style="color: #007700">]);<br />    }<br /><br />    public function </span><span style="color: #0000BB">offsetGet</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">): </span><span style="color: #0000BB">mixed </span><span style="color: #007700">{<br />        return isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">container</span><span style="color: #007700">[</span><span style="color: #0000BB">$offset</span><span style="color: #007700">]) ? </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">container</span><span style="color: #007700">[</span><span style="color: #0000BB">$offset</span><span style="color: #007700">] : </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Obj</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">[</span><span style="color: #DD0000">"two"</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">[</span><span style="color: #DD0000">"two"</span><span style="color: #007700">]);<br />unset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">[</span><span style="color: #DD0000">"two"</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">[</span><span style="color: #DD0000">"two"</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">[</span><span style="color: #DD0000">"two"</span><span style="color: #007700">] = </span><span style="color: #DD0000">"A value"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">[</span><span style="color: #DD0000">"two"</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'Append 1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'Append 2'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$obj</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'Append 3'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
bool(true)
int(2)
bool(false)
string(7) &quot;A value&quot;
obj Object
(
    [container:obj:private] =&gt; Array
        (
            [one] =&gt; 1
            [three] =&gt; 3
            [two] =&gt; A value
            [0] =&gt; Append 1
            [1] =&gt; Append 2
            [2] =&gt; Append 3
        )

)
</pre></div>
    </div>
   </div>
  </div>

 </div>

 




 




 




 





<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="arrayaccess.offsetexists.php">ArrayAccess::offsetExists</a> — Whether an offset exists</li><li><a href="arrayaccess.offsetget.php">ArrayAccess::offsetGet</a> — Offset to retrieve</li><li><a href="arrayaccess.offsetset.php">ArrayAccess::offsetSet</a> — Assign a value to the specified offset</li><li><a href="arrayaccess.offsetunset.php">ArrayAccess::offsetUnset</a> — Unset an offset</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/arrayaccess.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.arrayaccess%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.arrayaccess&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.arrayaccess.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104061">  <div class="votes">
    <div id="Vu104061">
    <a href="/manual/vote-note.php?id=104061&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104061">
    <a href="/manual/vote-note.php?id=104061&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104061" title="85% like this...">
    158
    </div>
  </div>
  <a href="#104061" class="name">
  <strong class="user"><em>Per</em></strong></a><a class="genanchor" href="#104061"> &para;</a><div class="date" title="2011-05-20 02:16"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104061">
<div class="phpcode"><code><span class="html">It bit me today, so putting it here in the hope it will help others:<br />If you call array_key_exists() on an object of a class that implements ArrayAccess, ArrayAccess::offsetExists() wil NOT be called.</span></code></div>
  </div>
 </div>
  <div class="note" id="113865">  <div class="votes">
    <div id="Vu113865">
    <a href="/manual/vote-note.php?id=113865&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113865">
    <a href="/manual/vote-note.php?id=113865&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113865" title="78% like this...">
    69
    </div>
  </div>
  <a href="#113865" class="name">
  <strong class="user"><em>Yousef Ismaeil Cliprz</em></strong></a><a class="genanchor" href="#113865"> &para;</a><div class="date" title="2013-12-11 07:38"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113865">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * ArrayAndObjectAccess<br /> * Yes you can access class as array and the same time as object<br /> *<br /> * @author Yousef Ismaeil &lt;cliprz@gmail.com&gt;<br /> */<br /><br /></span><span class="keyword">class </span><span class="default">ArrayAndObjectAccess </span><span class="keyword">implements </span><span class="default">ArrayAccess </span><span class="keyword">{<br /><br />    </span><span class="comment">/**<br />     * Data<br />     *<br />     * @var array<br />     * @access private<br />     */<br />    </span><span class="keyword">private </span><span class="default">$data </span><span class="keyword">= [];<br /><br />    </span><span class="comment">/**<br />     * Get a data by key<br />     *<br />     * @param string The key data to retrieve<br />     * @access public<br />     */<br />    </span><span class="keyword">public function &amp;</span><span class="default">__get </span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />    }<br /><br />    </span><span class="comment">/**<br />     * Assigns a value to the specified data<br />     * <br />     * @param string The data key to assign the value to<br />     * @param mixed  The value to set<br />     * @access public <br />     */<br />    </span><span class="keyword">public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * Whether or not an data exists by key<br />     *<br />     * @param string An data key to check for<br />     * @access public<br />     * @return boolean<br />     * @abstracting ArrayAccess<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__isset </span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) {<br />        return isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Unsets an data by key<br />     *<br />     * @param string The key to unset<br />     * @access public<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__unset</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) {<br />        unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Assigns a value to the specified offset<br />     *<br />     * @param string The offset to assign the value to<br />     * @param mixed  The value to set<br />     * @access public<br />     * @abstracting ArrayAccess<br />     */<br />    </span><span class="keyword">public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">) {<br />        if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br />    }<br /><br />    </span><span class="comment">/**<br />     * Whether or not an offset exists<br />     *<br />     * @param string An offset to check for<br />     * @access public<br />     * @return boolean<br />     * @abstracting ArrayAccess<br />     */<br />    </span><span class="keyword">public function </span><span class="default">offsetExists</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">) {<br />        return isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Unsets an offset<br />     *<br />     * @param string The offset to unset<br />     * @access public<br />     * @abstracting ArrayAccess<br />     */<br />    </span><span class="keyword">public function </span><span class="default">offsetUnset</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">) {<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">offsetExists</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)) {<br />            unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]);<br />        }<br />    }<br /><br />    </span><span class="comment">/**<br />     * Returns the value at specified offset<br />     *<br />     * @param string The offset to retrieve<br />     * @access public<br />     * @return mixed<br />     * @abstracting ArrayAccess<br />     */<br />    </span><span class="keyword">public function </span><span class="default">offsetGet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">) {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">offsetExists</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">) ? </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">;<br />    }<br /><br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Usage<br /><br /><span class="default">&lt;?php<br />$foo </span><span class="keyword">= new </span><span class="default">ArrayAndObjectAccess</span><span class="keyword">();<br /></span><span class="comment">// Set data as array and object<br /></span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">fname </span><span class="keyword">= </span><span class="string">'Yousef'</span><span class="keyword">;<br /></span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">lname </span><span class="keyword">= </span><span class="string">'Ismaeil'</span><span class="keyword">;<br /></span><span class="comment">// Call as object<br /></span><span class="keyword">echo </span><span class="string">'fname as object '</span><span class="keyword">.</span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">fname</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// Call as array<br /></span><span class="keyword">echo </span><span class="string">'lname as array '</span><span class="keyword">.</span><span class="default">$foo</span><span class="keyword">[</span><span class="string">'lname'</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// Reset as array<br /></span><span class="default">$foo</span><span class="keyword">[</span><span class="string">'fname'</span><span class="keyword">] = </span><span class="string">'Cliprz'</span><span class="keyword">;<br />echo </span><span class="default">$foo</span><span class="keyword">[</span><span class="string">'fname'</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment">/** Outputs<br />fname as object Yousef<br />lname as array Ismaeil<br />Cliprz<br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123653">  <div class="votes">
    <div id="Vu123653">
    <a href="/manual/vote-note.php?id=123653&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123653">
    <a href="/manual/vote-note.php?id=123653&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123653" title="91% like this...">
    19
    </div>
  </div>
  <a href="#123653" class="name">
  <strong class="user"><em>Taliesin Nuin public at taliesinnuin dot net</em></strong></a><a class="genanchor" href="#123653"> &para;</a><div class="date" title="2019-03-04 09:41"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123653">
<div class="phpcode"><code><span class="html">You might be wondering whether implementing an ArrayAccess interface makes the class iterable. It is, after all, an "array". The answer is no, it doesn't. Additionally there are a couple of subtle gotchas if you add both and want it to be an associate array. The below is a class that has both ArrayAccess AND Iterator interfaces. And Countable as well just to be complete.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//This uses return types which are only valid in PHP 7. They can be removed if you are forced to use an older version of PHP.<br />//N.b. The offsetSet method contains a function that is only valid from PHP 7.3 onwards.<br /><br /></span><span class="keyword">class </span><span class="default">HandyClass </span><span class="keyword">implements </span><span class="default">ArrayAccess</span><span class="keyword">, </span><span class="default">Iterator</span><span class="keyword">, </span><span class="default">Countable </span><span class="keyword">{<br /><br />  private </span><span class="default">$container </span><span class="keyword">= array(); </span><span class="comment">//An Array of your actual values.<br />  </span><span class="keyword">private </span><span class="default">$keys </span><span class="keyword">= array();      </span><span class="comment">//We use a separate array of keys rather than $this-&gt;position directly so that we can<br />  </span><span class="keyword">private </span><span class="default">$position</span><span class="keyword">;            </span><span class="comment">//have an associative array.<br /><br />  </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">() {<br />    </span><span class="default">$position </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container </span><span class="keyword">= array(   </span><span class="comment">//Arbitrary array for demo. You probably want to set this to empty in practice or<br />      </span><span class="string">"a"   </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,               </span><span class="comment">//get it from somewhere else, e.g. passing it into the constructor.<br />      </span><span class="string">"b"   </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">,<br />      </span><span class="string">"c"   </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">,<br />    );<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">);<br />  }<br /><br />  public function </span><span class="default">count</span><span class="keyword">() : </span><span class="default">int </span><span class="keyword">{ </span><span class="comment">//This is necessary for the Countable interface. It could as easily return<br />    </span><span class="keyword">return </span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">);    </span><span class="comment">//count($this-&gt;container). The number of elements will be the same.<br />  </span><span class="keyword">}<br /><br />  public function </span><span class="default">rewind</span><span class="keyword">() {  </span><span class="comment">//Necessary for the Iterator interface. $this-&gt;position shows where we are in our list of<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;      </span><span class="comment">//keys. Remember we want everything done via $this-&gt;keys to handle associative arrays.<br />  </span><span class="keyword">}<br /><br />  public function </span><span class="default">current</span><span class="keyword">() { </span><span class="comment">//Necessary for the Iterator interface.<br />    </span><span class="keyword">return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">]];<br />  }<br /><br />  public function </span><span class="default">key</span><span class="keyword">() { </span><span class="comment">//Necessary for the Iterator interface.<br />    </span><span class="keyword">return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">];<br />  }<br /><br />  public function </span><span class="default">next</span><span class="keyword">() { </span><span class="comment">//Necessary for the Iterator interface.<br />    </span><span class="keyword">++</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">;<br />  }<br /><br />  public function </span><span class="default">valid</span><span class="keyword">() { </span><span class="comment">//Necessary for the Iterator interface.<br />    </span><span class="keyword">return isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">]);<br />  }<br /><br />  public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) { </span><span class="comment">//Necessary for the ArrayAccess interface.<br />    </span><span class="keyword">if(</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)) {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">[] = </span><span class="default">array_key_last</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">); </span><span class="comment">//THIS IS ONLY VALID FROM php 7.3 ONWARDS. See note below for alternative.<br />    </span><span class="keyword">} else {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />      if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">)) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">[] = </span><span class="default">$offset</span><span class="keyword">;<br />    }<br />  }<br /><br />  public function </span><span class="default">offsetExists</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">) {<br />    return isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]);<br />  }<br /><br />  public function </span><span class="default">offsetUnset</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">) {<br />    unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]);<br />    unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">[</span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">)]);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">);  </span><span class="comment">//This line re-indexes the array of container keys because if someone<br />  </span><span class="keyword">}                                           </span><span class="comment">//deletes the first element, the rewind to position 0 when iterating would<br />                                              //cause no element to be found.<br />  </span><span class="keyword">public function </span><span class="default">offsetGet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">) {<br />    return isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]) ? </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">;<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example usages:<br /><br /><span class="default">&lt;?php<br />$myClass </span><span class="keyword">= new </span><span class="default">HandyClass</span><span class="keyword">();<br />echo(</span><span class="string">'Number of elements: ' </span><span class="keyword">. </span><span class="default">count</span><span class="keyword">(</span><span class="default">$myClass</span><span class="keyword">) . </span><span class="string">"\n\n"</span><span class="keyword">);<br /><br />echo(</span><span class="string">"Foreach through the built in test elements:\n"</span><span class="keyword">);<br />foreach(</span><span class="default">$myClass </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />  echo(</span><span class="string">"</span><span class="default">$value</span><span class="string">\n"</span><span class="keyword">);<br />}<br />echo(</span><span class="string">"\n"</span><span class="keyword">);<br /><br /></span><span class="default">$myClass</span><span class="keyword">[</span><span class="string">'d'</span><span class="keyword">] = </span><span class="default">4</span><span class="keyword">;<br /></span><span class="default">$myClass</span><span class="keyword">[</span><span class="string">'e'</span><span class="keyword">] = </span><span class="default">5</span><span class="keyword">;<br />echo(</span><span class="string">'Number of elements after adding two: ' </span><span class="keyword">. </span><span class="default">count</span><span class="keyword">(</span><span class="default">$myClass</span><span class="keyword">) . </span><span class="string">"\n\n"</span><span class="keyword">);<br /><br />unset(</span><span class="default">$myClass</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">]);<br />echo(</span><span class="string">'Number of elements after removing one: ' </span><span class="keyword">. </span><span class="default">count</span><span class="keyword">(</span><span class="default">$myClass</span><span class="keyword">) . </span><span class="string">"\n\n"</span><span class="keyword">);<br /><br />echo(</span><span class="string">"Accessing an element directly:\n"</span><span class="keyword">);<br />echo(</span><span class="default">$myClass</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">] . </span><span class="string">"\n\n"</span><span class="keyword">);<br /><br /></span><span class="default">$myClass</span><span class="keyword">[</span><span class="string">'b'</span><span class="keyword">] = </span><span class="default">5</span><span class="keyword">;<br />echo(</span><span class="string">"Foreach after changing an element:\n"</span><span class="keyword">);<br />foreach(</span><span class="default">$myClass </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />  echo(</span><span class="string">"</span><span class="default">$value</span><span class="string">\n"</span><span class="keyword">);<br />}<br />echo(</span><span class="string">"\n"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111810">  <div class="votes">
    <div id="Vu111810">
    <a href="/manual/vote-note.php?id=111810&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111810">
    <a href="/manual/vote-note.php?id=111810&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111810" title="85% like this...">
    40
    </div>
  </div>
  <a href="#111810" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#111810"> &para;</a><div class="date" title="2013-03-31 12:25"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111810">
<div class="phpcode"><code><span class="html">The indexes used in an ArrayAccess object are not limited to strings and integers as they are for arrays: you can use any type for the index as long as you write your implementation to handle them. This fact is exploited by the SplObjectStorage class.</span></code></div>
  </div>
 </div>
  <div class="note" id="121077">  <div class="votes">
    <div id="Vu121077">
    <a href="/manual/vote-note.php?id=121077&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121077">
    <a href="/manual/vote-note.php?id=121077&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121077" title="85% like this...">
    14
    </div>
  </div>
  <a href="#121077" class="name">
  <strong class="user"><em>Aussie Bags</em></strong></a><a class="genanchor" href="#121077"> &para;</a><div class="date" title="2017-05-12 10:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121077">
<div class="phpcode"><code><span class="html">Although $offset can be anything, a string that looks like an integer is cast to integer before the call to any of the methods.<br /><br />$x[1]  offset is integer 1<br />$x['1'] offset is integer 1<br />$x['1.'] offset is string '1.'</span></code></div>
  </div>
 </div>
  <div class="note" id="123998">  <div class="votes">
    <div id="Vu123998">
    <a href="/manual/vote-note.php?id=123998&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123998">
    <a href="/manual/vote-note.php?id=123998&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123998" title="83% like this...">
    8
    </div>
  </div>
  <a href="#123998" class="name">
  <strong class="user"><em>msherazjaved at gmail dot com</em></strong></a><a class="genanchor" href="#123998"> &para;</a><div class="date" title="2019-07-01 04:53"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123998">
<div class="phpcode"><code><span class="html">An experimental check addition to the findings of Per (on offsetExists method) added here (8 years ago). <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">class </span><span class="default">obj </span><span class="keyword">implements </span><span class="default">ArrayAccess </span><span class="keyword">{<br />    private </span><span class="default">$container </span><span class="keyword">= array();<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container </span><span class="keyword">= array(<br />            </span><span class="string">"one"   </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />            </span><span class="string">"two"   </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">,<br />            </span><span class="string">"three" </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">,<br />        );<br />    }<br /><br />    public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br />        print </span><span class="string">"offsetSet method Triggered"</span><span class="keyword">;<br />        <br />        if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br />    }<br /><br />    public function </span><span class="default">offsetExists</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">) {<br />        print </span><span class="string">"offsetExists method Triggered"</span><span class="keyword">;<br /><br />        return isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]);<br />    }<br /><br />    public function </span><span class="default">offsetUnset</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">) {<br />        print </span><span class="string">"offsetUnset method Triggered"</span><span class="keyword">;<br /><br />        unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]);<br />    }<br /><br />    public function </span><span class="default">offsetGet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">) {<br />        print </span><span class="string">"offsetGet method Triggered"</span><span class="keyword">;<br /><br />        return isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">]) ? </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">obj</span><span class="keyword">;<br /><br /></span><span class="comment">## Assigning a Value<br /></span><span class="default">$obj</span><span class="keyword">[</span><span class="string">'two'</span><span class="keyword">] = </span><span class="string">'2'</span><span class="keyword">;    </span><span class="comment">// Output: offsetSet method Triggered<br /><br />## Checking if array offset already set<br /></span><span class="keyword">isset(</span><span class="default">$obj</span><span class="keyword">[</span><span class="string">'two'</span><span class="keyword">]);   </span><span class="comment">// Output : offsetExists method Triggered<br /><br />## Unsetting array value on the offset 'two'<br /></span><span class="keyword">unset(</span><span class="default">$obj</span><span class="keyword">[</span><span class="string">'two'</span><span class="keyword">]);   </span><span class="comment">// Output : offsetUnset method Triggered<br /><br />## Accessing array value at offset 'two'<br /></span><span class="keyword">return </span><span class="default">$obj</span><span class="keyword">[</span><span class="string">'two'</span><span class="keyword">];   </span><span class="comment">// Output : offsetGet method Triggered<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117567">  <div class="votes">
    <div id="Vu117567">
    <a href="/manual/vote-note.php?id=117567&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117567">
    <a href="/manual/vote-note.php?id=117567&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117567" title="81% like this...">
    14
    </div>
  </div>
  <a href="#117567" class="name">
  <strong class="user"><em>kaRemovTihsjouni at gmAndTihsaildot com</em></strong></a><a class="genanchor" href="#117567"> &para;</a><div class="date" title="2015-06-30 03:03"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117567">
<div class="phpcode"><code><span class="html">reset() method may not work as you expect with ArrayAccess objects.<br /><br />Using reset($myArrayAccessObject) returns the first property from $myArrayAccessObject, not the first item in the items array.<br /><br />If you want to use the reset() method to return the first array item, then you can use the following simple workaround:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyArrayAccessObject </span><span class="keyword">implements </span><span class="default">Iterator</span><span class="keyword">, </span><span class="default">ArrayAccess</span><span class="keyword">, </span><span class="default">Countable </span><span class="keyword">{<br />    protected </span><span class="default">$first </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">; </span><span class="comment">//WARNING! Keep this always first.<br />    </span><span class="keyword">protected </span><span class="default">$items </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    private function </span><span class="default">supportReset</span><span class="keyword">() {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">first </span><span class="keyword">= </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">items</span><span class="keyword">); </span><span class="comment">//Support reset().<br />    </span><span class="keyword">}<br />    </span><span class="comment">// ...<br />    </span><span class="keyword">public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br />        if (</span><span class="default">$offset </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">items</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br />        else {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">items</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">supportReset</span><span class="keyword">();<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Finally, call $this-&gt;supportReset() in the end of all methods that change the internal $items array, such as in offsetSet(), offsetUnset() etc.<br /><br />This way, you can use the reset() method as normally:<br /><br /><span class="default">&lt;?php<br />$firstArrayItem </span><span class="keyword">= </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$myArrayAccessObject</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111999">  <div class="votes">
    <div id="Vu111999">
    <a href="/manual/vote-note.php?id=111999&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111999">
    <a href="/manual/vote-note.php?id=111999&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111999" title="81% like this...">
    14
    </div>
  </div>
  <a href="#111999" class="name">
  <strong class="user"><em>ivan dot dossev at gmail dot com</em></strong></a><a class="genanchor" href="#111999"> &para;</a><div class="date" title="2013-04-20 07:09"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111999">
<div class="phpcode"><code><span class="html">Sadly you cannot assign by reference with the ArrayAccess (at least in PHP 5.3.23)<br />It's too bad there is no syntax for optionally passing variables by reference to functions (a feature in retro PHP).<br />That option would have let ArrayAccess fully mimic the functionality of normal array assignments:<br /><br /><span class="default">&lt;?php<br />$var </span><span class="keyword">= </span><span class="string">'hello'</span><span class="keyword">;<br /></span><span class="default">$arr </span><span class="keyword">= array();<br /></span><span class="default">$arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">$var</span><span class="keyword">;<br /></span><span class="default">$arr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = &amp;</span><span class="default">$var</span><span class="keyword">;<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="string">'world'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br /></span><span class="comment">// string(5) "hello"<br />// string(5) "world"<br /></span><span class="default">?&gt;<br /></span><br />Declaring "function offsetSet($offset, &amp;$value)" will cause a fatal error.<br />So to assign by ref you can use an ugly function call, for example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">obj </span><span class="keyword">implements </span><span class="default">ArrayAccess </span><span class="keyword">{<br /><br />    </span><span class="comment">// ... ArrayAccess example code ...<br />    <br />    </span><span class="keyword">public function &amp;</span><span class="default">offsetSetRef</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, &amp;</span><span class="default">$value</span><span class="keyword">) {<br />        if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[] = &amp;</span><span class="default">$value</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">container</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">] = &amp;</span><span class="default">$value</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$value</span><span class="keyword">; </span><span class="comment">// should return in case called within an assignment chain<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">$var </span><span class="keyword">= </span><span class="string">'hello'</span><span class="keyword">;<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">obj</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">$var</span><span class="keyword">;<br /></span><span class="comment">//$obj[1] = &amp;$var; // Fatal error: Cannot assign by reference to overloaded object<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">offsetSetRef</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">); </span><span class="comment">// the work around<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="string">'world'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$obj</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br /></span><span class="comment">// string(5) "hello"<br />// string(5) "world"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97163">  <div class="votes">
    <div id="Vu97163">
    <a href="/manual/vote-note.php?id=97163&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97163">
    <a href="/manual/vote-note.php?id=97163&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97163" title="79% like this...">
    17
    </div>
  </div>
  <a href="#97163" class="name">
  <strong class="user"><em>max at flashdroid dot com</em></strong></a><a class="genanchor" href="#97163"> &para;</a><div class="date" title="2010-04-05 06:49"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97163">
<div class="phpcode"><code><span class="html">Objects implementing ArrayAccess may return objects by references in PHP 5.3.0.<br /><br />You can implement your ArrayAccess object like this:<br /><br />    class Reflectable implements ArrayAccess {<br /><br />        public function set($name, $value) {<br />            $this-&gt;{$name} = $value;<br />        }<br /><br />        public function &amp;get($name) {<br />            return $this-&gt;{$name};<br />        }<br /><br />        public function offsetGet($offset) {<br />            return $this-&gt;get($offset);<br />        }<br /><br />        public function offsetSet($offset, $value) {<br />            $this-&gt;set($offset, $value);<br />        }<br /><br />        ...<br /><br />    }<br /><br />This base class allows you to get / set your object properties using the [] operator just like in Javascript:<br /><br />    class Boo extends Reflectable {<br />        public $name;<br />    }<br /><br />    $obj = new Boo();<br />    $obj['name'] = "boo";<br />    echo $obj['name']; // prints boo</span></code></div>
  </div>
 </div>
  <div class="note" id="122251">  <div class="votes">
    <div id="Vu122251">
    <a href="/manual/vote-note.php?id=122251&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122251">
    <a href="/manual/vote-note.php?id=122251&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122251" title="73% like this...">
    7
    </div>
  </div>
  <a href="#122251" class="name">
  <strong class="user"><em>ProgMiner</em></strong></a><a class="genanchor" href="#122251"> &para;</a><div class="date" title="2018-01-10 08:07"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122251">
<div class="phpcode"><code><span class="html">Maybe it help anyone, if you do<br /><span class="default">&lt;?php<br />$arrayAccessObject</span><span class="keyword">[] = </span><span class="string">'foo'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>PHP give you an empty string as $offset to offsetSet($offset, $value) method.</span></code></div>
  </div>
 </div>
  <div class="note" id="114225">  <div class="votes">
    <div id="Vu114225">
    <a href="/manual/vote-note.php?id=114225&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114225">
    <a href="/manual/vote-note.php?id=114225&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114225" title="66% like this...">
    11
    </div>
  </div>
  <a href="#114225" class="name">
  <strong class="user"><em>php at lanar dot com dot au</em></strong></a><a class="genanchor" href="#114225"> &para;</a><div class="date" title="2014-01-27 01:35"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114225">
<div class="phpcode"><code><span class="html">Objects implementing ArrayAccess do not support the increment/decrement operators ++ and --, unlike array() and ArrayObject()<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">MyArray </span><span class="keyword">implements </span><span class="default">ArrayAccess<br /></span><span class="keyword">{<br />    </span><span class="comment">// offsetSet, offsetGet etc implemented<br /></span><span class="keyword">}<br /><br /></span><span class="default">$x </span><span class="keyword">= new </span><span class="default">MyArray</span><span class="keyword">() ;<br /></span><span class="default">$x</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">0 </span><span class="keyword">;<br /></span><span class="default">$x</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]++ ; </span><span class="comment">//error 'Indirect modification of overloaded element has no effect'<br /></span><span class="default">$x</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] += </span><span class="default">1 </span><span class="keyword">; </span><span class="comment">// this works OK.<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119674">  <div class="votes">
    <div id="Vu119674">
    <a href="/manual/vote-note.php?id=119674&amp;page=class.arrayaccess&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119674">
    <a href="/manual/vote-note.php?id=119674&amp;page=class.arrayaccess&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119674" title="65% like this...">
    6
    </div>
  </div>
  <a href="#119674" class="name">
  <strong class="user"><em>jordistc at gmail dot com</em></strong></a><a class="genanchor" href="#119674"> &para;</a><div class="date" title="2016-07-31 11:07"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119674">
<div class="phpcode"><code><span class="html">You can use the array functions on a object of a class that implements ArrayAccess using the __invoke magic method in this way:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">ArrayVar </span><span class="keyword">implements </span><span class="default">ArrayAccess<br /></span><span class="keyword">{<br />    private </span><span class="default">$data </span><span class="keyword">= [];<br /><br />    public function </span><span class="default">__invoke</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Now you can use it in this way:<br /><span class="default">&lt;?php<br />    $arrayar </span><span class="keyword">= new </span><span class="default">ArrayVar</span><span class="keyword">();<br />    </span><span class="default">$arrayar</span><span class="keyword">[</span><span class="string">'one'</span><span class="keyword">] = </span><span class="string">'primer'</span><span class="keyword">;<br />    </span><span class="default">$arrayar</span><span class="keyword">[</span><span class="string">'two'</span><span class="keyword">] = </span><span class="string">'segon'</span><span class="keyword">;<br />    </span><span class="default">$arrayar</span><span class="keyword">[</span><span class="string">'three'</span><span class="keyword">] = </span><span class="string">'tercer'</span><span class="keyword">;<br /><br />    </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arrayar</span><span class="keyword">());<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">);<br />    </span><span class="comment">// array (size=3)<br />    //    0 =&gt; string 'one'<br />    //    1 =&gt; string 'two' <br />    //    2 =&gt; string 'three'<br /><br />    </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$arrayar</span><span class="keyword">(), [ </span><span class="string">'two' </span><span class="keyword">=&gt; </span><span class="string">'segon'</span><span class="keyword">]);<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$diff</span><span class="keyword">);<br />    </span><span class="comment">// array (size=2)<br />    //    'one' =&gt; string 'primer'<br />    //    'three' =&gt; string 'tercer'<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.arrayaccess&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.arrayaccess.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.interfaces.php">Predefined Interfaces and Classes</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.traversable.php" title="Traversable">Traversable</a>
                        </li>
                                                <li class="">
                            <a href="class.iterator.php" title="Iterator">Iterator</a>
                        </li>
                                                <li class="">
                            <a href="class.iteratoraggregate.php" title="IteratorAggregate">IteratorAggregate</a>
                        </li>
                                                <li class="">
                            <a href="class.internaliterator.php" title="InternalIterator">InternalIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.throwable.php" title="Throwable">Throwable</a>
                        </li>
                                                <li class="">
                            <a href="class.countable.php" title="Countable">Countable</a>
                        </li>
                                                <li class="current">
                            <a href="class.arrayaccess.php" title="ArrayAccess">ArrayAccess</a>
                        </li>
                                                <li class="">
                            <a href="class.serializable.php" title="Serializable">Serializable</a>
                        </li>
                                                <li class="">
                            <a href="class.closure.php" title="Closure">Closure</a>
                        </li>
                                                <li class="">
                            <a href="class.stdclass.php" title="stdClass">stdClass</a>
                        </li>
                                                <li class="">
                            <a href="class.generator.php" title="Generator">Generator</a>
                        </li>
                                                <li class="">
                            <a href="class.fiber.php" title="Fiber">Fiber</a>
                        </li>
                                                <li class="">
                            <a href="class.weakreference.php" title="WeakReference">WeakReference</a>
                        </li>
                                                <li class="">
                            <a href="class.weakmap.php" title="WeakMap">WeakMap</a>
                        </li>
                                                <li class="">
                            <a href="class.stringable.php" title="Stringable">Stringable</a>
                        </li>
                                                <li class="">
                            <a href="class.unitenum.php" title="UnitEnum">UnitEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.backedenum.php" title="BackedEnum">BackedEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.sensitiveparametervalue.php" title="SensitiveParameterValue">SensitiveParameterValue</a>
                        </li>
                                                <li class="">
                            <a href="class.php-incomplete-class.php" title="_&#8203;_&#8203;PHP_&#8203;Incomplete_&#8203;Class">_&#8203;_&#8203;PHP_&#8203;Incomplete_&#8203;Class</a>
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
