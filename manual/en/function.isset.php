<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: isset - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.isset.php">
 <link rel="shorturl" href="https://www.php.net/isset">
 <link rel="alternate" href="https://www.php.net/isset" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.is-string.php">
 <link rel="next" href="https://www.php.net/manual/en/function.print-r.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.isset.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.isset.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.isset.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.isset.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.isset.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.isset.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.isset.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.isset.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.isset.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.isset.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.isset.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Determine if a variable is declared and is different than null" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: isset - Manual" />
<meta name="twitter:description" content="Determine if a variable is declared and is different than null" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: isset - Manual" />
<meta itemprop="description" content="Determine if a variable is declared and is different than null" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Determine if a variable is declared and is different than null" />

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
        <a href="function.print-r.php">
          print_r &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.is-string.php">
          &laquo; is_string        </a>
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
            <option value='en/function.isset.php' selected="selected">English</option>
            <option value='de/function.isset.php'>German</option>
            <option value='es/function.isset.php'>Spanish</option>
            <option value='fr/function.isset.php'>French</option>
            <option value='it/function.isset.php'>Italian</option>
            <option value='ja/function.isset.php'>Japanese</option>
            <option value='pt_BR/function.isset.php'>Brazilian Portuguese</option>
            <option value='ru/function.isset.php'>Russian</option>
            <option value='tr/function.isset.php'>Turkish</option>
            <option value='uk/function.isset.php'>Ukrainian</option>
            <option value='zh/function.isset.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.isset" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">isset</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">isset</span> &mdash; <span class="dc-title">Determine if a variable is declared and is different than <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.isset-description">
 <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>isset</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$vars</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Determine if a variable is considered set,
   this means if a variable is declared and is different than <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
  </p>
  <p class="para">
   If a variable has been unset with the <span class="function"><a href="function.unset.php" class="function">unset()</a></span>
   function, it is no longer considered to be set.
  </p>
  <p class="para">
   <span class="function"><strong>isset()</strong></span> will return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> when checking a
   variable that has been assigned to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
   Also note that a null character (<code class="literal">&quot;\0&quot;</code>) is not
   equivalent to the PHP <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> constant.
  </p>
  <p class="para">
   If multiple parameters are supplied then <span class="function"><strong>isset()</strong></span>
   will return <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> only if all of the parameters are considered set.
   Evaluation goes from left to right and stops as soon as an unset
   variable is encountered.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.isset-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">var</code></dt>
     <dd>
      <p class="para">
       The variable to be checked.
      </p>
     </dd>
    
    
     <dt><code class="parameter">vars</code></dt>
     <dd>
      <p class="para">
       Further variables.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.isset-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">var</code> exists and has
   any value other than <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>. <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.isset-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5662">
    <p><strong>Example #1 <span class="function"><strong>isset()</strong></span> Examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$var </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// This will evaluate to TRUE so the text will be printed.<br /></span><span style="color: #007700">if (isset(</span><span style="color: #0000BB">$var</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"This var is set so I will print."</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// In the next examples we'll use var_dump to output<br />// the return value of isset().<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #DD0000">"test"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #DD0000">"anothertest"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">));      </span><span style="color: #FF8000">// TRUE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)); </span><span style="color: #FF8000">// TRUE<br /><br /></span><span style="color: #007700">unset (</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">));     </span><span style="color: #FF8000">// FALSE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">)); </span><span style="color: #FF8000">// FALSE<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">));   </span><span style="color: #FF8000">// FALSE<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   This also work for elements in arrays:
   <div class="example" id="example-5663">
    <p><strong>Example #2 Example of <span class="function"><strong>isset()</strong></span> with array elements</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$a </span><span style="color: #007700">= array (</span><span style="color: #DD0000">'test' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">'hello' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">NULL</span><span style="color: #007700">, </span><span style="color: #DD0000">'pie' </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">'a' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'apple'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'test'</span><span style="color: #007700">]));            </span><span style="color: #FF8000">// TRUE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">]));             </span><span style="color: #FF8000">// FALSE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'hello'</span><span style="color: #007700">]));           </span><span style="color: #FF8000">// FALSE<br /><br />// The key 'hello' equals NULL so is considered unset<br />// If you want to check for NULL key values then try: <br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'hello'</span><span style="color: #007700">, </span><span style="color: #0000BB">$a</span><span style="color: #007700">)); </span><span style="color: #FF8000">// TRUE<br /><br />// Checking deeper array values<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'pie'</span><span style="color: #007700">][</span><span style="color: #DD0000">'a'</span><span style="color: #007700">]));        </span><span style="color: #FF8000">// TRUE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'pie'</span><span style="color: #007700">][</span><span style="color: #DD0000">'b'</span><span style="color: #007700">]));        </span><span style="color: #FF8000">// FALSE<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'cake'</span><span style="color: #007700">][</span><span style="color: #DD0000">'a'</span><span style="color: #007700">][</span><span style="color: #DD0000">'b'</span><span style="color: #007700">]));  </span><span style="color: #FF8000">// FALSE<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <div class="example" id="example-5664">
   <p><strong>Example #3 <span class="function"><strong>isset()</strong></span> on String Offsets</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$expected_array_got_string </span><span style="color: #007700">= </span><span style="color: #DD0000">'somestring'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #DD0000">'some_key'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #DD0000">'0'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #0000BB">0.5</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #DD0000">'0.5'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #DD0000">'0 Mostel'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">bool(false)
