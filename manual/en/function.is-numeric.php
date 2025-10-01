<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: is_numeric - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.is-numeric.php">
 <link rel="shorturl" href="https://www.php.net/is-numeric">
 <link rel="alternate" href="https://www.php.net/is-numeric" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.is-null.php">
 <link rel="next" href="https://www.php.net/manual/en/function.is-object.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.is-numeric.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.is-numeric.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.is-numeric.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.is-numeric.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.is-numeric.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.is-numeric.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.is-numeric.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.is-numeric.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.is-numeric.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.is-numeric.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.is-numeric.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Finds whether a variable is a number or a numeric string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: is_numeric - Manual" />
<meta name="twitter:description" content="Finds whether a variable is a number or a numeric string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: is_numeric - Manual" />
<meta itemprop="description" content="Finds whether a variable is a number or a numeric string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Finds whether a variable is a number or a numeric string" />

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
        <a href="function.is-object.php">
          is_object &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.is-null.php">
          &laquo; is_null        </a>
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
            <option value='en/function.is-numeric.php' selected="selected">English</option>
            <option value='de/function.is-numeric.php'>German</option>
            <option value='es/function.is-numeric.php'>Spanish</option>
            <option value='fr/function.is-numeric.php'>French</option>
            <option value='it/function.is-numeric.php'>Italian</option>
            <option value='ja/function.is-numeric.php'>Japanese</option>
            <option value='pt_BR/function.is-numeric.php'>Brazilian Portuguese</option>
            <option value='ru/function.is-numeric.php'>Russian</option>
            <option value='tr/function.is-numeric.php'>Turkish</option>
            <option value='uk/function.is-numeric.php'>Ukrainian</option>
            <option value='zh/function.is-numeric.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.is-numeric" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">is_numeric</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">is_numeric</span> &mdash; <span class="dc-title">
   Finds whether a variable is a number or a numeric string
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.is-numeric-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>is_numeric</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Determines if the given variable is a number or a
   <a href="language.types.numeric-strings.php" class="link">numeric string</a>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.is-numeric-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The variable being evaluated.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.is-numeric-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">value</code> is a number or a
   <a href="language.types.numeric-strings.php" class="link">numeric string</a>,
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.is-numeric-changelog">
  <h3 class="title">Changelog</h3>
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
       Numeric strings ending with whitespace (<code class="literal">&quot;42 &quot;</code>) will now
       return <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>. Previously, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned instead.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.is-numeric-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5656">
    <p><strong>Example #1 <span class="function"><strong>is_numeric()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$tests </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">"42"</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">1337</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">0x539</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">02471</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">0b10100111001</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">1337e0</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"0x539"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"02471"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"0b10100111001"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"1337e0"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"not numeric"</span><span style="color: #007700">,<br />    array(),<br />    </span><span style="color: #0000BB">9.1</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">null</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />);<br /><br />foreach (</span><span style="color: #0000BB">$tests </span><span style="color: #007700">as </span><span style="color: #0000BB">$element</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">) . </span><span style="color: #DD0000">" is numeric"</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    } else {<br />        echo </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">) . </span><span style="color: #DD0000">" is NOT numeric"</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&#039;42&#039; is numeric
1337 is numeric
1337 is numeric
1337 is numeric
1337 is numeric
1337.0 is numeric
&#039;0x539&#039; is NOT numeric
&#039;02471&#039; is numeric
&#039;0b10100111001&#039; is NOT numeric
&#039;1337e0&#039; is numeric
&#039;not numeric&#039; is NOT numeric
array (
) is NOT numeric
9.1 is numeric
NULL is NOT numeric
&#039;&#039; is NOT numeric</pre>
</div>
    </div>
   </div>
  </p>

  <p class="para">
   <div class="example" id="example-5657">
    <p><strong>Example #2 <span class="function"><strong>is_numeric()</strong></span> with whitespace</strong></p>
    <div class="example-contents">
     <div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$tests </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">" 42"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"42 "</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"\u{A0}9001"</span><span style="color: #007700">, </span><span style="color: #FF8000">// non-breaking space<br />    </span><span style="color: #DD0000">"9001\u{A0}"</span><span style="color: #007700">, </span><span style="color: #FF8000">// non-breaking space<br /></span><span style="color: #007700">];<br /><br />foreach (</span><span style="color: #0000BB">$tests </span><span style="color: #007700">as </span><span style="color: #0000BB">$element</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">) . </span><span style="color: #DD0000">" is numeric"</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    } else {<br />        echo </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">) . </span><span style="color: #DD0000">" is NOT numeric"</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>Output of the above example in PHP 8:</p></div>
    <div class="example-contents screen">
     <div class="annotation-interactive examplescode"><pre class="examplescode">&#039; 42&#039; is numeric
