<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: unserialize - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.unserialize.php">
 <link rel="shorturl" href="https://www.php.net/unserialize">
 <link rel="alternate" href="https://www.php.net/unserialize" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strval.php">
 <link rel="next" href="https://www.php.net/manual/en/function.unset.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.unserialize.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.unserialize.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.unserialize.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.unserialize.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.unserialize.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.unserialize.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.unserialize.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.unserialize.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.unserialize.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.unserialize.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.unserialize.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a PHP value from a stored representation" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: unserialize - Manual" />
<meta name="twitter:description" content="Creates a PHP value from a stored representation" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: unserialize - Manual" />
<meta itemprop="description" content="Creates a PHP value from a stored representation" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a PHP value from a stored representation" />

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
        <a href="function.unset.php">
          unset &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strval.php">
          &laquo; strval        </a>
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
            <option value='en/function.unserialize.php' selected="selected">English</option>
            <option value='de/function.unserialize.php'>German</option>
            <option value='es/function.unserialize.php'>Spanish</option>
            <option value='fr/function.unserialize.php'>French</option>
            <option value='it/function.unserialize.php'>Italian</option>
            <option value='ja/function.unserialize.php'>Japanese</option>
            <option value='pt_BR/function.unserialize.php'>Brazilian Portuguese</option>
            <option value='ru/function.unserialize.php'>Russian</option>
            <option value='tr/function.unserialize.php'>Turkish</option>
            <option value='uk/function.unserialize.php'>Ukrainian</option>
            <option value='zh/function.unserialize.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.unserialize" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">unserialize</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">unserialize</span> &mdash; <span class="dc-title">
   Creates a PHP value from a stored representation
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.unserialize-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>unserialize</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="simpara">
   <span class="function"><strong>unserialize()</strong></span> takes a single serialized variable and
   converts it back into a PHP value.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Do not pass untrusted user input to <span class="function"><strong>unserialize()</strong></span> regardless
    of the <code class="parameter">options</code> value of <code class="literal">allowed_classes</code>.
    Unserialization can result in code being loaded and executed due to object
    instantiation and autoloading, and a malicious user may be able to exploit
    this. Use a safe, standard data interchange format such as JSON (via
    <span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span> and <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span>) if
    you need to pass serialized data to the user.
   </p>
   <p class="para">
    If you need to unserialize externally-stored serialized data, consider using
    <span class="function"><a href="function.hash-hmac.php" class="function">hash_hmac()</a></span> for data validation. Make sure data is
    not modified by anyone but you.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.unserialize-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The serialized string.
      </p>
      <p class="para">
       If the variable being unserialized is an object, after successfully
       reconstructing the object PHP will automatically attempt to call the
       <a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a> or <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a> methods (if one exists).
      </p>
      <p class="para">
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <strong>
         <a href="var.configuration.php#ini.unserialize-callback-func" class="link">unserialize_callback_func</a>
          directive
        </strong><br />
        <p class="para">
         The callback specified in the
         <a href="var.configuration.php#ini.unserialize-callback-func" class="link">unserialize_callback_func</a>
         directive is called when an undefined class is unserialized.
         If no callback is specified, the object will be instantiated as
         <span class="classname"><a href="class.php-incomplete-class.php" class="classname">__PHP_Incomplete_Class</a></span>.
        </p>
       </p></blockquote>
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       Any options to be provided to <span class="function"><strong>unserialize()</strong></span>, as an
       associative array.
      </p>
      <table class="doctable table">
       <caption><strong>Valid options</strong></caption>
       
        <thead>
         <tr>
          <th>Name</th>
          <th>Type</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td><code class="literal">allowed_classes</code></td>
          <td><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></td>
          <td>
           <span class="simpara">
            Either an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of class names which should be
            accepted, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> to accept no classes, or <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to accept all
            classes. If this option is defined and
            <span class="function"><strong>unserialize()</strong></span> encounters an object of a class
            that isn&#039;t to be accepted, then the object will be instantiated as
            <span class="classname"><a href="class.php-incomplete-class.php" class="classname">__PHP_Incomplete_Class</a></span> instead.
           </span>
           <span class="simpara">
            Omitting this option is the same as defining it as <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>: PHP
            will attempt to instantiate objects of any class.
           </span>
          </td>
         </tr>

         <tr>
          <td><code class="literal">max_depth</code></td>
          <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
          <td>
           <span class="simpara">
            The maximum depth of structures permitted during unserialization,
            and is intended to prevent stack overflows. The default depth limit
            is <code class="literal">4096</code> and can be disabled by setting
            <code class="literal">max_depth</code> to <code class="literal">0</code>.
           </span>
          </td>
         </tr>

        </tbody>
       
      </table>

     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.unserialize-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The converted value is returned, and can be a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>,
   <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, <span class="type"><a href="language.types.float.php" class="type float">float</a></span>, <span class="type"><a href="language.types.string.php" class="type string">string</a></span>,
   <span class="type"><a href="language.types.array.php" class="type array">array</a></span> or <span class="type"><a href="language.types.object.php" class="type object">object</a></span>.
  </p>
  <p class="para">
   In case the passed string is not unserializeable, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned and
   <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is issued.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.unserialize-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   Objects may throw <span class="classname"><a href="class.throwable.php" class="classname">Throwable</a></span>s in their unserialization handlers.
  </p>
  <p class="simpara">
   As of PHP 8.4.0, if the <code class="literal">allowed_classes</code> element of
   <code class="parameter">options</code> is not an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of class names,
   <span class="function"><strong>unserialize()</strong></span> throws <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span>s
   and <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>s.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.unserialize-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.4.0</td>
       <td>
        Now throws <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span>s and
        <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>s if the <code class="literal">allowed_classes</code>
        element of <code class="parameter">options</code> is not an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of class names.
       </td>
      </tr>

      <tr>
       <td>8.3.0</td>
       <td>
        Now emits <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> when the input string has unconsumed data.
       </td>
      </tr>

      <tr>
       <td>8.3.0</td>
       <td>
        Now emits <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> when the passed string is not unserializeable;
        previously <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> was emitted.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        Added the <code class="literal">max_depth</code> element of
        <code class="parameter">options</code> to set the maximum depth of structures permitted during unserialization.
       </td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        The <code class="literal">allowed_classes</code> element of
        <code class="parameter">options</code> is now strictly typed, i.e. if anything
        other than an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> or a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> is given,
        <span class="function"><strong>unserialize()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> and issues an
        <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.unserialize-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5670">
    <p><strong>Example #1 <span class="function"><strong>unserialize()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Here, we use unserialize() to load session data to the<br />// $session_data array from the string selected from a database.<br />// This example complements the one described with serialize().<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"webdb"</span><span style="color: #007700">, </span><span style="color: #DD0000">"php"</span><span style="color: #007700">, </span><span style="color: #DD0000">"chicken"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT data FROM sessions WHERE id = ?"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sqldata </span><span style="color: #007700">= array(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_AUTH_USER'</span><span style="color: #007700">]);<br />if (!</span><span style="color: #0000BB">odbc_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">$sqldata</span><span style="color: #007700">) || !</span><span style="color: #0000BB">odbc_fetch_into</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">$tmp</span><span style="color: #007700">)) {<br />    </span><span style="color: #FF8000">// if the execute or fetch fails, initialize to empty array<br />    </span><span style="color: #0000BB">$session_data </span><span style="color: #007700">= array();<br />} else {<br />    </span><span style="color: #FF8000">// we should now have the serialized data in $tmp[0].<br />    </span><span style="color: #0000BB">$session_data </span><span style="color: #007700">= </span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmp</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />    if (!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$session_data</span><span style="color: #007700">)) {<br />        </span><span style="color: #FF8000">// something went wrong, initialize to empty array<br />        </span><span style="color: #0000BB">$session_data </span><span style="color: #007700">= array();<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5671">
    <p><strong>Example #2 unserialize_callback_func example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$serialized_object</span><span style="color: #007700">=</span><span style="color: #DD0000">'O:1:"a":1:{s:5:"value";s:3:"100";}'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'unserialize_callback_func'</span><span style="color: #007700">, </span><span style="color: #DD0000">'mycallback'</span><span style="color: #007700">); </span><span style="color: #FF8000">// set your callback_function<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">mycallback</span><span style="color: #007700">(</span><span style="color: #0000BB">$classname</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #FF8000">// just include a file containing your class definition<br />    // you get $classname to figure out which class definition is required<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$classname</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$serialized_object</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.unserialize-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned both in the case of an error and if unserializing
    the serialized <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> value. It is possible to catch this special case by
    comparing <code class="parameter">data</code> with
    <code class="literal">serialize(false)</code> or by catching the issued
    <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.unserialize-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.json-encode.php" class="function" rel="rdfs-seeAlso">json_encode()</a> - Returns the JSON representation of a value</span></li>
    <li><span class="function"><a href="function.json-decode.php" class="function" rel="rdfs-seeAlso">json_decode()</a> - Decodes a JSON string</span></li>
    <li><span class="function"><a href="function.hash-hmac.php" class="function" rel="rdfs-seeAlso">hash_hmac()</a> - Generate a keyed hash value using the HMAC method</span></li>
    <li><span class="function"><a href="function.serialize.php" class="function" rel="rdfs-seeAlso">serialize()</a> - Generates a storable representation of a value</span></li>
    <li><a href="language.oop5.autoload.php" class="link">Autoloading Classes</a></li>
    <li><a href="var.configuration.php#ini.unserialize-callback-func" class="link">unserialize_callback_func</a></li>
    <li><a href="var.configuration.php#ini.unserialize-max-depth" class="link">unserialize_max_depth</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/unserialize.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.unserialize%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.unserialize&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.unserialize.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">23 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121813">  <div class="votes">
    <div id="Vu121813">
    <a href="/manual/vote-note.php?id=121813&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121813">
    <a href="/manual/vote-note.php?id=121813&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121813" title="91% like this...">
    105
    </div>
  </div>
  <a href="#121813" class="name">
  <strong class="user"><em>me+phpnet at unreal4u dot com</em></strong></a><a class="genanchor" href="#121813"> &para;</a><div class="date" title="2017-10-30 03:30"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121813">