bool(true)
bool(true)
bool(true)
bool(false)
bool(false)</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-function.isset-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    <span class="function"><strong>isset()</strong></span> only works with variables as passing anything
    else will result in a parse error.  For checking if 
    <a href="language.constants.php" class="link">constants</a> are set use the 
    <span class="function"><a href="function.defined.php" class="function">defined()</a></span> function.
   </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">Because this is a
language construct and not a function, it cannot be called using
<a href="functions.variable-functions.php" class="link">variable functions</a>,
or <a href="functions.arguments.php#functions.named-arguments" class="link">named arguments</a>.</span>
</p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When using <span class="function"><strong>isset()</strong></span> on inaccessible object properties,
    the <a href="language.oop5.overloading.php#object.isset" class="link">__isset()</a>
    overloading method will be called, if declared.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.isset-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.empty.php" class="function" rel="rdfs-seeAlso">empty()</a> - Determine whether a variable is empty</span></li>
    <li><a href="language.oop5.overloading.php#object.isset" class="link">__isset()</a></li>
    <li><span class="function"><a href="function.unset.php" class="function" rel="rdfs-seeAlso">unset()</a> - unset a given variable</span></li>
    <li><span class="function"><a href="function.defined.php" class="function" rel="rdfs-seeAlso">defined()</a> - Checks whether a constant with the given name exists</span></li>
    <li><a href="types.comparisons.php" class="link">the type comparison tables</a></li>
    <li><span class="function"><a href="function.array-key-exists.php" class="function" rel="rdfs-seeAlso">array_key_exists()</a> - Checks if the given key or index exists in the array</span></li>
    <li><span class="function"><a href="function.is-null.php" class="function" rel="rdfs-seeAlso">is_null()</a> - Finds whether a variable is null</span></li>
    <li>the error control <a href="language.operators.errorcontrol.php" class="link">@</a> operator</li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/isset.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.isset%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.isset&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.isset.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119993">  <div class="votes">
    <div id="Vu119993">
    <a href="/manual/vote-note.php?id=119993&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119993">
    <a href="/manual/vote-note.php?id=119993&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119993" title="68% like this...">
    119
    </div>
  </div>
  <a href="#119993" class="name">
  <strong class="user"><em>p_ignorethis_lbowers at gmail dot com</em></strong></a><a class="genanchor" href="#119993"> &para;</a><div class="date" title="2016-10-06 07:26"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom119993">
<div class="phpcode"><code><span class="html">I, too, was dismayed to find that isset($foo) returns false if ($foo == null). Here's an (awkward) way around it.<br /><br />unset($foo);<br />if (compact('foo') != array()) {<br />  do_your_thing();<br />}<br /><br />Of course, that is very non-intuitive, long, hard-to-understand, and kludgy. Better to design your code so you don't depend on the difference between an unset variable and a variable with the value null. But "better" only because PHP has made this weird development choice.<br /><br />In my thinking this was a mistake in the development of PHP. The name ("isset") should describe the function and not have the desciption be "is set AND is not null". If it was done properly a programmer could very easily do (isset($var) || is_null($var)) if they wanted to check for this!<br /><br />A variable set to null is a different state than a variable not set - there should be some easy way to differentiate. Just my (pointless) $0.02.</span></code></div>
  </div>
 </div>
  <div class="note" id="120359">  <div class="votes">
    <div id="Vu120359">
    <a href="/manual/vote-note.php?id=120359&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120359">
    <a href="/manual/vote-note.php?id=120359&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120359" title="67% like this...">
    46
    </div>
  </div>
  <a href="#120359" class="name">
  <strong class="user"><em>kurdtpage at gmail dot com</em></strong></a><a class="genanchor" href="#120359"> &para;</a><div class="date" title="2016-12-21 01:03"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120359">
<div class="phpcode"><code><span class="html">The new (as of PHP7) 'null coalesce operator' allows shorthand isset. You can use it like so:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Fetches the value of $_GET['user'] and returns 'nobody'<br />// if it does not exist.<br /></span><span class="default">$username </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">] ?? </span><span class="string">'nobody'</span><span class="keyword">;<br /></span><span class="comment">// This is equivalent to:<br /></span><span class="default">$username </span><span class="keyword">= isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">]) ? </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">] : </span><span class="string">'nobody'</span><span class="keyword">;<br /><br /></span><span class="comment">// Coalescing can be chained: this will return the first<br />// defined value out of $_GET['user'], $_POST['user'], and<br />// 'nobody'.<br /></span><span class="default">$username </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">] ?? </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">] ?? </span><span class="string">'nobody'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Quoted from <a href="http://php.net/manual/en/migration70.new-features.php#migration70.new-features.null-coalesce-op" rel="nofollow" target="_blank">http://php.net/manual/en/migration70.new-features.php#migration70.new-features.null-coalesce-op</a></span></code></div>
  </div>
 </div>
  <div class="note" id="86313">  <div class="votes">
    <div id="Vu86313">
    <a href="/manual/vote-note.php?id=86313&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86313">
    <a href="/manual/vote-note.php?id=86313&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86313" title="55% like this...">
    43
    </div>
  </div>
  <a href="#86313" class="name">
  <strong class="user"><em>a dot schaffhirt at sedna-soft dot de</em></strong></a><a class="genanchor" href="#86313"> &para;</a><div class="date" title="2008-10-12 08:01"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86313">