&#039;42 &#039; is numeric
&#039; 9001&#039; is NOT numeric
&#039;9001 &#039; is NOT numeric</pre>
</div>
    </div>
    <div class="example-contents"><p>Output of the above example in PHP 7:</p></div>
    <div class="example-contents screen">
     <div class="annotation-interactive examplescode"><pre class="examplescode">&#039; 42&#039; is numeric
&#039;42 &#039; is NOT numeric
&#039; 9001&#039; is NOT numeric
&#039;9001 &#039; is NOT numeric</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.is-numeric-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="language.types.numeric-strings.php" class="link">Numeric strings</a></li>
    <li><span class="function"><a href="function.ctype-digit.php" class="function" rel="rdfs-seeAlso">ctype_digit()</a> - Check for numeric character(s)</span></li>
    <li><span class="function"><a href="function.is-bool.php" class="function" rel="rdfs-seeAlso">is_bool()</a> - Finds out whether a variable is a boolean</span></li>
    <li><span class="function"><a href="function.is-null.php" class="function" rel="rdfs-seeAlso">is_null()</a> - Finds whether a variable is null</span></li>
    <li><span class="function"><a href="function.is-float.php" class="function" rel="rdfs-seeAlso">is_float()</a> - Finds whether the type of a variable is float</span></li>
    <li><span class="function"><a href="function.is-int.php" class="function" rel="rdfs-seeAlso">is_int()</a> - Find whether the type of a variable is integer</span></li>
    <li><span class="function"><a href="function.is-string.php" class="function" rel="rdfs-seeAlso">is_string()</a> - Find whether the type of a variable is string</span></li>
    <li><span class="function"><a href="function.is-object.php" class="function" rel="rdfs-seeAlso">is_object()</a> - Finds whether a variable is an object</span></li>
    <li><span class="function"><a href="function.is-array.php" class="function" rel="rdfs-seeAlso">is_array()</a> - Finds whether a variable is an array</span></li>
    <li><span class="function"><a href="function.filter-var.php" class="function" rel="rdfs-seeAlso">filter_var()</a> - Filters a variable with a specified filter</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/is-numeric.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.is-numeric%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.is-numeric&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-numeric.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102011">  <div class="votes">
    <div id="Vu102011">
    <a href="/manual/vote-note.php?id=102011&amp;page=function.is-numeric&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102011">
    <a href="/manual/vote-note.php?id=102011&amp;page=function.is-numeric&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102011" title="71% like this...">
    95
    </div>
  </div>
  <a href="#102011" class="name">
  <strong class="user"><em>sobolanx at gmail dot com</em></strong></a><a class="genanchor" href="#102011"> &para;</a><div class="date" title="2011-01-22 03:55"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102011">
<div class="phpcode"><code><span class="html">Note that the function accepts extremely big numbers and correctly evaluates them.<br /><br />For example:<br /><br /><span class="default">&lt;?php<br />    $v </span><span class="keyword">= </span><span class="default">is_numeric </span><span class="keyword">(</span><span class="string">'58635272821786587286382824657568871098287278276543219876543'</span><span class="keyword">) ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">;<br />    <br />    </span><span class="default">var_dump </span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The above script will output:<br /><br />bool(true)<br /><br />So this function is not intimidated by super-big numbers. I hope this helps someone.<br /><br />PS: Also note that if you write is_numeric (45thg), this will generate a parse error (since the parameter is not enclosed between apostrophes or double quotes). Keep this in mind when you use this function.</span></code></div>
  </div>
 </div>
  <div class="note" id="120584">  <div class="votes">
    <div id="Vu120584">
    <a href="/manual/vote-note.php?id=120584&amp;page=function.is-numeric&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120584">
    <a href="/manual/vote-note.php?id=120584&amp;page=function.is-numeric&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120584" title="73% like this...">
    42
    </div>
  </div>
  <a href="#120584" class="name">
  <strong class="user"><em>tanguy_barsik at hotmail dot com</em></strong></a><a class="genanchor" href="#120584"> &para;</a><div class="date" title="2017-02-03 03:22"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120584">
