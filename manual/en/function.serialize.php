<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: serialize - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.serialize.php">
 <link rel="shorturl" href="https://www.php.net/serialize">
 <link rel="alternate" href="https://www.php.net/serialize" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.print-r.php">
 <link rel="next" href="https://www.php.net/manual/en/function.settype.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.serialize.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.serialize.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.serialize.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.serialize.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.serialize.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.serialize.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.serialize.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.serialize.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.serialize.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.serialize.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.serialize.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generates a storable representation of a value" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: serialize - Manual" />
<meta name="twitter:description" content="Generates a storable representation of a value" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: serialize - Manual" />
<meta itemprop="description" content="Generates a storable representation of a value" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generates a storable representation of a value" />

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
        <a href="function.settype.php">
          settype &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.print-r.php">
          &laquo; print_r        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.var.php'>Variable handling</a></li>      <li><a href='ref.var.php'>Variable handling Functions</a></li>      </ul>
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
            <option value='en/function.serialize.php' selected="selected">English</option>
            <option value='de/function.serialize.php'>German</option>
            <option value='es/function.serialize.php'>Spanish</option>
            <option value='fr/function.serialize.php'>French</option>
            <option value='it/function.serialize.php'>Italian</option>
            <option value='ja/function.serialize.php'>Japanese</option>
            <option value='pt_BR/function.serialize.php'>Brazilian Portuguese</option>
            <option value='ru/function.serialize.php'>Russian</option>
            <option value='tr/function.serialize.php'>Turkish</option>
            <option value='uk/function.serialize.php'>Ukrainian</option>
            <option value='zh/function.serialize.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.serialize" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">serialize</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">serialize</span> &mdash; <span class="dc-title">Generates a storable representation of a value</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.serialize-description">
  <h3 class="title">Description</h3>
   <div class="methodsynopsis dc-description">
    <span class="methodname"><strong>serialize</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Generates a storable representation of a value.
  </p>
  <p class="para">
   This is useful for storing or passing PHP values around without
   losing their type and structure.
  </p>
  <p class="para">
   To make the serialized string into a PHP value again, use
   <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span>.  
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.serialize-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The value to be serialized. <span class="function"><strong>serialize()</strong></span>
       handles all types, except the <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>-type and some <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s (see note below).
       You can even <span class="function"><strong>serialize()</strong></span> arrays that contain
       references to itself. Circular references inside the array/object you 
       are serializing will also be stored. Any other 
       reference will be lost.
      </p>
      <p class="para">
       When serializing objects, PHP will attempt to call the member functions
       <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a> or
       <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a> prior to serialization.
       This is to allow the object to do any last minute clean-up, etc. prior 
       to being serialized. Likewise, when the object is restored using 
       <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span> the <a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a> or
       <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a> member function is called.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
       Object&#039;s private members have the class name prepended to the member
       name; protected members have a &#039;*&#039; prepended to the member name.
       These prepended values have null bytes on either side.
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.serialize-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string containing a byte-stream representation of 
   <code class="parameter">value</code> that can be stored anywhere.
  </p>
  <p class="para">
   Note that this is a binary string which may include null bytes, and needs
   to be stored and handled as such. For example,
   <span class="function"><strong>serialize()</strong></span> output should generally be stored in a BLOB
   field in a database, rather than a CHAR or TEXT field.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.serialize-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5667">
    <p><strong>Example #1 <span class="function"><strong>serialize()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// $session_data contains a multi-dimensional array with session<br />// information for the current user.  We use serialize() to store<br />// it in a database at the end of the request.<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"webdb"</span><span style="color: #007700">, </span><span style="color: #DD0000">"php"</span><span style="color: #007700">, </span><span style="color: #DD0000">"chicken"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">,<br />      </span><span style="color: #DD0000">"UPDATE sessions SET data = ? WHERE id = ?"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sqldata </span><span style="color: #007700">= array (</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$session_data</span><span style="color: #007700">), </span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_AUTH_USER'</span><span style="color: #007700">]);<br />if (!</span><span style="color: #0000BB">odbc_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">$sqldata</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">,<br />     </span><span style="color: #DD0000">"INSERT INTO sessions (id, data) VALUES(?, ?)"</span><span style="color: #007700">);<br />    if (!</span><span style="color: #0000BB">odbc_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">array_reverse</span><span style="color: #007700">(</span><span style="color: #0000BB">$sqldata</span><span style="color: #007700">))) {<br />        </span><span style="color: #FF8000">/* Something went wrong.. */<br />    </span><span style="color: #007700">}<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.serialize-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Note that many built-in PHP objects cannot be serialized. However, those with 
    this ability either implement the <span class="interfacename"><a href="class.serializable.php" class="interfacename">Serializable</a></span> interface or the 
    magic <a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a>/<a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a>
    or <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a>/<a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a> methods. If an
    internal class does not fulfill any of those requirements, it cannot reliably be 
    serialized.
   </p>
   <p class="para">
    There are some historical exceptions to the above rule, where some internal objects 
    could be serialized without implementing the interface or exposing the methods.
   </p>
  </p></blockquote>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    When <span class="function"><strong>serialize()</strong></span> serializes objects, the leading backslash is not included in the class name of namespaced classes for maximum compatibility.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.serialize-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.unserialize.php" class="function" rel="rdfs-seeAlso">unserialize()</a> - Creates a PHP value from a stored representation</span></li>
    <li><span class="function"><a href="function.var-export.php" class="function" rel="rdfs-seeAlso">var_export()</a> - Outputs or returns a parsable string representation of a variable</span></li>
    <li><span class="function"><a href="function.json-encode.php" class="function" rel="rdfs-seeAlso">json_encode()</a> - Returns the JSON representation of a value</span></li>
    <li><a href="language.oop5.serialization.php" class="link">Serializing Objects</a></li>
    <li><a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a></li>
    <li><a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a></li>
    <li><a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a></li>
    <li><a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/serialize.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.serialize%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.serialize&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.serialize.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="66147">  <div class="votes">
    <div id="Vu66147">
    <a href="/manual/vote-note.php?id=66147&amp;page=function.serialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66147">
    <a href="/manual/vote-note.php?id=66147&amp;page=function.serialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66147" title="80% like this...">
    372
    </div>
  </div>
  <a href="#66147" class="name">
  <strong class="user"><em>egingell at sisna dot com</em></strong></a><a class="genanchor" href="#66147"> &para;</a><div class="date" title="2006-05-15 05:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66147">