<div class="phpcode"><code><span class="html">You can safely use isset to check properties and subproperties of objects directly. So instead of writing<br /><br />    isset($abc) &amp;&amp; isset($abc-&gt;def) &amp;&amp; isset($abc-&gt;def-&gt;ghi)<br /><br />or in a shorter form<br /><br />    isset($abc, $abc-&gt;def, $abc-&gt;def-&gt;ghi)<br /><br />you can just write<br /><br />    isset ($abc-&gt;def-&gt;ghi)<br /><br />without raising any errors, warnings or notices.<br /><br />Examples<br /><span class="default">&lt;?php<br />    $abc </span><span class="keyword">= (object) array(</span><span class="string">"def" </span><span class="keyword">=&gt; </span><span class="default">123</span><span class="keyword">);<br />    </span><span class="default">var_dump</span><span class="keyword">(isset(</span><span class="default">$abc</span><span class="keyword">));                </span><span class="comment">// bool(true)<br />    </span><span class="default">var_dump</span><span class="keyword">(isset(</span><span class="default">$abc</span><span class="keyword">-&gt;</span><span class="default">def</span><span class="keyword">));           </span><span class="comment">// bool(true)<br />    </span><span class="default">var_dump</span><span class="keyword">(isset(</span><span class="default">$abc</span><span class="keyword">-&gt;</span><span class="default">def</span><span class="keyword">-&gt;</span><span class="default">ghi</span><span class="keyword">));      </span><span class="comment">// bool(false)<br />    </span><span class="default">var_dump</span><span class="keyword">(isset(</span><span class="default">$abc</span><span class="keyword">-&gt;</span><span class="default">def</span><span class="keyword">-&gt;</span><span class="default">ghi</span><span class="keyword">-&gt;</span><span class="default">jkl</span><span class="keyword">)); </span><span class="comment">// bool(false)<br />    </span><span class="default">var_dump</span><span class="keyword">(isset(</span><span class="default">$def</span><span class="keyword">));                </span><span class="comment">// bool(false)<br />    </span><span class="default">var_dump</span><span class="keyword">(isset(</span><span class="default">$def</span><span class="keyword">-&gt;</span><span class="default">ghi</span><span class="keyword">));           </span><span class="comment">// bool(false)<br />    </span><span class="default">var_dump</span><span class="keyword">(isset(</span><span class="default">$def</span><span class="keyword">-&gt;</span><span class="default">ghi</span><span class="keyword">-&gt;</span><span class="default">jkl</span><span class="keyword">));      </span><span class="comment">// bool(false)<br /><br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$abc</span><span class="keyword">);                       </span><span class="comment">// object(stdClass)#1 (1) { ["def"] =&gt; int(123) }<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$abc</span><span class="keyword">-&gt;</span><span class="default">def</span><span class="keyword">);                  </span><span class="comment">// int(123)<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$abc</span><span class="keyword">-&gt;</span><span class="default">def</span><span class="keyword">-&gt;</span><span class="default">ghi</span><span class="keyword">);             </span><span class="comment">// null / E_NOTICE: Trying to get property of non-object<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$abc</span><span class="keyword">-&gt;</span><span class="default">def</span><span class="keyword">-&gt;</span><span class="default">ghi</span><span class="keyword">-&gt;</span><span class="default">jkl</span><span class="keyword">);        </span><span class="comment">// null / E_NOTICE: Trying to get property of non-object<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$def</span><span class="keyword">);                       </span><span class="comment">// null / E_NOTICE: Trying to get property of non-object<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$def</span><span class="keyword">-&gt;</span><span class="default">ghi</span><span class="keyword">);                  </span><span class="comment">// null / E_NOTICE: Trying to get property of non-object<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$def</span><span class="keyword">-&gt;</span><span class="default">ghi</span><span class="keyword">-&gt;</span><span class="default">jkl</span><span class="keyword">);             </span><span class="comment">// null / E_NOTICE: Trying to get property of non-object<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51113">  <div class="votes">
    <div id="Vu51113">
    <a href="/manual/vote-note.php?id=51113&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51113">
    <a href="/manual/vote-note.php?id=51113&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51113" title="52% like this...">
    29
    </div>
  </div>
  <a href="#51113" class="name">
  <strong class="user"><em>yaogzhan at gmail dot com</em></strong></a><a class="genanchor" href="#51113"> &para;</a><div class="date" title="2005-03-20 04:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51113">