<div class="phpcode"><code><span class="html">for strings, it return true only if float number has a dot<br /><br />is_numeric( '42.1' )//true<br />is_numeric( '42,1' )//false</span></code></div>
  </div>
 </div>
  <div class="note" id="69053">  <div class="votes">
    <div id="Vu69053">
    <a href="/manual/vote-note.php?id=69053&amp;page=function.is-numeric&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69053">
    <a href="/manual/vote-note.php?id=69053&amp;page=function.is-numeric&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69053" title="62% like this...">
    12
    </div>
  </div>
  <a href="#69053" class="name">
  <strong class="user"><em>moskalyuk at gmail dot com</em></strong></a><a class="genanchor" href="#69053"> &para;</a><div class="date" title="2006-08-21 10:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69053">
<div class="phpcode"><code><span class="html">is_numeric fails on the hex values greater than LONG_MAX, so having a large hex value parsed through is_numeric would result in FALSE being returned even though the value is a valid hex number</span></code></div>
  </div>
 </div>
  <div class="note" id="114061">  <div class="votes">
    <div id="Vu114061">
    <a href="/manual/vote-note.php?id=114061&amp;page=function.is-numeric&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114061">
    <a href="/manual/vote-note.php?id=114061&amp;page=function.is-numeric&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114061" title="60% like this...">
    12
    </div>
  </div>
  <a href="#114061" class="name">
  <strong class="user"><em>ben at chico dot com</em></strong></a><a class="genanchor" href="#114061"> &para;</a><div class="date" title="2014-01-07 11:20"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114061">
<div class="phpcode"><code><span class="html">Apparently NAN (Not A Number) is a number for the sake of is_numeric(). <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">echo </span><span class="string">"is "</span><span class="keyword">; <br />if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">NAN</span><span class="keyword">)) <br /> echo </span><span class="string">"not "</span><span class="keyword">; <br /> echo </span><span class="string">"a number"</span><span class="keyword">; <br /></span><span class="default">?&gt;</span> <br /><br />Outputs "is a number". So something that is NOT a number (by defintion) is a number...</span></code></div>
  </div>
 </div>
  <div class="note" id="88041">  <div class="votes">
    <div id="Vu88041">
    <a href="/manual/vote-note.php?id=88041&amp;page=function.is-numeric&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88041">
    <a href="/manual/vote-note.php?id=88041&amp;page=function.is-numeric&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88041" title="60% like this...">
    5
    </div>
  </div>
  <a href="#88041" class="name">
  <strong class="user"><em>Magnus Deininger, dma05 at web dot de</em></strong></a><a class="genanchor" href="#88041"> &para;</a><div class="date" title="2009-01-07 06:01"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88041">
