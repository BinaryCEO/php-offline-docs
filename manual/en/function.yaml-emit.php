<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: yaml_emit - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.yaml-emit.php">
 <link rel="shorturl" href="https://www.php.net/yaml-emit">
 <link rel="alternate" href="https://www.php.net/yaml-emit" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.yaml.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.yaml.php">
 <link rel="next" href="https://www.php.net/manual/en/function.yaml-emit-file.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.yaml-emit.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.yaml-emit.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.yaml-emit.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.yaml-emit.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.yaml-emit.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.yaml-emit.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.yaml-emit.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.yaml-emit.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.yaml-emit.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.yaml-emit.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.yaml-emit.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the YAML representation of a value" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: yaml_emit - Manual" />
<meta name="twitter:description" content="Returns the YAML representation of a value" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: yaml_emit - Manual" />
<meta itemprop="description" content="Returns the YAML representation of a value" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the YAML representation of a value" />

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
        <a href="function.yaml-emit-file.php">
          yaml_emit_file &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.yaml.php">
          &laquo; Yaml Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.yaml.php'>Yaml</a></li>      <li><a href='ref.yaml.php'>Yaml Functions</a></li>      </ul>
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
            <option value='en/function.yaml-emit.php' selected="selected">English</option>
            <option value='de/function.yaml-emit.php'>German</option>
            <option value='es/function.yaml-emit.php'>Spanish</option>
            <option value='fr/function.yaml-emit.php'>French</option>
            <option value='it/function.yaml-emit.php'>Italian</option>
            <option value='ja/function.yaml-emit.php'>Japanese</option>
            <option value='pt_BR/function.yaml-emit.php'>Brazilian Portuguese</option>
            <option value='ru/function.yaml-emit.php'>Russian</option>
            <option value='tr/function.yaml-emit.php'>Turkish</option>
            <option value='uk/function.yaml-emit.php'>Ukrainian</option>
            <option value='zh/function.yaml-emit.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.yaml-emit" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">yaml_emit</h1>
  <p class="verinfo">(PECL yaml &gt;= 0.5.0)</p><p class="refpurpose"><span class="refname">yaml_emit</span> &mdash; <span class="dc-title">Returns the YAML representation of a value</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.yaml-emit-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>yaml_emit</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$encoding</code><span class="initializer"> = YAML_ANY_ENCODING</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$linebreak</code><span class="initializer"> = YAML_ANY_BREAK</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$callbacks</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Generate a YAML representation of the provided <code class="parameter">data</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.yaml-emit-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">data</code> being encoded. Can be any type except
       a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">encoding</code></dt>
     <dd>
      <p class="para">
       Output character encoding chosen from
       <strong><code><a href="yaml.constants.php#constant.yaml-any-encoding">YAML_ANY_ENCODING</a></code></strong>,
       <strong><code><a href="yaml.constants.php#constant.yaml-utf8-encoding">YAML_UTF8_ENCODING</a></code></strong>,
       <strong><code><a href="yaml.constants.php#constant.yaml-utf16le-encoding">YAML_UTF16LE_ENCODING</a></code></strong>,
       <strong><code><a href="yaml.constants.php#constant.yaml-utf16be-encoding">YAML_UTF16BE_ENCODING</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">linebreak</code></dt>
     <dd>
      <p class="para">
       Output linebreak style chosen from
       <strong><code><a href="yaml.constants.php#constant.yaml-any-break">YAML_ANY_BREAK</a></code></strong>,
       <strong><code><a href="yaml.constants.php#constant.yaml-cr-break">YAML_CR_BREAK</a></code></strong>,
       <strong><code><a href="yaml.constants.php#constant.yaml-ln-break">YAML_LN_BREAK</a></code></strong>,
       <strong><code><a href="yaml.constants.php#constant.yaml-crln-break">YAML_CRLN_BREAK</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">callbacks</code></dt>
     <dd>
      <p class="para">
       Content handlers for emitting YAML nodes. Associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
       of classname =&gt; <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> mappings. See
       <a href="yaml.callbacks.emit.php" class="link">emit callbacks</a> for more
       details.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.yaml-emit-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a YAML encoded <span class="type"><a href="language.types.string.php" class="type string">string</a></span> on success.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.yaml-emit-changelog">
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
       <td>PECL yaml 1.1.0</td>
       <td>
        The <code class="parameter">callbacks</code> parameter was added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.yaml-emit-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4149">
    <p><strong>Example #1 <span class="function"><strong>yaml_emit()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$addr </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">"given" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Chris"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"family"</span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Dumars"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"address"</span><span style="color: #007700">=&gt; array(<br />        </span><span style="color: #DD0000">"lines"</span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"458 Walkman Dr.<br />        Suite #292"</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">"city"</span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Royal Oak"</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">"state"</span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"MI"</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">"postal"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">48046</span><span style="color: #007700">,<br />      ),<br />  );<br /></span><span style="color: #0000BB">$invoice </span><span style="color: #007700">= array (<br />    </span><span style="color: #DD0000">"invoice"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">34843</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"date"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">980208000</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"bill-to"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$addr</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"ship-to"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$addr</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"product"</span><span style="color: #007700">=&gt; array(<br />        array(<br />            </span><span style="color: #DD0000">"sku"</span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"BL394D"</span><span style="color: #007700">,<br />            </span><span style="color: #DD0000">"quantity"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">4</span><span style="color: #007700">,<br />            </span><span style="color: #DD0000">"description"</span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Basketball"</span><span style="color: #007700">,<br />            </span><span style="color: #DD0000">"price"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">450</span><span style="color: #007700">,<br />          ),<br />        array(<br />            </span><span style="color: #DD0000">"sku"</span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"BL4438H"</span><span style="color: #007700">,<br />            </span><span style="color: #DD0000">"quantity"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />            </span><span style="color: #DD0000">"description"</span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Super Hoop"</span><span style="color: #007700">,<br />            </span><span style="color: #DD0000">"price"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2392</span><span style="color: #007700">,<br />          ),<br />      ),<br />    </span><span style="color: #DD0000">"tax"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">251.42</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"total"</span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">4443.52</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"comments"</span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Late afternoon is best. Backup contact is Nancy Billsmer @ 338-4338."</span><span style="color: #007700">,<br />  );<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">yaml_emit</span><span style="color: #007700">(</span><span style="color: #0000BB">$invoice</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">string(628) &quot;---