<div class="phpcode"><code><span class="html">Just some reminder which may save somebody some time regarding the `$options` array: <br /><br />Say you want to be on the safe side and not allow any objects to be unserialized... My first thought was doing the following:<br /><br /><span class="default">&lt;?php<br />$lol </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="comment">// This will generate:<br />// Warning: unserialize() expects parameter 2 to be array, boolean given<br /></span><span class="default">?&gt;<br /></span><br />The correct way of doing this is the following:<br /><span class="default">&lt;?php<br />$lol </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, [</span><span class="string">'allowed_classes' </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span><br />Hope it helps somebody!</span></code></div>
  </div>
 </div>
  <div class="note" id="125543">  <div class="votes">
    <div id="Vu125543">
    <a href="/manual/vote-note.php?id=125543&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125543">
    <a href="/manual/vote-note.php?id=125543&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125543" title="85% like this...">
    10
    </div>
  </div>
  <a href="#125543" class="name">
  <strong class="user"><em>karsten at dambekalns dot de</em></strong></a><a class="genanchor" href="#125543"> &para;</a><div class="date" title="2020-11-27 07:53"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125543">
<div class="phpcode"><code><span class="html">Keep in mind that the allowed_classes does not use inheritance, i.e. allowing an interface is not possible and sub-classes won't pass the check. See <a href="https://3v4l.org/tdHfl" rel="nofollow" target="_blank">https://3v4l.org/tdHfl</a></span></code></div>
  </div>
 </div>
  <div class="note" id="112894">  <div class="votes">
    <div id="Vu112894">
    <a href="/manual/vote-note.php?id=112894&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112894">
    <a href="/manual/vote-note.php?id=112894&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112894" title="71% like this...">
    34
    </div>
  </div>
  <a href="#112894" class="name">
  <strong class="user"><em>ErnestV</em></strong></a><a class="genanchor" href="#112894"> &para;</a><div class="date" title="2013-08-03 01:05"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112894">
