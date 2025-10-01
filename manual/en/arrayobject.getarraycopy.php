<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ArrayObject::getArrayCopy - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/arrayobject.getarraycopy.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/arrayobject.getarraycopy.php">
 <link rel="alternate" href="https://www.php.net/manual/en/arrayobject.getarraycopy.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.arrayobject.php">
 <link rel="prev" href="https://www.php.net/manual/en/arrayobject.exchangearray.php">
 <link rel="next" href="https://www.php.net/manual/en/arrayobject.getflags.php">

 <link rel="alternate" href="https://www.php.net/manual/en/arrayobject.getarraycopy.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/arrayobject.getarraycopy.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/arrayobject.getarraycopy.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/arrayobject.getarraycopy.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/arrayobject.getarraycopy.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/arrayobject.getarraycopy.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/arrayobject.getarraycopy.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/arrayobject.getarraycopy.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/arrayobject.getarraycopy.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/arrayobject.getarraycopy.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/arrayobject.getarraycopy.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a copy of the ArrayObject" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ArrayObject::getArrayCopy - Manual" />
<meta name="twitter:description" content="Creates a copy of the ArrayObject" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ArrayObject::getArrayCopy - Manual" />
<meta itemprop="description" content="Creates a copy of the ArrayObject" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a copy of the ArrayObject" />

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
        <a href="arrayobject.getflags.php">
          ArrayObject::getFlags &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="arrayobject.exchangearray.php">
          &laquo; ArrayObject::exchangeArray        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='spl.datastructures.php'>Datastructures</a></li>      <li><a href='class.arrayobject.php'>ArrayObject</a></li>      </ul>
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
            <option value='en/arrayobject.getarraycopy.php' selected="selected">English</option>
            <option value='de/arrayobject.getarraycopy.php'>German</option>
            <option value='es/arrayobject.getarraycopy.php'>Spanish</option>
            <option value='fr/arrayobject.getarraycopy.php'>French</option>
            <option value='it/arrayobject.getarraycopy.php'>Italian</option>
            <option value='ja/arrayobject.getarraycopy.php'>Japanese</option>
            <option value='pt_BR/arrayobject.getarraycopy.php'>Brazilian Portuguese</option>
            <option value='ru/arrayobject.getarraycopy.php'>Russian</option>
            <option value='tr/arrayobject.getarraycopy.php'>Turkish</option>
            <option value='uk/arrayobject.getarraycopy.php'>Ukrainian</option>
            <option value='zh/arrayobject.getarraycopy.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="arrayobject.getarraycopy" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ArrayObject::getArrayCopy</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ArrayObject::getArrayCopy</span> &mdash; <span class="dc-title">Creates a copy of the ArrayObject</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-arrayobject.getarraycopy-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ArrayObject::getArrayCopy</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Exports the <span class="classname"><a href="class.arrayobject.php" class="classname">ArrayObject</a></span> to an array.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-arrayobject.getarraycopy-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-arrayobject.getarraycopy-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a copy of the array. When the <span class="classname"><a href="class.arrayobject.php" class="classname">ArrayObject</a></span> refers to an object,
   an array of the properties of that object will be returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-arrayobject.getarraycopy-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3861">
    <p><strong>Example #1 <span class="function"><strong>ArrayObject::getArrayCopy()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Array of available fruits<br /></span><span style="color: #0000BB">$fruits </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"lemons" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"oranges" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #DD0000">"bananas" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #DD0000">"apples" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">10</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$fruitsArrayObject </span><span style="color: #007700">= new </span><span style="color: #0000BB">ArrayObject</span><span style="color: #007700">(</span><span style="color: #0000BB">$fruits</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$fruitsArrayObject</span><span style="color: #007700">[</span><span style="color: #DD0000">'pears'</span><span style="color: #007700">] = </span><span style="color: #0000BB">4</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// create a copy of the array<br /></span><span style="color: #0000BB">$copy </span><span style="color: #007700">= </span><span style="color: #0000BB">$fruitsArrayObject</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getArrayCopy</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$copy</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(5) {
  [&quot;lemons&quot;]=&gt;
  int(1)
  [&quot;oranges&quot;]=&gt;
  int(4)
  [&quot;bananas&quot;]=&gt;
  int(5)
  [&quot;apples&quot;]=&gt;
  int(10)
  [&quot;pears&quot;]=&gt;
  int(4)
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/arrayobject/getarraycopy.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Farrayobject.getarraycopy%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=arrayobject.getarraycopy&amp;repo=en&amp;redirect=https://www.php.net/manual/en/arrayobject.getarraycopy.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120333">  <div class="votes">
    <div id="Vu120333">
    <a href="/manual/vote-note.php?id=120333&amp;page=arrayobject.getarraycopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120333">
    <a href="/manual/vote-note.php?id=120333&amp;page=arrayobject.getarraycopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120333" title="100% like this...">
    4
    </div>
  </div>
  <a href="#120333" class="name">
  <strong class="user"><em>spidgorny at gmail dot com</em></strong></a><a class="genanchor" href="#120333"> &para;</a><div class="date" title="2016-12-14 03:37"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120333">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$data </span><span class="keyword">= </span><span class="default">$likeArray</span><span class="keyword">-&gt;</span><span class="default">getArrayCopy</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>will NOT be magically called if you cast to array. Although I've expected it.<br /><span class="default">&lt;?php<br />$nothing </span><span class="keyword">= (array)</span><span class="default">$likeArray</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Here, $data != $nothing.</span></code></div>
  </div>
 </div>
  <div class="note" id="106764">  <div class="votes">
    <div id="Vu106764">
    <a href="/manual/vote-note.php?id=106764&amp;page=arrayobject.getarraycopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106764">
    <a href="/manual/vote-note.php?id=106764&amp;page=arrayobject.getarraycopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106764" title="72% like this...">
    5
    </div>
  </div>
  <a href="#106764" class="name">
  <strong class="user"><em>Ivo von Putzer</em></strong></a><a class="genanchor" href="#106764"> &para;</a><div class="date" title="2011-12-05 05:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106764">