<div class="phpcode"><code><span class="html">&lt;?<br />/*<br />Anatomy of a serialize()'ed value:<br /><br /> String<br /> s:size:value;<br /><br /> Integer<br /> i:value;<br /><br /> Boolean<br /> b:value; (does not store "true" or "false", does store '1' or '0')<br /><br /> Null<br /> N;<br /><br /> Array<br /> a:size:{key definition;value definition;(repeated per element)}<br /><br /> Object<br /> O:strlen(object name):object name:object size:{s:strlen(property name):property name:property definition;(repeated per property)}<br /><br /> String values are always in double quotes<br /> Array keys are always integers or strings<br />    "null =&gt; 'value'" equates to 's:0:"";s:5:"value";',<br />    "true =&gt; 'value'" equates to 'i:1;s:5:"value";',<br />    "false =&gt; 'value'" equates to 'i:0;s:5:"value";',<br />    "array(whatever the contents) =&gt; 'value'" equates to an "illegal offset type" warning because you can't use an<br />    array as a key; however, if you use a variable containing an array as a key, it will equate to 's:5:"Array";s:5:"value";',<br />     and<br />    attempting to use an object as a key will result in the same behavior as using an array will.<br />*/<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="107717">  <div class="votes">
    <div id="Vu107717">
    <a href="/manual/vote-note.php?id=107717&amp;page=function.serialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107717">
    <a href="/manual/vote-note.php?id=107717&amp;page=function.serialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107717" title="75% like this...">
    287
    </div>
  </div>
  <a href="#107717" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#107717"> &para;</a><div class="date" title="2012-02-28 07:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107717">
<div class="phpcode"><code><span class="html">Please! please! please! DO NOT serialize data and place it into your database. Serialize can be used that way, but that's missing the point of a relational database and the datatypes inherent in your database engine. Doing this makes data in your database non-portable, difficult to read, and can complicate queries. If you want your application to be portable to other languages, like let's say you find that you want to use Java for some portion of your app that it makes sense to use Java in, serialization will become a pain in the buttocks. You should always be able to query and modify data in the database without using a third party intermediary tool to manipulate data to be inserted. <br /><br />I've encountered this too many times in my career, it makes for difficult to maintain code, code with portability issues, and data that is it more difficult to migrate to other RDMS systems, new schema, etc. It also has the added disadvantage of making it messy to search your database based on one of the fields that you've serialized. <br /><br />That's not to say serialize() is useless. It's not... A good place to use it may be a cache file that contains the result of a data intensive operation, for instance. There are tons of others... Just don't abuse serialize because the next guy who comes along will have a maintenance or migration nightmare.</span></code></div>
  </div>
 </div>
  <div class="note" id="128200">  <div class="votes">
    <div id="Vu128200">
    <a href="/manual/vote-note.php?id=128200&amp;page=function.serialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128200">
    <a href="/manual/vote-note.php?id=128200&amp;page=function.serialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128200" title="72% like this...">
    5
    </div>
  </div>
  <a href="#128200" class="name">
  <strong class="user"><em>mark at bvits dot co dot uk</em></strong></a><a class="genanchor" href="#128200"> &para;</a><div class="date" title="2023-02-09 01:05"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128200">