<div class="phpcode"><code><span class="html">Just a note - if the serialized string contains a reference to a class that cannot be instantiated (e.g. being abstract) PHP will immediately die with a fatal error. If the unserialize() statement is preceded with a '@' to avoid cluttering the logs with warns or notices there will be absolutely no clue as to why the script stopped working. Cost me a couple of hours...</span></code></div>
  </div>
 </div>
  <div class="note" id="96938">  <div class="votes">
    <div id="Vu96938">
    <a href="/manual/vote-note.php?id=96938&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96938">
    <a href="/manual/vote-note.php?id=96938&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96938" title="77% like this...">
    12
    </div>
  </div>
  <a href="#96938" class="name">
  <strong class="user"><em>daniel at fourstaples dot com</em></strong></a><a class="genanchor" href="#96938"> &para;</a><div class="date" title="2010-03-23 08:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96938">
<div class="phpcode"><code><span class="html">Here's a simple function to get the class of a serialized string (that is, the type of object that will be returned if it's unserialized):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_serial_class</span><span class="keyword">(</span><span class="default">$serial</span><span class="keyword">) {<br />    </span><span class="default">$types </span><span class="keyword">= array(</span><span class="string">'s' </span><span class="keyword">=&gt; </span><span class="string">'string'</span><span class="keyword">, </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="string">'array'</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="string">'bool'</span><span class="keyword">, </span><span class="string">'i' </span><span class="keyword">=&gt; </span><span class="string">'int'</span><span class="keyword">, </span><span class="string">'d' </span><span class="keyword">=&gt; </span><span class="string">'float'</span><span class="keyword">, </span><span class="string">'N;' </span><span class="keyword">=&gt; </span><span class="string">'NULL'</span><span class="keyword">);<br />    <br />    </span><span class="default">$parts </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">':'</span><span class="keyword">, </span><span class="default">$serial</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />    return isset(</span><span class="default">$types</span><span class="keyword">[</span><span class="default">$parts</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]]) ? </span><span class="default">$types</span><span class="keyword">[</span><span class="default">$parts</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]] : </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="string">'"'</span><span class="keyword">); <br />}<br /></span><span class="default">?&gt;<br /></span><br />I use this when saving a serialized object to a cookie, to make sure it is the right type when I go to unserialize it.<br /><br />The type names are the same format/case as you would see if you did a var_dump().</span></code></div>
  </div>
 </div>
  <div class="note" id="124608">  <div class="votes">
    <div id="Vu124608">
    <a href="/manual/vote-note.php?id=124608&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124608">
    <a href="/manual/vote-note.php?id=124608&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124608" title="69% like this...">
    10
    </div>
  </div>
  <a href="#124608" class="name">
  <strong class="user"><em>hadley8899 at gmail dot com</em></strong></a><a class="genanchor" href="#124608"> &para;</a><div class="date" title="2020-01-13 01:58"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124608">
<div class="phpcode"><code><span class="html">For the people who are getting the error <br /><br />PHP Notice:  unserialize(): Error at offset 191 of 285 bytes in ...<br /><br />and are getting the data from a database, Make sure that you have the database set the the correct encoding, I had the database set as latin1_swedish_ci and all of the data looked perfect, Infact when i copied it into a online unserialize it worked fine. I changed the collation to utf8mb4_unicode_ci and all worked fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="120399">  <div class="votes">
    <div id="Vu120399">
    <a href="/manual/vote-note.php?id=120399&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120399">
    <a href="/manual/vote-note.php?id=120399&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120399" title="70% like this...">
    7
    </div>
  </div>
  <a href="#120399" class="name">
  <strong class="user"><em>bjd</em></strong></a><a class="genanchor" href="#120399"> &para;</a><div class="date" title="2017-01-02 12:49"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120399">
<div class="phpcode"><code><span class="html">Talk on Exploiting PHP7 Unserialize here: <a href="https://media.ccc.de/v/33c3-7858-exploiting_php7_unserialize" rel="nofollow" target="_blank">https://media.ccc.de/v/33c3-7858-exploiting_php7_unserialize</a></span></code></div>
  </div>
 </div>
  <div class="note" id="112823">  <div class="votes">
    <div id="Vu112823">
    <a href="/manual/vote-note.php?id=112823&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112823">
    <a href="/manual/vote-note.php?id=112823&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112823" title="59% like this...">
    11
    </div>
  </div>
  <a href="#112823" class="name">
  <strong class="user"><em>Ray.Paseur often uses Gmail</em></strong></a><a class="genanchor" href="#112823"> &para;</a><div class="date" title="2013-07-26 01:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112823">
<div class="phpcode"><code><span class="html">In the Classes and Objects docs, there is this: In order to be able to unserialize() an object, the class of that object needs to be defined.<br /><br />Prior to PHP 5.3, this was not an issue.  But after PHP 5.3 an object made by SimpleXML_Load_String() cannot be serialized.  An attempt to do so will result in a run-time failure, throwing an exception.  If you store such an object in $_SESSION, you will get a post-execution error that says this:<br /><br />Fatal error: Uncaught exception 'Exception' with message 'Serialization of 'SimpleXMLElement' is not allowed' in [no active file]:0 Stack trace: #0 {main} thrown in [no active file] on line 0<br /><br />The entire contents of the session will be lost.  Hope this saves someone some time!<br /><br /><span class="default">&lt;?php </span><span class="comment">// RAY_temp_ser.php<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">);<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'hello'</span><span class="keyword">] = </span><span class="string">'World'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">);<br /><br /></span><span class="comment">// AN XML STRING FOR TEST DATA<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="string">'&lt;?xml version="1.0"?&gt;<br />&lt;families&gt;<br />  &lt;parent&gt;<br />    &lt;child index="1" value="Category 1"&gt;Child One&lt;/child&gt;<br />  &lt;/parent&gt;<br />&lt;/families&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">// MAKE AN OBJECT (GIVES SimpleXMLElement)<br /></span><span class="default">$obj </span><span class="keyword">= </span><span class="default">SimpleXML_Load_String</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /><br /></span><span class="comment">// STORE THE OBJECT IN THE SESSION<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'obj'</span><span class="keyword">] = </span><span class="default">$obj</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93451">  <div class="votes">
    <div id="Vu93451">
    <a href="/manual/vote-note.php?id=93451&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93451">
    <a href="/manual/vote-note.php?id=93451&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93451" title="60% like this...">
    9
    </div>
  </div>
  <a href="#93451" class="name">
  <strong class="user"><em>arbie samong</em></strong></a><a class="genanchor" href="#93451"> &para;</a><div class="date" title="2009-09-10 07:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93451">
<div class="phpcode"><code><span class="html">__PHP_Incomplete_Class Object Demystified
<br />
<br />1. First take note of the output. A simple example:
<br />
<br />__PHP_Incomplete_Class Object (
<br />[__PHP_Incomplete_Class_Name] =&gt; SomeObject1
<br />[obj1property1] =&gt; somevalue1 [obj1property2] =&gt; __PHP_Incomplete_Class Object ( [__PHP_Incomplete_Class_Name] =&gt; SomeObject2 [obj2property1] =&gt; somevalue1 [obj2property2] =&gt; Array (
<br />['key1'] =&gt; somevalue3, ['key2'] =&gt; somevalue4 ) ) )
<br />
<br />2. We analyze this and break it down. 
<br />__PHP_Incomplete_Class Object tells you there is an object that needs to be declared somehow. 
<br />__PHP_Incomplete_Class_Name simply tells you the expected class name. It is just one of the properties for now.
<br />
<br />So we have:
<br />a) an unknown object that has a class name SomeObject1 (first class)
<br />b) it has 2 properties, namely obj1property1 and obj2property2
<br />c) obj2property2 is itself an object whose class name is SomeObject2 (the second class)
<br />d) SomeObject2 has two properties, obj2property1 and obj2property2
<br />e) obj2property2 is an array that contains two elements
<br />
<br />3. Now that we have an idea of the structure, we shall create class definitions based from it. We will just create properties for now, methods are not required as a minimum.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">SomeObject1 </span><span class="keyword">{
<br />        public </span><span class="default">$obj1property1</span><span class="keyword">;
<br />        public </span><span class="default">$obj1property2</span><span class="keyword">;
<br />}
<br />class </span><span class="default">SomeObject2 </span><span class="keyword">{
<br />        public </span><span class="default">$obj2property1</span><span class="keyword">;
<br />        public </span><span class="default">$obj2property2</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />4. Have that accessible to your script and it will solve the __PHP_Incomplete_Class Object problem as far as the output is concerned. Now you will have:
<br />
<br />SomeObject1 ( [obj1property1] =&gt; somevalue1 [obj1property2] =&gt; SomeObject2 ( [obj2property1] =&gt; somevalue1 [obj2property2] =&gt; Array ( ['key1'] =&gt; somevalue3, ['key2'] =&gt; somevalue4 ) ) )
<br />
<br />As you will notice, __PHP_Incomplete_Class Object is gone and replaced by the class name. The property __PHP_Incomplete_Class_Name is also removed.
<br />
<br />5. As for the array property obj2property2, we can directly access that and just assume that it is an array and loop through it:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">// this will be SomeObject1 
<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$serialized_data</span><span class="keyword">);
<br />
<br /></span><span class="comment">// this will be SomeObject2
<br /></span><span class="default">$data2 </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">-&gt;</span><span class="default">obj1property2</span><span class="keyword">();
<br />
<br />foreach(</span><span class="default">$data2</span><span class="keyword">-&gt;</span><span class="default">obj2property2 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">):
<br />         print </span><span class="default">$key</span><span class="keyword">.</span><span class="string">' : '</span><span class="keyword">. </span><span class="default">$value </span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">; 
<br />endforeach;
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Outputs:
<br />key1 : somevalue3
<br />key2 : somevalue4
<br />
<br />That's it. You can add more methods on the class declarations for the given properties, provided you keep your original output as basis for the data types.</span></code></div>
  </div>
 </div>
  <div class="note" id="117589">  <div class="votes">
    <div id="Vu117589">
    <a href="/manual/vote-note.php?id=117589&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117589">
    <a href="/manual/vote-note.php?id=117589&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117589" title="60% like this...">
    4
    </div>
  </div>
  <a href="#117589" class="name">
  <strong class="user"><em>chris at pollett dot org</em></strong></a><a class="genanchor" href="#117589"> &para;</a><div class="date" title="2015-07-02 03:28"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117589">
<div class="phpcode"><code><span class="html">When you serialize an object of a class from a particular namespace, the namespace is recorded as part of the serialization. If you decide to change this namespace's name, it can be hard to read in old serialized objects. I.e., suppose you had serialized an object of type foo\A, you change the namespace of your project to goo but otherwise leave the class definition of A unchanged. You would like to be able to unserialize the object as goo\A, instead unserialization will only create a partial object. To fix this in the case where you don't have nested objects in your class definition, you can use the following simple rename function:<br />/**<br /> * Used to change the namespace of a serialized php object (assumes doesn't<br /> * have nested subobjects)<br /> *<br /> * @param string $class_name new fully qualified name with namespace<br /> * @param string $object_string serialized object<br /> *<br /> * @return string serialized object with new name<br /> */<br />function renameSerializedObject($class_name, $object_string)<br />{<br />    /*  number of digits in the length of name of the object needs to be <br />        less than 12 digits (probably more like 4) for this to work.<br />    */<br />    $name_length = intval(substr($object_string, 2, 14));<br />    $name_space_info_length = strlen("O:".$name_length.":") +<br />        $name_length + 2; // 2 for quotes;<br />    $object_string = 'O:' .<br />        strlen($class_name) . ':"'. $class_name.'"' .<br />        substr($object_string, $name_space_info_length);<br />    return $object_string;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="85097">  <div class="votes">
    <div id="Vu85097">
    <a href="/manual/vote-note.php?id=85097&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85097">
    <a href="/manual/vote-note.php?id=85097&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85097" title="57% like this...">
    9
    </div>
  </div>
  <a href="#85097" class="name">
  <strong class="user"><em>chris AT cmbuckley DOT co DOT uk</em></strong></a><a class="genanchor" href="#85097"> &para;</a><div class="date" title="2008-08-14 06:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85097">
<div class="phpcode"><code><span class="html">As mentioned in the notes, unserialize returns false in the event of an error and for boolean false. Here is the first solution mentioned, without using error handling:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">isSerialized</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    return (</span><span class="default">$str </span><span class="keyword">== </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">) || @</span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">);<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">isSerialized</span><span class="keyword">(</span><span class="string">'s:6:"foobar";'</span><span class="keyword">)); </span><span class="comment">// bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">isSerialized</span><span class="keyword">(</span><span class="string">'foobar'</span><span class="keyword">));        </span><span class="comment">// bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">isSerialized</span><span class="keyword">(</span><span class="string">'b:0;'</span><span class="keyword">));          </span><span class="comment">// bool(true)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73585">  <div class="votes">
    <div id="Vu73585">
    <a href="/manual/vote-note.php?id=73585&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73585">
    <a href="/manual/vote-note.php?id=73585&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73585" title="56% like this...">
    4
    </div>
  </div>
  <a href="#73585" class="name">
  <strong class="user"><em>BenBE at omorphia dot de</em></strong></a><a class="genanchor" href="#73585"> &para;</a><div class="date" title="2007-03-02 06:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73585">
