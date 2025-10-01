<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: yaml_parse - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.yaml-parse.php">
 <link rel="shorturl" href="https://www.php.net/yaml-parse">
 <link rel="alternate" href="https://www.php.net/yaml-parse" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.yaml.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.yaml-emit-file.php">
 <link rel="next" href="https://www.php.net/manual/en/function.yaml-parse-file.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.yaml-parse.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.yaml-parse.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.yaml-parse.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.yaml-parse.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.yaml-parse.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.yaml-parse.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.yaml-parse.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.yaml-parse.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.yaml-parse.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.yaml-parse.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.yaml-parse.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parse a YAML stream" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: yaml_parse - Manual" />
<meta name="twitter:description" content="Parse a YAML stream" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: yaml_parse - Manual" />
<meta itemprop="description" content="Parse a YAML stream" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parse a YAML stream" />

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
        <a href="function.yaml-parse-file.php">
          yaml_parse_file &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.yaml-emit-file.php">
          &laquo; yaml_emit_file        </a>
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
            <option value='en/function.yaml-parse.php' selected="selected">English</option>
            <option value='de/function.yaml-parse.php'>German</option>
            <option value='es/function.yaml-parse.php'>Spanish</option>
            <option value='fr/function.yaml-parse.php'>French</option>
            <option value='it/function.yaml-parse.php'>Italian</option>
            <option value='ja/function.yaml-parse.php'>Japanese</option>
            <option value='pt_BR/function.yaml-parse.php'>Brazilian Portuguese</option>
            <option value='ru/function.yaml-parse.php'>Russian</option>
            <option value='tr/function.yaml-parse.php'>Turkish</option>
            <option value='uk/function.yaml-parse.php'>Ukrainian</option>
            <option value='zh/function.yaml-parse.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.yaml-parse" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">yaml_parse</h1>
  <p class="verinfo">(PECL yaml &gt;= 0.4.0)</p><p class="refpurpose"><span class="refname">yaml_parse</span> &mdash; <span class="dc-title">Parse a YAML stream</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.yaml-parse-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>yaml_parse</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$input</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$pos</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$ndocs</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$callbacks</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   Convert all or part of a YAML document stream to a PHP variable.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.yaml-parse-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">input</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> to parse as a YAML document stream.
      </p>
     </dd>
    
    
     <dt><code class="parameter">pos</code></dt>
     <dd>
      <p class="para">
       Document to extract from stream (<code class="literal">-1</code> for all
       documents, <code class="literal">0</code> for first document, ...).
      </p>
     </dd>
    
    
     <dt><code class="parameter">ndocs</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">ndocs</code> is provided, then it is filled with the
       number of documents found in stream.
      </p>
     </dd>
    
    
     <dt><code class="parameter">callbacks</code></dt>
     <dd>
      <p class="para">
       Content handlers for YAML nodes. Associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of YAML
       tag =&gt; <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> mappings. See
       <a href="yaml.callbacks.parse.php" class="link">parse callbacks</a> for more
       details.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.yaml-parse-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the value encoded in <code class="parameter">input</code> in appropriate
   PHP type or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure. If <code class="parameter">pos</code> is <code class="literal">-1</code> an
   <span class="type"><a href="language.types.array.php" class="type array">array</a></span> will be returned with one entry for each document found
   in the stream.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.yaml-parse-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4150">
    <p><strong>Example #1 <span class="function"><strong>yaml_parse()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$yaml </span><span style="color: #007700">= &lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">---<br />invoice: 34843<br />date: "2001-01-23"<br />bill-to: &amp;id001<br />  given: Chris<br />  family: Dumars<br />  address:<br />    lines: |-<br />      458 Walkman Dr.<br />              Suite #292<br />    city: Royal Oak<br />    state: MI<br />    postal: 48046<br />ship-to: *id001<br />product:<br />- sku: BL394D<br />  quantity: 4<br />  description: Basketball<br />  price: 450<br />- sku: BL4438H<br />  quantity: 1<br />  description: Super Hoop<br />  price: 2392<br />tax: 251.420000<br />total: 4443.520000<br />comments: Late afternoon is best. Backup contact is Nancy Billsmer @ 338-4338.<br />...<br /></span><span style="color: #007700">EOD;<br /><br /></span><span style="color: #0000BB">$parsed </span><span style="color: #007700">= </span><span style="color: #0000BB">yaml_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$yaml</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$parsed</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(8) {
  [&quot;invoice&quot;]=&gt;
  int(34843)
  [&quot;date&quot;]=&gt;
  string(10) &quot;2001-01-23&quot;
  [&quot;bill-to&quot;]=&gt;
  &amp;array(3) {
    [&quot;given&quot;]=&gt;
    string(5) &quot;Chris&quot;
    [&quot;family&quot;]=&gt;
    string(6) &quot;Dumars&quot;
    [&quot;address&quot;]=&gt;
    array(4) {
      [&quot;lines&quot;]=&gt;
      string(34) &quot;458 Walkman Dr.
        Suite #292&quot;
      [&quot;city&quot;]=&gt;
      string(9) &quot;Royal Oak&quot;
      [&quot;state&quot;]=&gt;
      string(2) &quot;MI&quot;
      [&quot;postal&quot;]=&gt;
      int(48046)
    }
  }
  [&quot;ship-to&quot;]=&gt;
  &amp;array(3) {
    [&quot;given&quot;]=&gt;
    string(5) &quot;Chris&quot;
    [&quot;family&quot;]=&gt;
    string(6) &quot;Dumars&quot;
    [&quot;address&quot;]=&gt;
    array(4) {
      [&quot;lines&quot;]=&gt;
      string(34) &quot;458 Walkman Dr.
        Suite #292&quot;
      [&quot;city&quot;]=&gt;
      string(9) &quot;Royal Oak&quot;
      [&quot;state&quot;]=&gt;
      string(2) &quot;MI&quot;
      [&quot;postal&quot;]=&gt;
      int(48046)
    }
  }
  [&quot;product&quot;]=&gt;
  array(2) {
    [0]=&gt;
    array(4) {
      [&quot;sku&quot;]=&gt;
      string(6) &quot;BL394D&quot;
      [&quot;quantity&quot;]=&gt;
      int(4)
      [&quot;description&quot;]=&gt;
      string(10) &quot;Basketball&quot;
      [&quot;price&quot;]=&gt;
      int(450)
    }
    [1]=&gt;
    array(4) {
      [&quot;sku&quot;]=&gt;
      string(7) &quot;BL4438H&quot;
      [&quot;quantity&quot;]=&gt;
      int(1)
      [&quot;description&quot;]=&gt;
      string(10) &quot;Super Hoop&quot;
      [&quot;price&quot;]=&gt;
      int(2392)
    }
  }
  [&quot;tax&quot;]=&gt;
  float(251.42)
  [&quot;total&quot;]=&gt;
  float(4443.52)
  [&quot;comments&quot;]=&gt;
  string(68) &quot;Late afternoon is best. Backup contact is Nancy Billsmer @ 338-4338.&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.yaml-parse-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Processing untrusted user input with <span class="function"><strong>yaml_parse()</strong></span>
    is dangerous if the use of <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span> is enabled for
    nodes using the <code class="literal">!php/object</code> tag. This behavior can be
    disabled by using the <code class="literal">yaml.decode_php</code> ini setting.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.yaml-parse-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.yaml-parse-file.php" class="function" rel="rdfs-seeAlso">yaml_parse_file()</a> - Parse a YAML stream from a file</span></li>
    <li><span class="function"><a href="function.yaml-parse-url.php" class="function" rel="rdfs-seeAlso">yaml_parse_url()</a> - Parse a Yaml stream from a URL</span></li>
    <li><span class="function"><a href="function.yaml-emit.php" class="function" rel="rdfs-seeAlso">yaml_emit()</a> - Returns the YAML representation of a value</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/yaml/functions/yaml-parse.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.yaml-parse%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.yaml-parse&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.yaml-parse.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123584">  <div class="votes">
    <div id="Vu123584">
    <a href="/manual/vote-note.php?id=123584&amp;page=function.yaml-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123584">
    <a href="/manual/vote-note.php?id=123584&amp;page=function.yaml-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123584" title="87% like this...">
    6
    </div>
  </div>
  <a href="#123584" class="name">
  <strong class="user"><em>Zalmoksis</em></strong></a><a class="genanchor" href="#123584"> &para;</a><div class="date" title="2019-02-06 01:15"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123584">
