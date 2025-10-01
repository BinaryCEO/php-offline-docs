<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: BcMath\Number::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/bcmath-number.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/bcmath-number.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/bcmath-number.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.bcmath-number.php">
 <link rel="prev" href="https://www.php.net/manual/en/bcmath-number.compare.php">
 <link rel="next" href="https://www.php.net/manual/en/bcmath-number.div.php">

 <link rel="alternate" href="https://www.php.net/manual/en/bcmath-number.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/bcmath-number.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/bcmath-number.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/bcmath-number.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/bcmath-number.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/bcmath-number.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/bcmath-number.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/bcmath-number.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/bcmath-number.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/bcmath-number.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/bcmath-number.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a BcMath\Number object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: BcMath\Number::__construct - Manual" />
<meta name="twitter:description" content="Creates a BcMath\Number object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: BcMath\Number::__construct - Manual" />
<meta itemprop="description" content="Creates a BcMath\Number object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a BcMath\Number object" />

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
        <a href="bcmath-number.div.php">
          BcMath\Number::div &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="bcmath-number.compare.php">
          &laquo; BcMath\Number::compare        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.bc.php'>BC Math</a></li>      <li><a href='class.bcmath-number.php'>BcMath\Number</a></li>      </ul>
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
            <option value='en/bcmath-number.construct.php' selected="selected">English</option>
            <option value='de/bcmath-number.construct.php'>German</option>
            <option value='es/bcmath-number.construct.php'>Spanish</option>
            <option value='fr/bcmath-number.construct.php'>French</option>
            <option value='it/bcmath-number.construct.php'>Italian</option>
            <option value='ja/bcmath-number.construct.php'>Japanese</option>
            <option value='pt_BR/bcmath-number.construct.php'>Brazilian Portuguese</option>
            <option value='ru/bcmath-number.construct.php'>Russian</option>
            <option value='tr/bcmath-number.construct.php'>Turkish</option>
            <option value='uk/bcmath-number.construct.php'>Ukrainian</option>
            <option value='zh/bcmath-number.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="bcmath-number.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">BcMath\Number::__construct</h1>
  <p class="verinfo">(PHP 8 &gt;= 8.4.0)</p><p class="refpurpose"><span class="refname">BcMath\Number::__construct</span> &mdash; <span class="dc-title">Creates a BcMath\Number object</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-bcmath-number.construct-description">
  <h3 class="title">Description</h3>
  <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>BcMath\Number::__construct</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$num</code></span>)</div>

  <p class="simpara">
   Creates a <span class="classname"><a href="class.bcmath-number.php" class="classname">BcMath\Number</a></span> object from an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> or <span class="type"><a href="language.types.string.php" class="type string">string</a></span> value.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-bcmath-number.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">num</code></dt>
    <dd>
     <span class="simpara">
      An <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> or <span class="type"><a href="language.types.string.php" class="type string">string</a></span> value.
      If <code class="parameter">num</code> is a <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>,
      the <span class="property"><a href="class.bcmath-number.php#bcmath-number.props.scale">BcMath\Number::scale</a></span> is always set to <code class="literal">0</code>.
      If <code class="parameter">num</code> is a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, it must be a valid number,
      and the <span class="property"><a href="class.bcmath-number.php#bcmath-number.props.scale">BcMath\Number::scale</a></span> is automatically set by parsing the string.
     </span>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 errors" id="refsect1-bcmath-number.construct-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   This method throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if <code class="parameter">num</code>
   is <span class="type"><a href="language.types.string.php" class="type string">string</a></span> and not a well-formed BCMath numeric string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-bcmath-number.construct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-3289">
   <p><strong>Example #1 <span class="methodname"><strong>BcMath\Number::__construct()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$num1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$num2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'-200'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$num3 </span><span style="color: #007700">= new </span><span style="color: #0000BB">BcMath\Number</span><span style="color: #007700">(</span><span style="color: #DD0000">'300.00'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$num1</span><span style="color: #007700">, </span><span style="color: #0000BB">$num2</span><span style="color: #007700">, </span><span style="color: #0000BB">$num3</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">object(BcMath\Number)#1 (2) {
  [&quot;value&quot;]=&gt;
  string(3) &quot;100&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#2 (2) {
  [&quot;value&quot;]=&gt;
  string(4) &quot;-200&quot;
  [&quot;scale&quot;]=&gt;
  int(0)
}
object(BcMath\Number)#3 (2) {
  [&quot;value&quot;]=&gt;
  string(6) &quot;300.00&quot;
  [&quot;scale&quot;]=&gt;
  int(2)
}</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-bcmath-number.construct-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="methodname"><a href="bcmath-number.serialize.php" class="methodname" rel="rdfs-seeAlso">BcMath\Number::__serialize()</a> - Serializes a BcMath\Number object</span></li>
   <li><span class="methodname"><a href="bcmath-number.unserialize.php" class="methodname" rel="rdfs-seeAlso">BcMath\Number::__unserialize()</a> - Deserializes a data parameter into a BcMath\Number object</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/bc/bcmath/number/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbcmath-number.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=bcmath-number.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/bcmath-number.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="130292">  <div class="votes">
    <div id="Vu130292">
    <a href="/manual/vote-note.php?id=130292&amp;page=bcmath-number.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130292">
    <a href="/manual/vote-note.php?id=130292&amp;page=bcmath-number.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130292" title="no votes...">
    0
    </div>
  </div>
  <a href="#130292" class="name">
  <strong class="user"><em>gajowy at agzeta dot pl</em></strong></a><a class="genanchor" href="#130292"> &para;</a><div class="date" title="2025-05-13 09:05"><strong>4 months ago</strong></div>
  <div class="text" id="Hcom130292">