<div class="phpcode"><code><span class="html">If you did something like this to make your constructor multidimensional capable you will have some trouble using getArrayCopy to get a plain array straight out of the method:<br /><span class="default">&lt;?php<br /></span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">= array(), </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">2 </span><span class="keyword">)<br />{<br />    </span><span class="comment">// let’s give the objects the right and not the inherited name<br />    </span><span class="default">$class </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br /><br />    foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$offset </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ? new </span><span class="default">$class</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) : </span><span class="default">$value</span><span class="keyword">);<br /><br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setFlags</span><span class="keyword">(</span><span class="default">$flags</span><span class="keyword">); <br />}<br /></span><span class="default">?&gt;<br /></span><br />That’s the way I solved it:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">public function </span><span class="default">getArray</span><span class="keyword">(</span><span class="default">$recursion </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) <br />{<br />    </span><span class="comment">// just in case the object might be multidimensional<br />    </span><span class="keyword">if ( </span><span class="default">$this </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">)<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getArrayCopy</span><span class="keyword">();<br /><br />    return </span><span class="default">array_map</span><span class="keyword">( function(</span><span class="default">$item</span><span class="keyword">){<br />        return </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">) ? </span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">getArray</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) : </span><span class="default">$item</span><span class="keyword">;<br />    }, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getArrayCopy</span><span class="keyword">() );<br />}<br /></span><span class="default">?&gt;<br /></span><br />Hope this was useful!</span></code></div>
  </div>
 </div>
  <div class="note" id="120295">  <div class="votes">
    <div id="Vu120295">
    <a href="/manual/vote-note.php?id=120295&amp;page=arrayobject.getarraycopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120295">
    <a href="/manual/vote-note.php?id=120295&amp;page=arrayobject.getarraycopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120295" title="58% like this...">
    2
    </div>
  </div>
  <a href="#120295" class="name">
  <strong class="user"><em>jlshor at buffalo dot edu</em></strong></a><a class="genanchor" href="#120295"> &para;</a><div class="date" title="2016-12-07 08:53"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120295">
<div class="phpcode"><code><span class="html">Is there a difference between casting to an array and using this function?<br /><br />For instance, if we have:<br />$arrayObject = new ArrayObject([1, 2, 3]);<br /><br />Is there a difference between these:<br />$array = (array) $arrayObject;<br />vs<br />$array = $arrayObject-&gt;getArrayCopy();<br /><br />If not, is there any scenario where they would produce different results, or do they produce the result in different ways?</span></code></div>
  </div>
 </div>
  <div class="note" id="115091">  <div class="votes">
    <div id="Vu115091">
    <a href="/manual/vote-note.php?id=115091&amp;page=arrayobject.getarraycopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115091">
    <a href="/manual/vote-note.php?id=115091&amp;page=arrayobject.getarraycopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115091" title="60% like this...">
    1
    </div>
  </div>
  <a href="#115091" class="name">
  <strong class="user"><em>php at webflips dot net</em></strong></a><a class="genanchor" href="#115091"> &para;</a><div class="date" title="2014-05-24 07:42"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115091">
<div class="phpcode"><code><span class="html">"When the ArrayObject refers to an object an array of the public properties of that object will be returned."<br /><br />This description does not seem to be right:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A<br /></span><span class="keyword">{<br />    public </span><span class="default">$var </span><span class="keyword">= </span><span class="string">'var'</span><span class="keyword">;<br />    protected </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">;<br />    private </span><span class="default">$bar </span><span class="keyword">= </span><span class="string">'bar'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$o </span><span class="keyword">= new </span><span class="default">ArrayObject</span><span class="keyword">(new </span><span class="default">A</span><span class="keyword">());<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$o</span><span class="keyword">-&gt;</span><span class="default">getArrayCopy</span><span class="keyword">());<br /><br /></span><span class="comment">/*<br />Dumps:<br /><br />array(3) {<br />  ["var"]=&gt;<br />  string(3) "var"<br />  ["*foo"]=&gt;<br />  string(3) "foo"<br />  ["Abar"]=&gt;<br />  string(3) "bar"<br />}<br />*/<br /></span><span class="default">?&gt;<br /></span><br />So it does not only include the public properties.</span></code></div>
  </div>
 </div>
  <div class="note" id="120406">  <div class="votes">
    <div id="Vu120406">
    <a href="/manual/vote-note.php?id=120406&amp;page=arrayobject.getarraycopy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120406">
    <a href="/manual/vote-note.php?id=120406&amp;page=arrayobject.getarraycopy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120406" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120406" class="name">
  <strong class="user"><em>sorcerer</em></strong></a><a class="genanchor" href="#120406"> &para;</a><div class="date" title="2017-01-03 06:34"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120406">
<div class="phpcode"><code><span class="html">When I used print_r ($fruitsArrayObject) instead of print_r ($copy), i.e. ignoring the getArrayCopy() step, I still got the same output. Why?</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=arrayobject.getarraycopy&amp;repo=en&amp;redirect=https://www.php.net/manual/en/arrayobject.getarraycopy.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.arrayobject.php">ArrayObject</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="arrayobject.append.php" title="append">append</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.exchangearray.php" title="exchangeArray">exchangeArray</a>
                        </li>
                                                <li class="current">
                            <a href="arrayobject.getarraycopy.php" title="getArrayCopy">getArrayCopy</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.getflags.php" title="getFlags">getFlags</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.getiterator.php" title="getIterator">getIterator</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.getiteratorclass.php" title="getIteratorClass">getIteratorClass</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.ksort.php" title="ksort">ksort</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.natcasesort.php" title="natcasesort">natcasesort</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.natsort.php" title="natsort">natsort</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.offsetexists.php" title="offsetExists">offsetExists</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.offsetget.php" title="offsetGet">offsetGet</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.offsetset.php" title="offsetSet">offsetSet</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.offsetunset.php" title="offsetUnset">offsetUnset</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.setflags.php" title="setFlags">setFlags</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.setiteratorclass.php" title="setIteratorClass">setIteratorClass</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="">
                            <a href="arrayobject.unserialize.php" title="unserialize">unserialize</a>
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