<div class="phpcode"><code><span class="html">When trying to serialize or unserialize recursive arrays or otherwise linked data you might find the undocumented R data type quite useful.<br /><br />If you want a array like the one produced with<br />&lt;?<br />$a = array();<br />$a[0] =&amp; $a;<br />?&gt;<br />serialized you can store it using a string simular to this one:<br />&lt;?<br />$a = unserialize("a:1:{i:0;R:1;}");<br />?&gt;<br /><br />Both sources will make $a hold an array that self-references itself in index 0.<br /><br />The argument for R is the index of the created sub-variable of the serialize-string beginning with 1.</span></code></div>
  </div>
 </div>
  <div class="note" id="90120">  <div class="votes">
    <div id="Vu90120">
    <a href="/manual/vote-note.php?id=90120&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90120">
    <a href="/manual/vote-note.php?id=90120&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90120" title="55% like this...">
    2
    </div>
  </div>
  <a href="#90120" class="name">
  <strong class="user"><em>w dot laurencine at teknoa dot net</em></strong></a><a class="genanchor" href="#90120"> &para;</a><div class="date" title="2009-04-07 05:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90120">
<div class="phpcode"><code><span class="html">When dealing with a string which contain "\r", it seems that the length is not evaluated correctly. The following solves the problem for me :<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// remove the \r caracters from the $unserialized string<br /></span><span class="default">$unserialized </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\r"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$unserialized</span><span class="keyword">);<br /><br /></span><span class="comment">// and then unserialize()<br /></span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$unserialized</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104479">  <div class="votes">
    <div id="Vu104479">
    <a href="/manual/vote-note.php?id=104479&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104479">
    <a href="/manual/vote-note.php?id=104479&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104479" title="54% like this...">
    2
    </div>
  </div>
  <a href="#104479" class="name">
  <strong class="user"><em>chris at colourlovers dot com</em></strong></a><a class="genanchor" href="#104479"> &para;</a><div class="date" title="2011-06-16 05:31"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104479">