<div class="phpcode"><code><span class="html">regarding the global vs. american numeral notations, it should be noted that at least in japanese, numbers aren't grouped with an extra symbol every three digits, but rather every four digits (for example 1,0000 instead of 10.000). also nadim's regexen are slightly suboptimal at one point having an unescaped '.' operator, and the whole thing could easily be combined into a single regex (speed and all).
<br />
<br />adjustments:
<br />
<br /><span class="default">&lt;?php
<br />$eng_or_world </span><span class="keyword">= </span><span class="default">preg_match
<br />  </span><span class="keyword">(</span><span class="string">'/^[+-]?'</span><span class="keyword">. </span><span class="comment">// start marker and sign prefix
<br />  </span><span class="string">'(((([0-9]+)|([0-9]{1,4}(,[0-9]{3,4})+)))?(\\.[0-9])?([0-9]*)|'</span><span class="keyword">. </span><span class="comment">// american
<br />  </span><span class="string">'((([0-9]+)|([0-9]{1,4}(\\.[0-9]{3,4})+)))?(,[0-9])?([0-9]*))'</span><span class="keyword">. </span><span class="comment">// world
<br />  </span><span class="string">'(e[0-9]+)?'</span><span class="keyword">. </span><span class="comment">// exponent
<br />  </span><span class="string">'$/'</span><span class="keyword">, </span><span class="comment">// end marker
<br />  </span><span class="default">$str</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />i'm sure this still isn't optimal, but it should also cover japanese-style numerals and it fixed a couple of other issues with the other regexen. it also allows for an exponent suffix, the pre-decimal digits are optional and it enforces using either grouped or ungrouped integer parts. should be easier to trim to your liking too.</span></code></div>
  </div>
 </div>
  <div class="note" id="37717">  <div class="votes">
    <div id="Vu37717">
    <a href="/manual/vote-note.php?id=37717&amp;page=function.is-numeric&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37717">
    <a href="/manual/vote-note.php?id=37717&amp;page=function.is-numeric&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37717" title="59% like this...">
    6
    </div>
  </div>
  <a href="#37717" class="name">
  <strong class="user"><em>kouber at saparev dot com</em></strong></a><a class="genanchor" href="#37717"> &para;</a><div class="date" title="2003-11-24 03:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37717">
<div class="phpcode"><code><span class="html">Note that this function is not appropriate to check if "is_numeric" for very long strings. In fact, everything passed to this function is converted to long and then to a double. Anything greater than approximately 1.8e308 is too large for a double, so it becomes infinity, i.e. FALSE. What that means is that, for each string with more than 308 characters, is_numeric() will return FALSE, even if all chars are digits.<br /><br />However, this behaviour is platform-specific.<br /><br /><a href="http://www.php.net/manual/en/language.types.float.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/language.types.float.php</a><br /><br />In such a case, it is suitable to use regular expressions:<br /><br />function is_numeric_big($s=0) {<br />  return preg_match('/^-?\d+$/', $s);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="130445">  <div class="votes">
    <div id="Vu130445">
    <a href="/manual/vote-note.php?id=130445&amp;page=function.is-numeric&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130445">
    <a href="/manual/vote-note.php?id=130445&amp;page=function.is-numeric&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130445" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130445" class="name">
  <strong class="user"><em>makogon-vs at yandex dot ru</em></strong></a><a class="genanchor" href="#130445"> &para;</a><div class="date" title="2025-08-14 12:03"><strong>1 month ago</strong></div>
  <div class="text" id="Hcom130445">
<div class="phpcode"><code><span class="html">These functions are designed for precise number type validation:<br /><br />isInteger checks if a value is an integer (including string representations of integers).<br /><br />isFloat verifies if a value is a floating-point number (including string representations of decimals).<br /><br />They handle all number formats (positive, negative, leading zeros, dots at start/end) while rejecting non-numeric values (booleans, arrays, null).<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">isInteger</span><span class="keyword">(</span><span class="default">mixed $val</span><span class="keyword">): </span><span class="default">bool<br />    </span><span class="keyword">{<br />        if (!</span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) || </span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        if (</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br /><br />        if (</span><span class="default">isFloat</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        return </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'~^((?:\+|-)?[0-9]+)$~'</span><span class="keyword">, (string) </span><span class="default">$val</span><span class="keyword">) === </span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">isFloat</span><span class="keyword">(</span><span class="default">mixed $val</span><span class="keyword">): </span><span class="default">bool<br />    </span><span class="keyword">{<br />        if (!</span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) || </span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        if (</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) === </span><span class="string">"double"</span><span class="keyword">) {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br /><br />        if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        return </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^[+-]?(\d*\.\d+|\d+\.\d*)$/'</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) === </span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$testValues </span><span class="keyword">= [<br />        </span><span class="comment">// Integers<br />        </span><span class="default">42</span><span class="keyword">,                      </span><span class="comment">// integer<br />        </span><span class="string">'42'</span><span class="keyword">,                    </span><span class="comment">// string integer<br />        </span><span class="string">'+42'</span><span class="keyword">,                   </span><span class="comment">// string with plus<br />        </span><span class="string">'-42'</span><span class="keyword">,                   </span><span class="comment">// string with minus<br />        </span><span class="string">'0042'</span><span class="keyword">,                  </span><span class="comment">// leading zeros<br />        </span><span class="string">'000'</span><span class="keyword">,                   </span><span class="comment">// zeros<br />        </span><span class="default">PHP_INT_MAX</span><span class="keyword">,             </span><span class="comment">// maximum int<br />        </span><span class="keyword">(string) </span><span class="default">PHP_INT_MAX</span><span class="keyword">,    </span><span class="comment">// maximum int as string<br /><br />        // Floating point numbers<br />        </span><span class="default">3.14</span><span class="keyword">,                    </span><span class="comment">// float<br />        </span><span class="string">'3.14'</span><span class="keyword">,                  </span><span class="comment">// string float<br />        </span><span class="string">'.5'</span><span class="keyword">,                    </span><span class="comment">// without integer part<br />        </span><span class="string">'5.'</span><span class="keyword">,                    </span><span class="comment">// without fractional part<br />        </span><span class="string">'0.5'</span><span class="keyword">,                   </span><span class="comment">// with zero integer part<br />        </span><span class="string">'5.0'</span><span class="keyword">,                   </span><span class="comment">// with zero fractional part<br />        </span><span class="string">'+3.14'</span><span class="keyword">,                 </span><span class="comment">// with plus<br />        </span><span class="string">'-3.14'</span><span class="keyword">,                 </span><span class="comment">// with minus<br />        </span><span class="string">'0.0'</span><span class="keyword">,                   </span><span class="comment">// zero float<br />        </span><span class="string">'00.5'</span><span class="keyword">,                  </span><span class="comment">// leading zeros in integer part<br />        </span><span class="string">'5.00'</span><span class="keyword">,                  </span><span class="comment">// leading zeros in fractional part<br />        </span><span class="string">'-.5'</span><span class="keyword">,                   </span><span class="comment">// negative without integer part<br />        </span><span class="string">'-5.'</span><span class="keyword">,                   </span><span class="comment">// negative without fractional part<br /><br />        // Non-numbers<br />        </span><span class="default">null</span><span class="keyword">,                    </span><span class="comment">// null<br />        </span><span class="keyword">[],                      </span><span class="comment">// array<br />        </span><span class="default">true</span><span class="keyword">,                    </span><span class="comment">// boolean true<br />        </span><span class="default">false</span><span class="keyword">,                   </span><span class="comment">// boolean false<br />        </span><span class="string">'string'</span><span class="keyword">,                </span><span class="comment">// regular string<br />        </span><span class="string">'123abc'</span><span class="keyword">,                </span><span class="comment">// number with letters<br />        </span><span class="string">'12.3.4'</span><span class="keyword">,                </span><span class="comment">// multiple dots<br />        </span><span class="string">'++12'</span><span class="keyword">,                  </span><span class="comment">// double plus<br />        </span><span class="string">'--12'</span><span class="keyword">,                  </span><span class="comment">// double minus<br />        </span><span class="string">'12 '</span><span class="keyword">,                   </span><span class="comment">// trailing space<br />        </span><span class="string">' 12'</span><span class="keyword">,                   </span><span class="comment">// leading space<br />        </span><span class="string">''</span><span class="keyword">,                      </span><span class="comment">// empty string<br />        </span><span class="string">'1e5'</span><span class="keyword">,                   </span><span class="comment">// exponential notation<br />        </span><span class="default">1e5</span><span class="keyword">,                     </span><span class="comment">// float in exponential form<br />    </span><span class="keyword">];<br /><br />    foreach (</span><span class="default">$testValues </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$display </span><span class="keyword">= match (</span><span class="default">true</span><span class="keyword">) {<br />            </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) =&gt; </span><span class="string">'null'</span><span class="keyword">,<br />            </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) =&gt; </span><span class="string">'[]'</span><span class="keyword">,<br />            </span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) =&gt; </span><span class="default">$value </span><span class="keyword">? </span><span class="string">'true' </span><span class="keyword">: </span><span class="string">'false'</span><span class="keyword">,<br />            default =&gt; </span><span class="default">$value<br />        </span><span class="keyword">};<br /><br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />        echo </span><span class="string">"</span><span class="default">$display</span><span class="string">: </span><span class="default">$type</span><span class="string">"</span><span class="keyword">;<br />        echo </span><span class="string">" | isInteger: " </span><span class="keyword">. (</span><span class="default">isInteger</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ? </span><span class="string">'yes' </span><span class="keyword">: </span><span class="string">'no'</span><span class="keyword">);<br />        echo </span><span class="string">" | isFloat: " </span><span class="keyword">. (</span><span class="default">isFloat</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ? </span><span class="string">'yes' </span><span class="keyword">: </span><span class="string">'no'</span><span class="keyword">);<br />        echo </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127989">  <div class="votes">
    <div id="Vu127989">
    <a href="/manual/vote-note.php?id=127989&amp;page=function.is-numeric&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127989">
    <a href="/manual/vote-note.php?id=127989&amp;page=function.is-numeric&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127989" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#127989" class="name">
  <strong class="user"><em>Katrina Kizenbach</em></strong></a><a class="genanchor" href="#127989"> &para;</a><div class="date" title="2022-12-07 08:44"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127989">
<div class="phpcode"><code><span class="html">Note that is_numeric() will evaluate to false for number strings using decimal commas.<br /><br />is_numeric('0.11');<br />Output: true<br /><br />is_numeric('0,11');<br />Output: false</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.is-numeric&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-numeric.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