invoice: 34843
date: 980208000
bill-to:
  given: Chris
  family: Dumars
  address:
    lines: |-
      458 Walkman Dr.
              Suite #292
    city: Royal Oak
    state: MI
    postal: 48046
ship-to:
  given: Chris
  family: Dumars
  address:
    lines: |-
      458 Walkman Dr.
              Suite #292
    city: Royal Oak
    state: MI
    postal: 48046
product:
- sku: BL394D
  quantity: 4
  description: Basketball
  price: 450
- sku: BL4438H
  quantity: 1
  description: Super Hoop
  price: 2392
tax: 251.420000
total: 4443.520000
comments: Late afternoon is best. Backup contact is Nancy Billsmer @ 338-4338.
...
&quot;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.yaml-emit-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.yaml-emit-file.php" class="function" rel="rdfs-seeAlso">yaml_emit_file()</a> - Send the YAML representation of a value to a file</span></li>
    <li><span class="function"><a href="function.yaml-parse.php" class="function" rel="rdfs-seeAlso">yaml_parse()</a> - Parse a YAML stream</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/yaml/functions/yaml-emit.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.yaml-emit%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.yaml-emit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.yaml-emit.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123891">  <div class="votes">
    <div id="Vu123891">
    <a href="/manual/vote-note.php?id=123891&amp;page=function.yaml-emit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123891">
    <a href="/manual/vote-note.php?id=123891&amp;page=function.yaml-emit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123891" title="57% like this...">
    1
    </div>
  </div>
  <a href="#123891" class="name">
  <strong class="user"><em>josh dot sickmate at gmail dot com</em></strong></a><a class="genanchor" href="#123891"> &para;</a><div class="date" title="2019-05-29 05:55"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123891">
<div class="phpcode"><code><span class="html">There isn't an option for indenting depth so it's always two spaces. If you want more than this you can use a simple regex.<br /><br />Converting from two spaces to four:<br /><span class="default">&lt;?php<br />$yaml </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/^(  +)/m'</span><span class="keyword">, </span><span class="string">'$1$1'</span><span class="keyword">, </span><span class="default">$yaml</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Add two more $1 into the replacement for eight spaces.</span></code></div>
  </div>
 </div>
  <div class="note" id="128566">  <div class="votes">
    <div id="Vu128566">
    <a href="/manual/vote-note.php?id=128566&amp;page=function.yaml-emit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128566">
    <a href="/manual/vote-note.php?id=128566&amp;page=function.yaml-emit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128566" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128566" class="name">
  <strong class="user"><em>nsa at succhia dot cz</em></strong></a><a class="genanchor" href="#128566"> &para;</a><div class="date" title="2023-05-23 01:40"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128566">
<div class="phpcode"><code><span class="html">Note that NULL values will be converted to the tilde character "~".<br /><br />This can be somehow counter-intuitive, but that is absolutely legit, and it seems it is a standard recognized by every Yaml parser. So, don't worry about that. Yaml reference:<br /><br /><a href="http://yaml.org/spec/1.2-old/spec.html#id2805071" rel="nofollow" target="_blank">http://yaml.org/spec/1.2-old/spec.html#id2805071</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.yaml-emit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.yaml-emit.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.yaml.php">Yaml Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.yaml-emit.php" title="yaml_&#8203;emit">yaml_&#8203;emit</a>
                        </li>
                                                <li class="">
                            <a href="function.yaml-emit-file.php" title="yaml_&#8203;emit_&#8203;file">yaml_&#8203;emit_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.yaml-parse.php" title="yaml_&#8203;parse">yaml_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.yaml-parse-file.php" title="yaml_&#8203;parse_&#8203;file">yaml_&#8203;parse_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.yaml-parse-url.php" title="yaml_&#8203;parse_&#8203;url">yaml_&#8203;parse_&#8203;url</a>
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