<div class="phpcode"><code><span class="html">Anyone having trouble serializing data with SimpleXMLElement objects stored within it, check this out:<br /><br />This will traverse $data looking for any children which are instances of SimpleXMLElement, and will run -&gt;asXML() on them, turning them into a string and making them serializable. Other data will be left alone.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">exportNestedSimpleXML</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />    if (</span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />        foreach (</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />            if (</span><span class="default">$v </span><span class="keyword">instanceof </span><span class="default">SimpleXMLElement</span><span class="keyword">) {<br />                </span><span class="default">$v </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"&amp;#13;"</span><span class="keyword">,</span><span class="string">"\r"</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">());<br />            } else {<br />                </span><span class="default">$v </span><span class="keyword">= </span><span class="default">exportNestedSimpleXML</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);<br />            }<br /><br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)) {<br />                </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br />            } else if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)) {<br />                </span><span class="default">$data</span><span class="keyword">-&gt;</span><span class="default">$k </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">;<br />            }<br />        }<br />    }<br /><br />    return </span><span class="default">$data</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$data </span><span class="keyword">= array (<br />    </span><span class="string">"baz" </span><span class="keyword">=&gt; array (<br />        </span><span class="string">"foo" </span><span class="keyword">=&gt; new </span><span class="default">stdClass</span><span class="keyword">(),<br />        </span><span class="string">"int" </span><span class="keyword">=&gt; </span><span class="default">123</span><span class="keyword">,<br />        </span><span class="string">"str" </span><span class="keyword">=&gt; </span><span class="string">"asdf"</span><span class="keyword">,<br />        </span><span class="string">"bar" </span><span class="keyword">=&gt; new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="string">'&lt;?xml version="1.0" encoding="UTF-8"?&gt;&lt;foo&gt;bar&lt;/foo&gt;'</span><span class="keyword">),<br />    )<br />);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="comment">/*array(1) {<br />  ["baz"]=&gt;<br />  array(4) {<br />    ["foo"]=&gt;<br />    object(stdClass)#3 (0) {<br />    }<br />    ["int"]=&gt;<br />    int(123)<br />    ["str"]=&gt;<br />    string(4) "asdf"<br />    ["bar"]=&gt;<br />    object(SimpleXMLElement)#4 (1) {<br />      [0]=&gt;<br />      string(3) "bar"<br />    }<br />  }<br />}*/<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">exportNestedSimpleXML</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));<br /></span><span class="comment">/*array(1) {<br />  ["baz"]=&gt;<br />  array(4) {<br />    ["foo"]=&gt;<br />    object(stdClass)#3 (0) {<br />    }<br />    ["int"]=&gt;<br />    int(123)<br />    ["str"]=&gt;<br />    string(4) "asdf"<br />    ["bar"]=&gt;<br />    string(54) "&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;foo&gt;bar&lt;/foo&gt;<br />"<br />  }<br />}<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68748">  <div class="votes">
    <div id="Vu68748">
    <a href="/manual/vote-note.php?id=68748&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68748">
    <a href="/manual/vote-note.php?id=68748&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68748" title="54% like this...">
    3
    </div>
  </div>
  <a href="#68748" class="name">
  <strong class="user"><em>Are Pedersen</em></strong></a><a class="genanchor" href="#68748"> &para;</a><div class="date" title="2006-08-09 01:46"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68748">