<div class="phpcode"><code><span class="html">If you have 
<br />
<br /><span class="default">&lt;?PHP
<br /></span><span class="keyword">class </span><span class="default">Foo
<br /></span><span class="keyword">{
<br />    protected </span><span class="default">$data </span><span class="keyword">= array(</span><span class="string">'bar' </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">);
<br />
<br />    function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">)
<br />    {
<br />        if( isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$p</span><span class="keyword">]) ) return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$p</span><span class="keyword">];
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />and
<br /><span class="default">&lt;?PHP
<br />$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">;
<br />echo isset(</span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>will always echo 'false'. because the isset() accepts VARIABLES as it parameters, but in this case, $foo-&gt;bar is NOT a VARIABLE. it is a VALUE returned from the __get() method of the class Foo. thus the isset($foo-&gt;bar) expreesion will always equal 'false'.</span></code></div>
  </div>
 </div>
  <div class="note" id="71803">  <div class="votes">
    <div id="Vu71803">
    <a href="/manual/vote-note.php?id=71803&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71803">
    <a href="/manual/vote-note.php?id=71803&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71803" title="52% like this...">
    27
    </div>
  </div>
  <a href="#71803" class="name">
  <strong class="user"><em>beuc at beuc dot net</em></strong></a><a class="genanchor" href="#71803"> &para;</a><div class="date" title="2006-12-16 12:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71803">
<div class="phpcode"><code><span class="html">"empty() is the opposite of (boolean) var, except that no warning is generated when the variable is not set."<br /><br />So essentially<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (isset(</span><span class="default">$var</span><span class="keyword">) &amp;&amp; </span><span class="default">$var</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span>is the same as<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!empty(</span><span class="default">$var</span><span class="keyword">))<br /></span><span class="default">?&gt;<br /></span>doesn't it? :)<br /><br />!empty() mimics the chk() function posted before.</span></code></div>
  </div>
 </div>
  <div class="note" id="119050">  <div class="votes">
    <div id="Vu119050">
    <a href="/manual/vote-note.php?id=119050&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119050">
    <a href="/manual/vote-note.php?id=119050&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119050" title="54% like this...">
    8
    </div>
  </div>
  <a href="#119050" class="name">
  <strong class="user"><em>ayyappan dot ashok at gmail dot com</em></strong></a><a class="genanchor" href="#119050"> &para;</a><div class="date" title="2016-03-24 07:23"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119050">
<div class="phpcode"><code><span class="html">Return Values :<br />Returns TRUE if var exists and has value other than NULL, FALSE otherwise.<br /><br /><span class="default">&lt;?php<br />$a</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">; </span><span class="comment">//The out put was TRUE. <br /></span><span class="default">$c</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">;<br /></span><span class="default">$d</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$e</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />if(isset(</span><span class="default">$b</span><span class="keyword">)):<br />echo </span><span class="string">"TRUE"</span><span class="keyword">;<br />else:<br />echo </span><span class="string">"FALSE"</span><span class="keyword">;    <br />endif;<br /></span><span class="default">?&gt;<br /></span>Could any one explain me in clarity.</span></code></div>
  </div>
 </div>
  <div class="note" id="84765">  <div class="votes">
    <div id="Vu84765">
    <a href="/manual/vote-note.php?id=84765&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84765">
    <a href="/manual/vote-note.php?id=84765&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84765" title="52% like this...">
    17
    </div>
  </div>
  <a href="#84765" class="name">
  <strong class="user"><em>mandos78 AT mail from google</em></strong></a><a class="genanchor" href="#84765"> &para;</a><div class="date" title="2008-07-29 02:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84765">
<div class="phpcode"><code><span class="html">Careful with this function "ifsetfor" by soapergem, passing by reference means that if, like the example $_GET['id'], the argument is an array index, it will be created in the original array (with a null value), thus causing posible trouble with the following code. At least in PHP 5.<br /><br />For example:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array();<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">ifsetor</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">[</span><span class="string">"unsetindex"</span><span class="keyword">], </span><span class="string">'default'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will print <br /><br />Array<br />(<br />)<br />Array<br />(<br />    [unsetindex] =&gt; <br />)<br /><br />Any foreach or similar will be different before and after the call.</span></code></div>
  </div>
 </div>
  <div class="note" id="64442">  <div class="votes">
    <div id="Vu64442">
    <a href="/manual/vote-note.php?id=64442&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64442">
    <a href="/manual/vote-note.php?id=64442&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64442" title="52% like this...">
    17
    </div>
  </div>
  <a href="#64442" class="name">
  <strong class="user"><em>soywiz at php dot net</em></strong></a><a class="genanchor" href="#64442"> &para;</a><div class="date" title="2006-04-14 06:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64442">
<div class="phpcode"><code><span class="html">Sometimes you have to check if an array has some keys. To achieve it you can use "isset" like this: isset($array['key1'], $array['key2'], $array['key3'], $array['key4'])<br />You have to write $array all times and it is reiterative if you use same array each time.<br /><br />With this simple function you can check if an array has some keys:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">isset_array</span><span class="keyword">() {<br />    if (</span><span class="default">func_num_args</span><span class="keyword">() &lt; </span><span class="default">2</span><span class="keyword">) return </span><span class="default">true</span><span class="keyword">;<br />    </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">);<br />    if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br />    foreach (</span><span class="default">$args </span><span class="keyword">as </span><span class="default">$n</span><span class="keyword">) if (!isset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">])) return </span><span class="default">false</span><span class="keyword">;<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Use: isset_array($array, 'key1', 'key2', 'key3', 'key4')<br />First parameter has the array; following parameters has the keys you want to check.</span></code></div>
  </div>
 </div>
  <div class="note" id="121461">  <div class="votes">
    <div id="Vu121461">
    <a href="/manual/vote-note.php?id=121461&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121461">
    <a href="/manual/vote-note.php?id=121461&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121461" title="53% like this...">
    5
    </div>
  </div>
  <a href="#121461" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121461"> &para;</a><div class="date" title="2017-07-30 01:12"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121461">
<div class="phpcode"><code><span class="html">If you regard isset() as indicating whether the given variable has a value or not, and recall that NULL is intended to indicate that a value is _absent_ (as said, somewhat awkwardly, on its manual page), then its behaviour is not at all inconsistent or confusing.<br /><br />It's not just to check for uninitialised variables - a lot of the time those are just due to sloppy coding. There are other ways a variable could fail to have a value (e.g., it's meant to hold the value returned from a function call but the function didn't have a value to return) where uninitialising the variable would not be an option nor even make sense (e.g., depending on what was to be done with the returned value).</span></code></div>
  </div>
 </div>
  <div class="note" id="103061">  <div class="votes">
    <div id="Vu103061">
    <a href="/manual/vote-note.php?id=103061&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103061">
    <a href="/manual/vote-note.php?id=103061&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103061" title="51% like this...">
    12
    </div>
  </div>
  <a href="#103061" class="name">
  <strong class="user"><em>Cuong Huy To</em></strong></a><a class="genanchor" href="#103061"> &para;</a><div class="date" title="2011-03-23 05:08"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103061">
<div class="phpcode"><code><span class="html">1) Note that isset($var) doesn't distinguish the two cases when $var is undefined, or is null. Evidence is in the following code.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">unset(</span><span class="default">$undefined</span><span class="keyword">);
<br /></span><span class="default">$null </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />if (</span><span class="default">true </span><span class="keyword">=== isset(</span><span class="default">$undefined</span><span class="keyword">)){echo </span><span class="string">'isset($undefined) === true'</span><span class="keyword">} else {echo </span><span class="string">'isset($undefined) === false'</span><span class="keyword">); </span><span class="comment">// 'isset($undefined) === false'
<br /></span><span class="keyword">if (</span><span class="default">true </span><span class="keyword">=== isset(</span><span class="default">$null</span><span class="keyword">)){echo </span><span class="string">'isset($null) === true'</span><span class="keyword">} else {echo </span><span class="string">'isset($null) === false'</span><span class="keyword">);              </span><span class="comment">// 'isset($null)      === false'
<br /></span><span class="default">?&gt;
<br /></span>
<br />2) If you want to distinguish undefined variable with a defined variable with a null value, then use array_key_exist
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">unset(</span><span class="default">$undefined</span><span class="keyword">);
<br /></span><span class="default">$null </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />
<br />if (</span><span class="default">true </span><span class="keyword">!== </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'undefined'</span><span class="keyword">, </span><span class="default">get_defined_vars</span><span class="keyword">())) {echo </span><span class="string">'$undefined does not exist'</span><span class="keyword">;} else {echo </span><span class="string">'$undefined exists'</span><span class="keyword">;} </span><span class="comment">// '$undefined does not exist'
<br /></span><span class="keyword">if (</span><span class="default">true </span><span class="keyword">=== </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'null'</span><span class="keyword">, </span><span class="default">get_defined_vars</span><span class="keyword">())) {echo </span><span class="string">'$null exists'</span><span class="keyword">;} else {echo </span><span class="string">'$null does not exist'</span><span class="keyword">;}                </span><span class="comment">// '$null exists'
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80032">  <div class="votes">
    <div id="Vu80032">
    <a href="/manual/vote-note.php?id=80032&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80032">
    <a href="/manual/vote-note.php?id=80032&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80032" title="51% like this...">
    11
    </div>
  </div>
  <a href="#80032" class="name">
  <strong class="user"><em>packard_bell_nec at hotmail dot com</em></strong></a><a class="genanchor" href="#80032"> &para;</a><div class="date" title="2007-12-25 11:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80032">