<div class="phpcode"><code><span class="html">There is a type not mentioned in the user notes so far, 'E'.  This is the newer Enum class that can be utilised:<br /><br />login_security|E:25:"Permission:manageClient"</span></code></div>
  </div>
 </div>
  <div class="note" id="60317">  <div class="votes">
    <div id="Vu60317">
    <a href="/manual/vote-note.php?id=60317&amp;page=function.serialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60317">
    <a href="/manual/vote-note.php?id=60317&amp;page=function.serialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60317" title="66% like this...">
    21
    </div>
  </div>
  <a href="#60317" class="name">
  <strong class="user"><em>MC_Gurk at gmx dot net</em></strong></a><a class="genanchor" href="#60317"> &para;</a><div class="date" title="2006-01-03 07:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60317">
<div class="phpcode"><code><span class="html">If you are going to serialie an object which contains references to other objects you want to serialize some time later, these references will be lost when the object is unserialized.<br />The references can only be kept if all of your objects are serialized at once.<br />That means:<br /><br />$a = new ClassA(); <br />$b = new ClassB($a); //$b containes a reference to $a;<br /><br />$s1=serialize($a);<br />$s2=serialize($b);<br /><br />$a=unserialize($s1);<br />$b=unserialize($s2);<br /><br />now b references to an object of ClassA which is not $a. $a is another object of Class A.<br /><br />use this:<br />$buf[0]=$a;<br />$buf[1]=$b;<br />$s=serialize($buf);<br />$buf=unserialize($s);<br />$a=$buf[0];<br />$b=$buf[1];<br /><br />all references are intact.</span></code></div>
  </div>
 </div>
  <div class="note" id="111168">  <div class="votes">
    <div id="Vu111168">
    <a href="/manual/vote-note.php?id=111168&amp;page=function.serialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111168">
    <a href="/manual/vote-note.php?id=111168&amp;page=function.serialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111168" title="58% like this...">
    24
    </div>
  </div>
  <a href="#111168" class="name">
  <strong class="user"><em>nh at ngin dot de</em></strong></a><a class="genanchor" href="#111168"> &para;</a><div class="date" title="2013-01-21 09:59"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111168">
<div class="phpcode"><code><span class="html">Serializing floating point numbers leads to weird precision offset errors:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">round</span><span class="keyword">(</span><span class="default">96.670000000000002</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="comment">// 96.67<br /><br /></span><span class="keyword">echo </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">round</span><span class="keyword">(</span><span class="default">96.670000000000002</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">));<br /></span><span class="comment">// d:96.670000000000002;<br /><br /></span><span class="keyword">echo </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">96.67</span><span class="keyword">);<br /></span><span class="comment">// d:96.670000000000002;<br /><br /></span><span class="default">?&gt;<br /></span><br />Not only is this wrong, but it adds a lot of unnecessary bulk to serialized data. Probably better to use json_encode() instead (which apparently is faster than serialize(), anyway).</span></code></div>
  </div>
 </div>
  <div class="note" id="109953">  <div class="votes">
    <div id="Vu109953">
    <a href="/manual/vote-note.php?id=109953&amp;page=function.serialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109953">
    <a href="/manual/vote-note.php?id=109953&amp;page=function.serialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109953" title="57% like this...">
    11
    </div>
  </div>
  <a href="#109953" class="name">
  <strong class="user"><em>Andrew B</em></strong></a><a class="genanchor" href="#109953"> &para;</a><div class="date" title="2012-09-05 09:42"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109953">
<div class="phpcode"><code><span class="html">When you serialize an array the internal pointer will not be preserved. Apparently this is the expected behavior but was a bit of a gotcha moment for me. Copy and paste example below.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//Internal Pointer will be 2 once variables have been assigned.
<br /></span><span class="default">$array </span><span class="keyword">= array();
<br /></span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">1</span><span class="keyword">;
<br /></span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">2</span><span class="keyword">;
<br /></span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">3</span><span class="keyword">;
<br />
<br /></span><span class="comment">//Unset variables. Internal pointer will still be at 2.     
<br /></span><span class="keyword">unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br />
<br /></span><span class="comment">//Serialize
<br /></span><span class="default">$serializeArray </span><span class="keyword">= </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Unserialize
<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$serializeArray</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Add a new element to the array
<br />//If the internal pointer was preserved, the new array key should be 3.
<br />//Instead the internal pointer has been reset, and the new array key is 0.
<br /></span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">4</span><span class="keyword">;
<br />
<br /></span><span class="comment">//Expected Key - 3
<br />//Actual Key - 0
<br /></span><span class="keyword">echo </span><span class="string">"&lt;pre&gt;" </span><span class="keyword">, </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) , </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113305">  <div class="votes">
    <div id="Vu113305">
    <a href="/manual/vote-note.php?id=113305&amp;page=function.serialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113305">
    <a href="/manual/vote-note.php?id=113305&amp;page=function.serialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113305" title="56% like this...">
    12
    </div>
  </div>
  <a href="#113305" class="name">
  <strong class="user"><em>frost at easycast dot ru</em></strong></a><a class="genanchor" href="#113305"> &para;</a><div class="date" title="2013-09-23 10:56"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113305">