<div class="phpcode"><code><span class="html">It seems that the constructor does not accept values ​​in the scientific format, e.g. "1e20". To get around this limitation, I wrote a function that converts floats represented by a scientific format string to floats represented by a string as a decimal fractional number. You can use the output of this function as the input to the constructor.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">BCMath\Number</span><span class="keyword">;<br /><br /></span><span class="default">$num </span><span class="keyword">= -</span><span class="default">123e-40</span><span class="keyword">;   </span><span class="comment">// can be a float or string variable, because...<br /></span><span class="default">$strNum </span><span class="keyword">= </span><span class="default">sci2dec</span><span class="keyword">( </span><span class="default">$num </span><span class="keyword">);  </span><span class="comment">// ...there is an internal float to string conversion<br /></span><span class="default">$L </span><span class="keyword">= new </span><span class="default">Number</span><span class="keyword">( </span><span class="default">$strNum </span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$L </span><span class="keyword">);<br /><br />function </span><span class="default">sci2dec</span><span class="keyword">( </span><span class="default">string $s </span><span class="keyword">): </span><span class="default">string<br /></span><span class="keyword">{<br />    if( !</span><span class="default">preg_match</span><span class="keyword">( </span><span class="string">'/^([+-]?)(\d+(?:\.\d+)?)[eE]([+-]?\d+)$/'</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$m </span><span class="keyword">) )<br />        return </span><span class="default">$s</span><span class="keyword">; </span><span class="comment">// it's not sci format, return unchanged<br />    </span><span class="keyword">[ </span><span class="default">$sign</span><span class="keyword">, </span><span class="default">$mantissa</span><span class="keyword">, </span><span class="default">$exp </span><span class="keyword">] = [ </span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], (int)</span><span class="default">$m</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] ];<br />    [ </span><span class="default">$int</span><span class="keyword">, </span><span class="default">$frac </span><span class="keyword">] = </span><span class="default">str_contains</span><span class="keyword">( </span><span class="default">$mantissa</span><span class="keyword">, </span><span class="string">'.' </span><span class="keyword">) ? </span><span class="default">explode</span><span class="keyword">( </span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$mantissa</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">) : [ </span><span class="default">$mantissa</span><span class="keyword">, </span><span class="string">'' </span><span class="keyword">];<br />    </span><span class="default">$digits </span><span class="keyword">= </span><span class="default">$int </span><span class="keyword">. </span><span class="default">$frac</span><span class="keyword">;<br />    </span><span class="default">$exp </span><span class="keyword">-= </span><span class="default">strLen</span><span class="keyword">( </span><span class="default">$frac </span><span class="keyword">);<br />    if( </span><span class="default">$exp </span><span class="keyword">&gt;= </span><span class="default">0 </span><span class="keyword">)<br />    {<br />        </span><span class="default">$digits </span><span class="keyword">.= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'0'</span><span class="keyword">, </span><span class="default">$exp</span><span class="keyword">);<br />        </span><span class="default">$dec </span><span class="keyword">= </span><span class="default">lTrim</span><span class="keyword">(</span><span class="default">$digits</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">);<br />        return </span><span class="default">$sign </span><span class="keyword">. ( </span><span class="default">$dec </span><span class="keyword">=== </span><span class="string">'' </span><span class="keyword">? </span><span class="string">'0' </span><span class="keyword">: </span><span class="default">$dec </span><span class="keyword">);<br />    }<br />    </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strLen</span><span class="keyword">( </span><span class="default">$digits </span><span class="keyword">) + </span><span class="default">$exp</span><span class="keyword">;<br />    if( </span><span class="default">$pos </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">) </span><span class="comment">// kropka w środku<br />        </span><span class="keyword">return </span><span class="default">$sign </span><span class="keyword">. </span><span class="default">subStr</span><span class="keyword">( </span><span class="default">$digits</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">) . </span><span class="string">'.' </span><span class="keyword">. </span><span class="default">subStr</span><span class="keyword">( </span><span class="default">$digits</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">);<br />    return </span><span class="default">$sign </span><span class="keyword">. </span><span class="string">'0.' </span><span class="keyword">. </span><span class="default">str_repeat</span><span class="keyword">( </span><span class="string">'0'</span><span class="keyword">, -</span><span class="default">$pos </span><span class="keyword">) . </span><span class="default">$digits</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Output is:<br /><br />object(BcMath\Number)#2 (2) {<br />  ["value"]=&gt;<br />  string(43) "-0.0000000000000000000000000000000000000123"<br />  ["scale"]=&gt;<br />  int(40)<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=bcmath-number.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/bcmath-number.construct.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.bcmath-number.php">BcMath\Number</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="bcmath-number.add.php" title="add">add</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.ceil.php" title="ceil">ceil</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.compare.php" title="compare">compare</a>
                        </li>
                                                <li class="current">
                            <a href="bcmath-number.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.div.php" title="div">div</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.divmod.php" title="divmod">divmod</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.floor.php" title="floor">floor</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.mod.php" title="mod">mod</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.mul.php" title="mul">mul</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.pow.php" title="pow">pow</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.powmod.php" title="powmod">powmod</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.round.php" title="round">round</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.serialize.php" title="_&#8203;_&#8203;serialize">_&#8203;_&#8203;serialize</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.sqrt.php" title="sqrt">sqrt</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.sub.php" title="sub">sub</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                                                <li class="">
                            <a href="bcmath-number.unserialize.php" title="_&#8203;_&#8203;unserialize">_&#8203;_&#8203;unserialize</a>
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