<div class="phpcode"><code><span class="html">Note: isset() only checks variables as anything else will result in a parse error. In other words, the following will not work: isset(trim($name)). <br /><br />isset() is the opposite of is_null($var) , except that no warning is generated when the variable is not set.</span></code></div>
  </div>
 </div>
  <div class="note" id="52743">  <div class="votes">
    <div id="Vu52743">
    <a href="/manual/vote-note.php?id=52743&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52743">
    <a href="/manual/vote-note.php?id=52743&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52743" title="51% like this...">
    8
    </div>
  </div>
  <a href="#52743" class="name">
  <strong class="user"><em>Andrew Penry</em></strong></a><a class="genanchor" href="#52743"> &para;</a><div class="date" title="2005-05-11 08:17"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52743">
<div class="phpcode"><code><span class="html">The following is an example of how to test if a variable is set, whether or not it is NULL. It makes use of the fact that an unset variable will throw an E_NOTICE error, but one initialized as NULL will not. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">var_exists</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">){<br />    if (empty(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'var_exists_err'</span><span class="keyword">])) {<br />        return </span><span class="default">true</span><span class="keyword">;<br />    } else {<br />        unset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'var_exists_err'</span><span class="keyword">]);<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /><br />function </span><span class="default">var_existsHandler</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">) {<br />   </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'var_exists_err'</span><span class="keyword">] = </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$l </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">"var_existsHandler"</span><span class="keyword">, </span><span class="default">E_NOTICE</span><span class="keyword">);<br />echo (</span><span class="default">var_exists</span><span class="keyword">(</span><span class="default">$l</span><span class="keyword">)) ? </span><span class="string">"True " </span><span class="keyword">: </span><span class="string">"False "</span><span class="keyword">;<br />echo (</span><span class="default">var_exists</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)) ? </span><span class="string">"True " </span><span class="keyword">: </span><span class="string">"False "</span><span class="keyword">;<br /></span><span class="default">restore_error_handler</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />Outputs:<br />True False<br /><br />The problem is, the set_error_handler and restore_error_handler calls can not be inside the function, which means you need 2 extra lines of code every time you are testing. And if you have any E_NOTICE errors caused by other code between the set_error_handler and restore_error_handler they will not be dealt with properly. One solution:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">var_exists</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">){<br />   if (empty(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'var_exists_err'</span><span class="keyword">])) {<br />       return </span><span class="default">true</span><span class="keyword">;<br />   } else {<br />       unset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'var_exists_err'</span><span class="keyword">]);<br />       return </span><span class="default">false</span><span class="keyword">;<br />   }<br />}<br /><br />function </span><span class="default">var_existsHandler</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">) {<br />    </span><span class="default">$filearr </span><span class="keyword">= </span><span class="default">file</span><span class="keyword">(</span><span class="default">$errfile</span><span class="keyword">);<br />    if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$filearr</span><span class="keyword">[</span><span class="default">$errline</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">], </span><span class="string">'var_exists'</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) {<br />        </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'var_exists_err'</span><span class="keyword">] = </span><span class="default">true</span><span class="keyword">;<br />        return </span><span class="default">true</span><span class="keyword">;<br />    } else {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$l </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">"var_existsHandler"</span><span class="keyword">, </span><span class="default">E_NOTICE</span><span class="keyword">);<br />echo (</span><span class="default">var_exists</span><span class="keyword">(</span><span class="default">$l</span><span class="keyword">)) ? </span><span class="string">"True " </span><span class="keyword">: </span><span class="string">"False "</span><span class="keyword">;<br />echo (</span><span class="default">var_exists</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)) ? </span><span class="string">"True " </span><span class="keyword">: </span><span class="string">"False "</span><span class="keyword">;<br /></span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$j</span><span class="keyword">);<br /></span><span class="default">restore_error_handler</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />Outputs:<br />True False<br />Notice: Undefined variable: j in filename.php on line 26<br /><br />This will make the handler only handle var_exists, but it adds a lot of overhead. Everytime an E_NOTICE error happens, the file it originated from will be loaded into an array.</span></code></div>
  </div>
 </div>
  <div class="note" id="117266">  <div class="votes">
    <div id="Vu117266">
    <a href="/manual/vote-note.php?id=117266&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117266">
    <a href="/manual/vote-note.php?id=117266&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117266" title="51% like this...">
    2
    </div>
  </div>
  <a href="#117266" class="name">
  <strong class="user"><em>andreasonny83 at gmail dot com</em></strong></a><a class="genanchor" href="#117266"> &para;</a><div class="date" title="2015-05-12 11:26"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117266">
<div class="phpcode"><code><span class="html">Here is an example with multiple parameters supplied<br /><br /><span class="default">&lt;?php<br />$var </span><span class="keyword">= array();<br /></span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val1'</span><span class="keyword">] = </span><span class="string">'test'</span><span class="keyword">;<br /></span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val2'</span><span class="keyword">] = </span><span class="string">'on'</span><span class="keyword">;<br /><br />if ( isset( </span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val1'</span><span class="keyword">], </span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val2'</span><span class="keyword">] ) &amp;&amp; </span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val2'</span><span class="keyword">] === </span><span class="string">'on' </span><span class="keyword">) {<br />    unset( </span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val1'</span><span class="keyword">] );<br />}<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$var </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will output:<br />Array<br />(<br />    [val2] =&gt; on<br />)<br /><br />The following code does the same calling "isset" 2 times:<br /><br /><span class="default">&lt;?php<br />$var </span><span class="keyword">= array();<br /></span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val1'</span><span class="keyword">] = </span><span class="string">'test'</span><span class="keyword">;<br /></span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val2'</span><span class="keyword">] = </span><span class="string">'on'</span><span class="keyword">;<br /><br />if ( isset( </span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val1'</span><span class="keyword">] ) &amp;&amp; isset( </span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val2'</span><span class="keyword">] ) &amp;&amp; </span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val2'</span><span class="keyword">] === </span><span class="string">'on' </span><span class="keyword">) {<br />    unset( </span><span class="default">$var</span><span class="keyword">[</span><span class="string">'val1'</span><span class="keyword">] );<br />}<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$var </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128771">  <div class="votes">
    <div id="Vu128771">
    <a href="/manual/vote-note.php?id=128771&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128771">
    <a href="/manual/vote-note.php?id=128771&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128771" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128771" class="name">
  <strong class="user"><em>eckoson at gmail dot com</em></strong></a><a class="genanchor" href="#128771"> &para;</a><div class="date" title="2023-08-01 02:41"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128771">