<div class="phpcode"><code><span class="html">Be aware that if useing serialize/unserialize in a serverfarm with both 32bit and 64bit servers you can get unexpected results.<br /><br />Ex: if you serialize an integer with value of 2147483648 on a 64bit system and then unserialize it on a 32bit system you will get the value -2147483648 instead. This is because an integer on 32bit cannot be above 2147483647 so it wraps.</span></code></div>
  </div>
 </div>
  <div class="note" id="46796">  <div class="votes">
    <div id="Vu46796">
    <a href="/manual/vote-note.php?id=46796&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46796">
    <a href="/manual/vote-note.php?id=46796&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46796" title="54% like this...">
    2
    </div>
  </div>
  <a href="#46796" class="name">
  <strong class="user"><em>Chris Hayes (chris at hypersites dot com)</em></strong></a><a class="genanchor" href="#46796"> &para;</a><div class="date" title="2004-10-23 09:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46796">
<div class="phpcode"><code><span class="html">In reply to the earlier post about having to include object definitions *before* using unserialize.  There is a workaround for this.<br /><br />When an object is serialized, the first bit of the string is actually the name of the class.  When an unknown object is unserialized, this is maintained as a property.  So if you serialize it again, you get back the exact same string as if you'd serialized the original object.  Basically, to cut to the point...<br /><br />If you use<br /><br />$_SESSION['my_object'] = unserialize(serialize($_SESSION['my_object']))<br /><br />then you get back an object of the correct type, even if the session had originally loaded it as an object of type stdClass.</span></code></div>
  </div>
 </div>
  <div class="note" id="119851">  <div class="votes">
    <div id="Vu119851">
    <a href="/manual/vote-note.php?id=119851&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119851">
    <a href="/manual/vote-note.php?id=119851&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119851" title="52% like this...">
    1
    </div>
  </div>
  <a href="#119851" class="name">
  <strong class="user"><em>m.m.j.kronenburg</em></strong></a><a class="genanchor" href="#119851"> &para;</a><div class="date" title="2016-09-06 09:52"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119851">