<div class="phpcode"><code><span class="html">Closures cannot be serialized:<br /><span class="default">&lt;?php<br />$func </span><span class="keyword">= function () {echo </span><span class="string">'hello!'</span><span class="keyword">;};<br /></span><span class="default">$func</span><span class="keyword">(); </span><span class="comment">// prints "hello!"<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">);  </span><span class="comment">// Fatal error: Uncaught exception 'Exception' with message 'Serialization of 'Closure' is not allowed' <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.serialize&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.serialize.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.boolval.php" title="boolval">boolval</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-zval-dump.php" title="debug_&#8203;zval_&#8203;dump">debug_&#8203;zval_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.doubleval.php" title="doubleval">doubleval</a>
                        </li>
                                                <li class="">
                            <a href="function.empty.php" title="empty">empty</a>
                        </li>
                                                <li class="">
                            <a href="function.floatval.php" title="floatval">floatval</a>
                        </li>
                                                <li class="">
                            <a href="function.get-debug-type.php" title="get_&#8203;debug_&#8203;type">get_&#8203;debug_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-vars.php" title="get_&#8203;defined_&#8203;vars">get_&#8203;defined_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-id.php" title="get_&#8203;resource_&#8203;id">get_&#8203;resource_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-type.php" title="get_&#8203;resource_&#8203;type">get_&#8203;resource_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.gettype.php" title="gettype">gettype</a>
                        </li>
                                                <li class="">
                            <a href="function.intval.php" title="intval">intval</a>
                        </li>
                                                <li class="">
                            <a href="function.is-array.php" title="is_&#8203;array">is_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.is-bool.php" title="is_&#8203;bool">is_&#8203;bool</a>
                        </li>
                                                <li class="">
                            <a href="function.is-callable.php" title="is_&#8203;callable">is_&#8203;callable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-countable.php" title="is_&#8203;countable">is_&#8203;countable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-double.php" title="is_&#8203;double">is_&#8203;double</a>
                        </li>
                                                <li class="">
                            <a href="function.is-float.php" title="is_&#8203;float">is_&#8203;float</a>
                        </li>
                                                <li class="">
                            <a href="function.is-int.php" title="is_&#8203;int">is_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.is-integer.php" title="is_&#8203;integer">is_&#8203;integer</a>
                        </li>
                                                <li class="">
                            <a href="function.is-iterable.php" title="is_&#8203;iterable">is_&#8203;iterable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-long.php" title="is_&#8203;long">is_&#8203;long</a>
                        </li>
                                                <li class="">
                            <a href="function.is-null.php" title="is_&#8203;null">is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.is-numeric.php" title="is_&#8203;numeric">is_&#8203;numeric</a>
                        </li>
                                                <li class="">
                            <a href="function.is-object.php" title="is_&#8203;object">is_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.is-real.php" title="is_&#8203;real">is_&#8203;real</a>
                        </li>
                                                <li class="">
                            <a href="function.is-resource.php" title="is_&#8203;resource">is_&#8203;resource</a>
                        </li>
                                                <li class="">
                            <a href="function.is-scalar.php" title="is_&#8203;scalar">is_&#8203;scalar</a>
                        </li>
                                                <li class="">
                            <a href="function.is-string.php" title="is_&#8203;string">is_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.isset.php" title="isset">isset</a>
                        </li>
                                                <li class="">
                            <a href="function.print-r.php" title="print_&#8203;r">print_&#8203;r</a>
                        </li>
                                                <li class="current">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="">
                            <a href="function.unserialize.php" title="unserialize">unserialize</a>
                        </li>
                                                <li class="">
                            <a href="function.unset.php" title="unset">unset</a>
                        </li>
                                                <li class="">
                            <a href="function.var-dump.php" title="var_&#8203;dump">var_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.var-export.php" title="var_&#8203;export">var_&#8203;export</a>
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