<div class="phpcode"><code><span class="html">If you are annoyed by the behavior of isset() concerning null values, here is a handy function for you. its similar to array_key_exists but, its a lot more flexible and can check for multiple array keys across multiple arrays.<br />Not recursive!<br />Tested on php 8.1.6, linux<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />* is_set<br />* @author DJ Eckoson<br />* @link @eckosongh Facebook Page<br />* checks whether variable names are set within the global space or they exists as an key and return if they are set (even if their values are null)<br />* @param string $var_name<br />*   name of the first variable to check<br />* @param array|null|string<br />*   optional array to check for key (if null, checks from $GLOBALS) OR<br />*   other variable names to check OR<br />*   other variable names and their associated arrays to their right (use null for global variables, optional if its the last parameter)<br />* check examples below<br />*/<br /></span><span class="keyword">function </span><span class="default">is_set</span><span class="keyword">(</span><span class="default">string $var_name</span><span class="keyword">, array|</span><span class="default">null</span><span class="keyword">|</span><span class="default">string </span><span class="keyword">... </span><span class="default">$args</span><span class="keyword">): </span><span class="default">bool </span><span class="keyword">{<br />  </span><span class="default">$vars</span><span class="keyword">[</span><span class="default">$var_name</span><span class="keyword">] = </span><span class="default">null</span><span class="keyword">;<br />  if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">)) {<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) {<br />      </span><span class="default">$vars</span><span class="keyword">[</span><span class="default">$var_name</span><span class="keyword">] = </span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    } elseif (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) {<br />      goto </span><span class="default">main</span><span class="keyword">;<br />    }<br />    unset(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />  }<br />  </span><span class="default">main</span><span class="keyword">:<br />  if (</span><span class="default">$args</span><span class="keyword">) {<br />    </span><span class="default">$args </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">);<br />    </span><span class="default">$cur_array </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">, function (</span><span class="default">$value</span><span class="keyword">) use (&amp;</span><span class="default">$cur_array</span><span class="keyword">, &amp;</span><span class="default">$vars</span><span class="keyword">): </span><span class="default">void </span><span class="keyword">{<br />      if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />        </span><span class="default">$cur_array </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />      } else {<br />        </span><span class="default">$vars</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">] = </span><span class="default">$cur_array</span><span class="keyword">;<br />      }<br />    });<br />  }<br />  foreach (</span><span class="default">$vars </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$array</span><span class="keyword">) {<br />    if (!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">??</span><span class="default">$GLOBALS</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br />  }<br />  return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Examples<br /></span><span class="default">$arr1 </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br /></span><span class="default">$arr2 </span><span class="keyword">= [<br />  </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />  </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">,<br />  </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="string">'hELLO wORLD!'<br /></span><span class="keyword">];<br /></span><span class="default">$gender </span><span class="keyword">= </span><span class="string">'male'</span><span class="keyword">;<br /></span><span class="default">$age </span><span class="keyword">= </span><span class="default">12</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_set</span><span class="keyword">(</span><span class="string">'age'</span><span class="keyword">)); </span><span class="comment">// true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_set</span><span class="keyword">(</span><span class="string">'age'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">)); </span><span class="comment">// true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_set</span><span class="keyword">(</span><span class="string">'age'</span><span class="keyword">, </span><span class="default">$arr1</span><span class="keyword">)); </span><span class="comment">// false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_set</span><span class="keyword">(</span><span class="string">'age'</span><span class="keyword">, array())); </span><span class="comment">// false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_set</span><span class="keyword">(</span><span class="string">'age'</span><span class="keyword">, array(</span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="default">48</span><span class="keyword">))); </span><span class="comment">// true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_set</span><span class="keyword">(</span><span class="string">'age'</span><span class="keyword">, </span><span class="string">'arr1'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="default">$arr2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">$arr1</span><span class="keyword">, </span><span class="string">'gender'</span><span class="keyword">)); </span><span class="comment">// true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_set</span><span class="keyword">(</span><span class="string">'age'</span><span class="keyword">, </span><span class="string">'arr1'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="default">$arr2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">$arr1</span><span class="keyword">, </span><span class="string">'gender'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">)); </span><span class="comment">// true<br /><br /></span><span class="default">$c</span><span class="keyword">=</span><span class="default">$d</span><span class="keyword">=</span><span class="default">$e</span><span class="keyword">=</span><span class="default">$a</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$arr </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">];<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_set</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">)); </span><span class="comment">// true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_set</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">)); </span><span class="comment">// false<br /></span><span class="default">?&gt;<br /></span> Note:<br /> it won't work for variables declared locally inside a function;<br /> however you can use it for checking if array keys exists inside a function</span></code></div>
  </div>
 </div>
  <div class="note" id="87521">  <div class="votes">
    <div id="Vu87521">
    <a href="/manual/vote-note.php?id=87521&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87521">
    <a href="/manual/vote-note.php?id=87521&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87521" title="50% like this...">
    5
    </div>
  </div>
  <a href="#87521" class="name">
  <strong class="user"><em>Ashus</em></strong></a><a class="genanchor" href="#87521"> &para;</a><div class="date" title="2008-12-08 01:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87521">