<div class="phpcode"><code><span class="html">It seams the YAML standard version here is the 1.1 and not the (1.2 released in 2009), so all of the following values: y, Y, yes, Yes, YES, n, N, no, No, NO, true, True, TRUE, false, False, FALSE, on, On, ON, off, Off, OFF are confusingly at times interpreted as booleans.</span></code></div>
  </div>
 </div>
  <div class="note" id="107155">  <div class="votes">
    <div id="Vu107155">
    <a href="/manual/vote-note.php?id=107155&amp;page=function.yaml-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107155">
    <a href="/manual/vote-note.php?id=107155&amp;page=function.yaml-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107155" title="75% like this...">
    6
    </div>
  </div>
  <a href="#107155" class="name">
  <strong class="user"><em>alpacagm at gmail dot com</em></strong></a><a class="genanchor" href="#107155"> &para;</a><div class="date" title="2012-01-11 04:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107155">
<div class="phpcode"><code><span class="html">Simple usage example of interpreting custom tags:<br /><span class="default">&lt;?php<br />$data</span><span class="keyword">=<br /></span><span class="string">"#yaml<br />---<br />data: !mytag bar test<br />...<br />"</span><span class="keyword">;<br /><br />function </span><span class="default">callback</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">){<br />  return </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'bar'</span><span class="keyword">,</span><span class="string">'baz'</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">);<br />}<br /></span><span class="default">$cnt</span><span class="keyword">;<br /></span><span class="default">$array</span><span class="keyword">=</span><span class="default">yaml_parse</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$cnt</span><span class="keyword">,array(</span><span class="string">'!mytag'</span><span class="keyword">=&gt;</span><span class="string">'callback'</span><span class="keyword">));<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="string">'data'</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span>output:<br />Array<br />(<br />   [data] =&gt; baz test<br />)<br />note, there is a related bug in version 1.0.1 (see tracker)</span></code></div>
  </div>
 </div>
  <div class="note" id="120101">  <div class="votes">
    <div id="Vu120101">
    <a href="/manual/vote-note.php?id=120101&amp;page=function.yaml-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120101">
    <a href="/manual/vote-note.php?id=120101&amp;page=function.yaml-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120101" title="66% like this...">
    1
    </div>
  </div>
  <a href="#120101" class="name">
  <strong class="user"><em>laura dot dean at mooneleaf dot com</em></strong></a><a class="genanchor" href="#120101"> &para;</a><div class="date" title="2016-10-30 02:19"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120101">
<div class="phpcode"><code><span class="html">When entering the string through a form, I had to first use utf8_decode on the input before using yaml_parse or else I got a cryptic error message --<br /><br />Warning: yaml_parse(): reading error encountered during parsing: control characters are not allowed (line 1, column 1)<br /><br />-- even though the special character was buried deep in the file.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.yaml-parse&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.yaml-parse.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.yaml.php">Yaml Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.yaml-emit.php" title="yaml_&#8203;emit">yaml_&#8203;emit</a>
                        </li>
                                                <li class="">
                            <a href="function.yaml-emit-file.php" title="yaml_&#8203;emit_&#8203;file">yaml_&#8203;emit_&#8203;file</a>
                        </li>
                                                <li class="current">
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