<div class="phpcode"><code><span class="html">You can use the following code to use the php 7 unserialize function in php 5.3 and upwards. This adds the $option argument.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace<br />{<br /><br /></span><span class="comment">/**<br /> * PHP 7 unserialize function for PHP 5.3 upwards.<br /> * Added the $option argument (allowed_classes).<br /> * See php unserialize manual for more detail.<br /> **/<br /></span><span class="keyword">function </span><span class="default">php7_unserialize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">= array())<br />{<br />  if(</span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">PHP_VERSION</span><span class="keyword">, </span><span class="string">'7.0.0'</span><span class="keyword">, </span><span class="string">'&gt;='</span><span class="keyword">))<br />  { return </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">); }<br /><br />  </span><span class="default">$allowed_classes </span><span class="keyword">= isset(</span><span class="default">$options</span><span class="keyword">[</span><span class="string">'allowed_classes'</span><span class="keyword">]) ? <br />    </span><span class="default">$options</span><span class="keyword">[</span><span class="string">'allowed_classes'</span><span class="keyword">] : </span><span class="default">true</span><span class="keyword">;<br />  if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$allowed_classes</span><span class="keyword">) || !</span><span class="default">$allowed_classes</span><span class="keyword">)<br />  {<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />      </span><span class="string">'/(?=^|:)(O|C):\d+:"([^"]*)":(\d+):{/'</span><span class="keyword">, <br />      function(</span><span class="default">$matches</span><span class="keyword">) use (</span><span class="default">$allowed_classes</span><span class="keyword">)<br />      {<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$allowed_classes</span><span class="keyword">) &amp;&amp; <br />          </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$allowed_classes</span><span class="keyword">))<br />        { return </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; }<br />        else<br />        {<br />          return </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">':22:"__PHP_Incomplete_Class":'</span><span class="keyword">.<br />            (</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">).<br />            </span><span class="string">':{s:27:"__PHP_Incomplete_Class_Name";'</span><span class="keyword">.<br />            </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />        }<br />      },<br />      </span><span class="default">$str<br />    </span><span class="keyword">);<br />  }<br />  unset(</span><span class="default">$allowed_classes</span><span class="keyword">);<br />  return </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />}<br /><br />} </span><span class="comment">// namespace<br /><br /></span><span class="keyword">namespace </span><span class="default">my_name_space<br /></span><span class="keyword">{<br />  </span><span class="comment">/**<br />   * Use the new php7 unserialize in your namespace without<br />   * renaming all unserialize(...) function calls to <br />   * php7_unserialize(...).<br />   **/<br />  </span><span class="keyword">function </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">= array())<br />  { return </span><span class="default">php7_unserialize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">); }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107886">  <div class="votes">
    <div id="Vu107886">
    <a href="/manual/vote-note.php?id=107886&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107886">
    <a href="/manual/vote-note.php?id=107886&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107886" title="51% like this...">
    2
    </div>
  </div>
  <a href="#107886" class="name">
  <strong class="user"><em>suman dot jis at gmail dot com</em></strong></a><a class="genanchor" href="#107886"> &para;</a><div class="date" title="2012-03-13 09:12"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107886">
<div class="phpcode"><code><span class="html">I was getting unserialize()  Error at offset error.<br /><br />If you face similar problem  then use the following procedure<br /><br />$auctionDetails = preg_replace('!s:(\d+):"(.*?)";!se', "'s:'.strlen('$2').':\"$2\";'", $dataArr[$i]['auction_details'] ); <br />$auctionDetails = unserialize($auctionDetails);</span></code></div>
  </div>
 </div>
  <div class="note" id="129854">  <div class="votes">
    <div id="Vu129854">
    <a href="/manual/vote-note.php?id=129854&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129854">
    <a href="/manual/vote-note.php?id=129854&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129854" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129854" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#129854"> &para;</a><div class="date" title="2024-11-13 07:59"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129854">
<div class="phpcode"><code><span class="html">Please note there is a minor difference in how unserializa() works between PHP 7 and 8.<br /><br />Under PHP 8, strings that are not trimmed of whitespace will emit a warning in the likes of:<br /><br />PHP Warning:  unserialize(): Extra data starting at offset 721 of 722 bytes in /tmp/a.php on line 4<br /><br />so something like:<br /><br />$s = 's:3:"bar";'."\n"<br />unserialize($s);    # warning emitted<br />unserialize(trim($s));  # no warning</span></code></div>
  </div>
 </div>
  <div class="note" id="71846">  <div class="votes">
    <div id="Vu71846">
    <a href="/manual/vote-note.php?id=71846&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71846">
    <a href="/manual/vote-note.php?id=71846&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71846" title="52% like this...">
    2
    </div>
  </div>
  <a href="#71846" class="name">
  <strong class="user"><em>double at dumpit dot com</em></strong></a><a class="genanchor" href="#71846"> &para;</a><div class="date" title="2006-12-19 05:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71846">
<div class="phpcode"><code><span class="html">This little function will check whether the serialized string is well formed. <br /><br />PHP &lt; 6 because i'd heard changes will be made in this php-intern function, <br />maybe it could be edited easy for it.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">wd_check_serialization</span><span class="keyword">( </span><span class="default">$string</span><span class="keyword">, &amp;</span><span class="default">$errmsg </span><span class="keyword">) <br />{<br /><br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="string">'s'</span><span class="keyword">;<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="string">'a'</span><span class="keyword">;<br />    </span><span class="default">$integer </span><span class="keyword">= </span><span class="string">'i'</span><span class="keyword">;<br />    </span><span class="default">$any </span><span class="keyword">= </span><span class="string">'[^}]*?'</span><span class="keyword">;<br />    </span><span class="default">$count </span><span class="keyword">= </span><span class="string">'\d+'</span><span class="keyword">;<br />    </span><span class="default">$content </span><span class="keyword">= </span><span class="string">'"(?:\\\";|.)*?";'</span><span class="keyword">;<br />    </span><span class="default">$open_tag </span><span class="keyword">= </span><span class="string">'\{'</span><span class="keyword">;<br />    </span><span class="default">$close_tag </span><span class="keyword">= </span><span class="string">'\}'</span><span class="keyword">;<br />    </span><span class="default">$parameter </span><span class="keyword">= </span><span class="string">"(</span><span class="default">$str</span><span class="string">|</span><span class="default">$array</span><span class="string">|</span><span class="default">$integer</span><span class="string">|</span><span class="default">$any</span><span class="string">):(</span><span class="default">$count</span><span class="string">)" </span><span class="keyword">. </span><span class="string">"(?:[:](</span><span class="default">$open_tag</span><span class="string">|</span><span class="default">$content</span><span class="string">)|[;])"</span><span class="keyword">;            <br />    </span><span class="default">$preg </span><span class="keyword">= </span><span class="string">"/</span><span class="default">$parameter</span><span class="string">|(</span><span class="default">$close_tag</span><span class="string">)/"</span><span class="keyword">;<br />    if( !</span><span class="default">preg_match_all</span><span class="keyword">( </span><span class="default">$preg</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$matches </span><span class="keyword">) ) <br />    {            <br />        </span><span class="default">$errmsg </span><span class="keyword">= </span><span class="string">'not a serialized string'</span><span class="keyword">;<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }    <br />    </span><span class="default">$open_arrays </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] AS </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">)<br />    {<br />        if( !empty( </span><span class="default">$value </span><span class="keyword">) &amp;&amp; ( </span><span class="default">$value </span><span class="keyword">!= </span><span class="default">$array </span><span class="keyword">xor </span><span class="default">$value </span><span class="keyword">!= </span><span class="default">$str </span><span class="keyword">xor </span><span class="default">$value </span><span class="keyword">!= </span><span class="default">$integer </span><span class="keyword">) ) <br />        {<br />            </span><span class="default">$errmsg </span><span class="keyword">= </span><span class="string">'undefined datatype'</span><span class="keyword">;<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        if( </span><span class="default">$value </span><span class="keyword">== </span><span class="default">$array </span><span class="keyword">)<br />        {<br />            </span><span class="default">$open_arrays</span><span class="keyword">++;                                <br />            if( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] != </span><span class="string">'{' </span><span class="keyword">) <br />            {<br />                </span><span class="default">$errmsg </span><span class="keyword">= </span><span class="string">'open tag expected'</span><span class="keyword">;<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />        }<br />        if( </span><span class="default">$value </span><span class="keyword">== </span><span class="string">'' </span><span class="keyword">)<br />        {<br />            if( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] != </span><span class="string">'}' </span><span class="keyword">) <br />            {<br />                </span><span class="default">$errmsg </span><span class="keyword">= </span><span class="string">'close tag expected'</span><span class="keyword">;<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            </span><span class="default">$open_arrays</span><span class="keyword">--;<br />        }<br />        if( </span><span class="default">$value </span><span class="keyword">== </span><span class="default">$str </span><span class="keyword">)<br />        {<br />            </span><span class="default">$aVar </span><span class="keyword">= </span><span class="default">ltrim</span><span class="keyword">( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">], </span><span class="string">'"' </span><span class="keyword">);<br />            </span><span class="default">$aVar </span><span class="keyword">= </span><span class="default">rtrim</span><span class="keyword">( </span><span class="default">$aVar</span><span class="keyword">, </span><span class="string">'";' </span><span class="keyword">);<br />            if( </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$aVar </span><span class="keyword">) != </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] ) <br />            {<br />                </span><span class="default">$errmsg </span><span class="keyword">= </span><span class="string">'stringlen for string not match'</span><span class="keyword">;<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />        }<br />        if( </span><span class="default">$value </span><span class="keyword">== </span><span class="default">$integer </span><span class="keyword">)<br />        {<br />            if( !empty( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] ) ) <br />            {<br />                </span><span class="default">$errmsg </span><span class="keyword">= </span><span class="string">'unexpected data'</span><span class="keyword">;<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            if( !</span><span class="default">is_integer</span><span class="keyword">( (int)</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] ) ) <br />            {<br />                </span><span class="default">$errmsg </span><span class="keyword">= </span><span class="string">'integer expected'</span><span class="keyword">;<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />        }<br />    }        <br />    if( </span><span class="default">$open_arrays </span><span class="keyword">!= </span><span class="default">0 </span><span class="keyword">) <br />    {<br />        </span><span class="default">$errmsg </span><span class="keyword">= </span><span class="string">'wrong setted arrays'</span><span class="keyword">;<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127782">  <div class="votes">
    <div id="Vu127782">
    <a href="/manual/vote-note.php?id=127782&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127782">
    <a href="/manual/vote-note.php?id=127782&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127782" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127782" class="name">
  <strong class="user"><em>OscarZarrus</em></strong></a><a class="genanchor" href="#127782"> &para;</a><div class="date" title="2022-10-20 09:34"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127782">
<div class="phpcode"><code><span class="html">For those who are looking for an efficient solution for handling controversial "FALSE", they can use this function which in case of non-unserializable string, instead of a "FALSE", throws an Exception. Vice versa it returns the unserialized variable.
<br /><span class="default">&lt;?php
<br />    </span><span class="comment">/**
<br />     * @param string $serializedString
<br />     * @param array $options
<br />     * @return mixed
<br />     * @throws Exception
<br />     */
<br />    </span><span class="keyword">function </span><span class="default">UnSerialize</span><span class="keyword">(</span><span class="default">string $serializedString</span><span class="keyword">, array </span><span class="default">$options </span><span class="keyword">= []) {
<br />        </span><span class="default">$_unserialized </span><span class="keyword">= @</span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$serializedString</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);
<br />        if (</span><span class="default">$serializedString </span><span class="keyword">=== </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">) || </span><span class="default">$_unserialized </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">){
<br />            return </span><span class="default">$_unserialized</span><span class="keyword">;
<br />        }
<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Non-unserializable string"</span><span class="keyword">);
<br />
<br />    }
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37008">  <div class="votes">
    <div id="Vu37008">
    <a href="/manual/vote-note.php?id=37008&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37008">
    <a href="/manual/vote-note.php?id=37008&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37008" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#37008" class="name">
  <strong class="user"><em>aderyn at nowhere dot tld</em></strong></a><a class="genanchor" href="#37008"> &para;</a><div class="date" title="2003-10-30 10:02"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37008">
<div class="phpcode"><code><span class="html">A quick note:<br />If you store a serialized object in a session, you have to include the class _before_ you initialize (session_start()) the session.</span></code></div>
  </div>
 </div>
  <div class="note" id="123681">  <div class="votes">
    <div id="Vu123681">
    <a href="/manual/vote-note.php?id=123681&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123681">
    <a href="/manual/vote-note.php?id=123681&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123681" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#123681" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#123681"> &para;</a><div class="date" title="2019-03-11 06:36"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123681">
<div class="phpcode"><code><span class="html">If serialize() is the answer, you're almost certainly asking the wrong question.<br /><br />JSON is widely available. The only thing it does not do, is the very thing that makes serialization immensely dangerous. All it takes is a crafty hacker to pass a crafted payload to a supposedly 'secured' serialize call, for a database driver to be overwritten with malicious code, for example.<br /><br />Recreate the object. Normally. With actual data, and a source file, not with serialize. To do otherwise is laziness bordering on malice.</span></code></div>
  </div>
 </div>
  <div class="note" id="105190">  <div class="votes">
    <div id="Vu105190">
    <a href="/manual/vote-note.php?id=105190&amp;page=function.unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105190">
    <a href="/manual/vote-note.php?id=105190&amp;page=function.unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105190" title="44% like this...">
    -4
    </div>
  </div>
  <a href="#105190" class="name">
  <strong class="user"><em>MBa</em></strong></a><a class="genanchor" href="#105190"> &para;</a><div class="date" title="2011-08-02 03:49"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105190">
<div class="phpcode"><code><span class="html">To check if a string is serialized:<br /><br />$blSerialized=(@unserialize($sText)||$sText=='b:0;');</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.unserialize&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.unserialize.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="current">
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