<div class="phpcode"><code><span class="html">Note that array keys are case sensitive.<br /><br /><span class="default">&lt;?php<br />$ar</span><span class="keyword">[</span><span class="string">'w'</span><span class="keyword">] = </span><span class="default">true</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(isset(</span><span class="default">$ar</span><span class="keyword">[</span><span class="string">'w'</span><span class="keyword">]),<br />      isset(</span><span class="default">$ar</span><span class="keyword">[</span><span class="string">'W'</span><span class="keyword">]));<br /></span><span class="default">?&gt;<br /></span><br />will report:<br />bool(true) bool(false)</span></code></div>
  </div>
 </div>
  <div class="note" id="101536">  <div class="votes">
    <div id="Vu101536">
    <a href="/manual/vote-note.php?id=101536&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101536">
    <a href="/manual/vote-note.php?id=101536&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101536" title="50% like this...">
    4
    </div>
  </div>
  <a href="#101536" class="name">
  <strong class="user"><em>francois vespa</em></strong></a><a class="genanchor" href="#101536"> &para;</a><div class="date" title="2010-12-22 07:21"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101536">
<div class="phpcode"><code><span class="html">Now this is how to achieve the same effect (ie, having isset() returning true even if variable has been set to null) for objects and arrays<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// array<br /><br /></span><span class="default">$array</span><span class="keyword">=array(</span><span class="string">'foo'</span><span class="keyword">=&gt;</span><span class="default">null</span><span class="keyword">);<br /><br />return isset(</span><span class="default">$array</span><span class="keyword">[</span><span class="string">'foo'</span><span class="keyword">]) || </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">,</span><span class="default">$array</span><span class="keyword">) <br />  ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false </span><span class="keyword">; </span><span class="comment">// return true<br /><br /></span><span class="keyword">return isset(</span><span class="default">$array</span><span class="keyword">[</span><span class="string">'inexistent'</span><span class="keyword">]) || </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'inexistent'</span><span class="keyword">,</span><span class="default">$array</span><span class="keyword">) <br />  ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false </span><span class="keyword">; </span><span class="comment">// return false<br /><br />// static class<br /><br /></span><span class="keyword">class </span><span class="default">bar<br /><br /></span><span class="keyword">{<br />  static </span><span class="default">$foo</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">;<br />}<br /><br />return isset(</span><span class="default">bar</span><span class="keyword">::</span><span class="default">$foo</span><span class="keyword">) || </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">,</span><span class="default">get_class_vars</span><span class="keyword">(</span><span class="string">'bar'</span><span class="keyword">))<br />  ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false </span><span class="keyword">; </span><span class="comment">// return true<br /><br /></span><span class="keyword">return isset(</span><span class="default">bar</span><span class="keyword">::</span><span class="default">$inexistent</span><span class="keyword">) || </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'inexistent'</span><span class="keyword">,</span><span class="default">get_class_vars</span><span class="keyword">(</span><span class="string">'bar'</span><span class="keyword">))<br />  ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false </span><span class="keyword">; </span><span class="comment">// return false<br /><br />// object<br /><br /></span><span class="keyword">class </span><span class="default">bar<br /></span><span class="keyword">{<br />    public </span><span class="default">$foo</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$bar</span><span class="keyword">=new </span><span class="default">bar</span><span class="keyword">();<br /><br />return isset(</span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">) || </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">,</span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">)) <br />  ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false </span><span class="keyword">; </span><span class="comment">// return true<br /><br /></span><span class="keyword">return isset(</span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">inexistent</span><span class="keyword">) || </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'inexistent'</span><span class="keyword">,</span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">)) <br />  ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false </span><span class="keyword">; </span><span class="comment">// return true<br /><br />// stdClass<br /><br /></span><span class="default">$bar</span><span class="keyword">=new </span><span class="default">stdClass</span><span class="keyword">;<br /></span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">;<br /><br />return isset(</span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">) || </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">,</span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">)) <br />  ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false </span><span class="keyword">; </span><span class="comment">// return true<br /><br /></span><span class="keyword">return isset(</span><span class="default">$bar</span><span class="keyword">-&gt;</span><span class="default">inexistent</span><span class="keyword">) || </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'inexistent'</span><span class="keyword">,</span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">)) <br />  ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false </span><span class="keyword">; </span><span class="comment">// return true<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92926">  <div class="votes">
    <div id="Vu92926">
    <a href="/manual/vote-note.php?id=92926&amp;page=function.isset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92926">
    <a href="/manual/vote-note.php?id=92926&amp;page=function.isset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92926" title="50% like this...">
    2
    </div>
  </div>
  <a href="#92926" class="name">
  <strong class="user"><em>Anl zselgin</em></strong></a><a class="genanchor" href="#92926"> &para;</a><div class="date" title="2009-08-14 03:30"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92926">
<div class="phpcode"><code><span class="html">Note: Because this is a language construct and not a function, it cannot be called using variable functions.<br /><br />So why it is under "Variable handling Functions". Maybe there should be some good documentation field for language constructs.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.isset&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.isset.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
