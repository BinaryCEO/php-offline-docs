<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: str_getcsv - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.str-getcsv.php">
 <link rel="shorturl" href="https://www.php.net/str-getcsv">
 <link rel="alternate" href="https://www.php.net/str-getcsv" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.str-ends-with.php">
 <link rel="next" href="https://www.php.net/manual/en/function.str-increment.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.str-getcsv.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.str-getcsv.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.str-getcsv.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.str-getcsv.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.str-getcsv.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.str-getcsv.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.str-getcsv.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.str-getcsv.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.str-getcsv.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.str-getcsv.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.str-getcsv.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parse a CSV string into an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: str_getcsv - Manual" />
<meta name="twitter:description" content="Parse a CSV string into an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: str_getcsv - Manual" />
<meta itemprop="description" content="Parse a CSV string into an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parse a CSV string into an array" />

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
        <a href="function.str-increment.php">
          str_increment &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.str-ends-with.php">
          &laquo; str_ends_with        </a>
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
            <option value='en/function.str-getcsv.php' selected="selected">English</option>
            <option value='de/function.str-getcsv.php'>German</option>
            <option value='es/function.str-getcsv.php'>Spanish</option>
            <option value='fr/function.str-getcsv.php'>French</option>
            <option value='it/function.str-getcsv.php'>Italian</option>
            <option value='ja/function.str-getcsv.php'>Japanese</option>
            <option value='pt_BR/function.str-getcsv.php'>Brazilian Portuguese</option>
            <option value='ru/function.str-getcsv.php'>Russian</option>
            <option value='tr/function.str-getcsv.php'>Turkish</option>
            <option value='uk/function.str-getcsv.php'>Ukrainian</option>
            <option value='zh/function.str-getcsv.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.str-getcsv" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">str_getcsv</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">str_getcsv</span> &mdash; <span class="dc-title">
   Parse a CSV string into an array
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.str-getcsv-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>str_getcsv</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$separator</code><span class="initializer"> = &quot;,&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$enclosure</code><span class="initializer"> = &quot;\&quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$escape</code><span class="initializer"> = &quot;\\&quot;</span></span><br>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Parses a string input for fields in <abbr title="Comma Separated Value">CSV</abbr> format
   and returns an array containing the fields read.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    The locale settings are taken into account by this function.
    For example, data encoded in certain one-byte encodings may be parsed
    incorrectly if <strong><code><a href="string.constants.php#constant.lc-ctype">LC_CTYPE</a></code></strong> is
    <code class="literal">en_US.UTF-8</code>.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.str-getcsv-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string to parse.
      </p>
     </dd>
    
    
     <dt><code class="parameter">separator</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">separator</code> parameter sets the field separator.
       It must be a single byte character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">enclosure</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">enclosure</code> parameter sets the field enclosure character.
       It must be a single byte character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">escape</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">escape</code> parameter sets the escape character.
       It must be a single byte character or the empty string.
       The empty string (<code class="literal">&quot;&quot;</code>) disables the proprietary escape mechanism.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Usually an <code class="parameter">enclosure</code> character is escaped inside
        a field by doubling it; however, the <code class="parameter">escape</code>
        character can be used as an alternative. So for the default parameter
        values <code class="literal">&quot;&quot;</code> and <code class="literal">\&quot;</code> have the same
        meaning. Other than allowing to escape the
        <code class="parameter">enclosure</code> character the
        <code class="parameter">escape</code> character has no special meaning; it isn&#039;t
        even meant to escape itself.
       </span>
      </p></blockquote>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="simpara">
        As of PHP 8.4.0, depending on the default value of
        <code class="parameter">escape</code> is deprecated.
        It needs to be provided explicitly either positionally or by the use
        of <a href="functions.arguments.php#functions.named-arguments" class="link">named arguments</a>.
       </p>
      </div>
     </dd>
    
   </dl>
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">
 When <code class="parameter">escape</code> is set to anything other than an empty string
 (<code class="literal">&quot;&quot;</code>) it can result in CSV that is not compliant with
 <a href="https://datatracker.ietf.org/doc/html/rfc4180" class="link external">&raquo;&nbsp;RFC 4180</a> or unable to survive a roundtrip
 through the PHP CSV functions. The default for <code class="parameter">escape</code> is
 <code class="literal">&quot;\\&quot;</code> so it is recommended to set it to the empty string explicitly.
 The default value will change in a future version of PHP, no earlier than PHP 9.0.
</p></div>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.str-getcsv-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an indexed array containing the fields read.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.str-getcsv-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   Throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
   <code class="parameter">separator</code> or <code class="parameter">enclosure</code>
   is not one byte long.
  </p>
  <p class="simpara">
   Throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
   <code class="parameter">escape</code> is not one byte long or the empty string.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.str-getcsv-changelog">
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
        Relying on the default value of <code class="parameter">escape</code> is now
        deprecated.
       </td>
      </tr>

      <tr>
       <td>8.4.0</td>
       <td>
        Now throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
        <code class="parameter">separator</code>, <code class="parameter">enclosure</code>,
        or <code class="parameter">escape</code> is invalid.
        This mimics the behavior of <span class="function"><a href="function.fgetcsv.php" class="function">fgetcsv()</a></span> and
        <span class="function"><a href="function.fputcsv.php" class="function">fputcsv()</a></span>.
       </td>
      </tr>

      <tr>
       <td>8.3.0</td>
       <td>
        An empty string is returned instead of a string with a single
        null byte for the last field if it contains only an unterminated
        enclosure.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        The <code class="parameter">escape</code> parameter now interprets an empty
        string as signal to disable the proprietary escape mechanism. Formerly,
        an empty string was treated like the default parameter value.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.str-getcsv-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5132">
    <p><strong>Example #1 <span class="function"><strong>str_getcsv()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$string </span><span style="color: #007700">= </span><span style="color: #DD0000">'PHP,Java,Python,Kotlin,Swift'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">str_getcsv</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">, </span><span style="color: #0000BB">escape</span><span style="color: #007700">: </span><span style="color: #DD0000">'\\'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(5) {
  [0]=&gt;
  string(3) &quot;PHP&quot;
  [1]=&gt;
  string(4) &quot;Java&quot;
  [2]=&gt;
  string(6) &quot;Python&quot;
  [3]=&gt;
  string(6) &quot;Kotlin&quot;
  [4]=&gt;
  string(5) &quot;Swift&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5133">
    <p><strong>Example #2 <span class="function"><strong>str_getcsv()</strong></span> example with an empty string</strong></p>
    <div class="caution"><strong class="caution">Caution</strong>
     <p class="simpara">
      On an empty string this function returns the value <code class="code">[null]</code>
      instead of an empty array.
     </p>
    </div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$string </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">str_getcsv</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">, </span><span style="color: #0000BB">escape</span><span style="color: #007700">: </span><span style="color: #DD0000">'\\'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(1) {
  [0]=&gt;
  NULL
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.str-getcsv-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.fputcsv.php" class="function" rel="rdfs-seeAlso">fputcsv()</a> - Format line as CSV and write to file pointer</span></li>
   <li><span class="function"><a href="function.fgetcsv.php" class="function" rel="rdfs-seeAlso">fgetcsv()</a> - Gets line from file pointer and parse for CSV fields</span></li>
   <li><span class="methodname"><a href="splfileobject.fgetcsv.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::fgetcsv()</a> - Gets line from file and parse as CSV fields</span></li>
   <li><span class="methodname"><a href="splfileobject.fputcsv.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::fputcsv()</a> - Write a field array as a CSV line</span></li>
   <li><span class="methodname"><a href="splfileobject.setcsvcontrol.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::setCsvControl()</a> - Set the delimiter, enclosure and escape character for CSV</span></li>
   <li><span class="methodname"><a href="splfileobject.getcsvcontrol.php" class="methodname" rel="rdfs-seeAlso">SplFileObject::getCsvControl()</a> - Get the delimiter, enclosure and escape character for CSV</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/str-getcsv.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.str-getcsv%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.str-getcsv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-getcsv.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">30 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114764">  <div class="votes">
    <div id="Vu114764">
    <a href="/manual/vote-note.php?id=114764&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114764">
    <a href="/manual/vote-note.php?id=114764&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114764" title="74% like this...">
    497
    </div>
  </div>
  <a href="#114764" class="name">
  <strong class="user"><em>james at moss dot io</em></strong></a><a class="genanchor" href="#114764"> &para;</a><div class="date" title="2014-04-03 10:24"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114764">
<div class="phpcode"><code><span class="html">[Editor's Note (cmb): that does not produce the desired results, if fields contain linebreaks.]
<br />
<br />Handy one liner to parse a CSV file into an array
<br />
<br /><span class="default">&lt;?php
<br />
<br />$csv </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'str_getcsv'</span><span class="keyword">, </span><span class="default">file</span><span class="keyword">(</span><span class="string">'data.csv'</span><span class="keyword">));
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117692">  <div class="votes">
    <div id="Vu117692">
    <a href="/manual/vote-note.php?id=117692&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117692">
    <a href="/manual/vote-note.php?id=117692&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117692" title="71% like this...">
    186
    </div>
  </div>
  <a href="#117692" class="name">
  <strong class="user"><em>starrychloe at oliveyou dot net</em></strong></a><a class="genanchor" href="#117692"> &para;</a><div class="date" title="2015-07-23 06:12"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117692">
<div class="phpcode"><code><span class="html">Based on James' line, this will create an array of associative arrays with the first row column headers as the keys.<br /><br /><span class="default">&lt;?php<br />    $csv </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'str_getcsv'</span><span class="keyword">, </span><span class="default">file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">));<br />    </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$csv</span><span class="keyword">, function(&amp;</span><span class="default">$a</span><span class="keyword">) use (</span><span class="default">$csv</span><span class="keyword">) {<br />      </span><span class="default">$a </span><span class="keyword">= </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$csv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$a</span><span class="keyword">);<br />    });<br />    </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$csv</span><span class="keyword">); </span><span class="comment"># remove column header<br /></span><span class="default">?&gt;</span> <br /><br />This will yield something like<br />    [2] =&gt; Array<br />        (<br />            [Campaign ID] =&gt; 295095038<br />            [Ad group ID] =&gt; 22460178158<br />            [Keyword ID] =&gt; 3993587178</span></code></div>
  </div>
 </div>
  <div class="note" id="101888">  <div class="votes">
    <div id="Vu101888">
    <a href="/manual/vote-note.php?id=101888&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101888">
    <a href="/manual/vote-note.php?id=101888&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101888" title="69% like this...">
    141
    </div>
  </div>
  <a href="#101888" class="name">
  <strong class="user"><em>durik at 3ilab dot net</em></strong></a><a class="genanchor" href="#101888"> &para;</a><div class="date" title="2011-01-16 11:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101888">
<div class="phpcode"><code><span class="html">As the str_getcsv(), unlike to fgetcsv(), does not parse the rows in CSV string, I have found following easy workaround:
<br />
<br /><span class="default">&lt;?php
<br />$Data </span><span class="keyword">= </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$CsvString</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">); </span><span class="comment">//parse the rows
<br /></span><span class="keyword">foreach(</span><span class="default">$Data </span><span class="keyword">as &amp;</span><span class="default">$Row</span><span class="keyword">) </span><span class="default">$Row </span><span class="keyword">= </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$Row</span><span class="keyword">, </span><span class="string">";"</span><span class="keyword">); </span><span class="comment">//parse the items in rows
<br /></span><span class="default">?&gt;
<br /></span>
<br />Why not use explode() instead of str_getcsv() to parse rows? Because explode() would not treat possible enclosured parts of string or escaped characters correctly.</span></code></div>
  </div>
 </div>
  <div class="note" id="116763">  <div class="votes">
    <div id="Vu116763">
    <a href="/manual/vote-note.php?id=116763&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116763">
    <a href="/manual/vote-note.php?id=116763&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116763" title="78% like this...">
    13
    </div>
  </div>
  <a href="#116763" class="name">
  <strong class="user"><em>sven at e7o dot de</em></strong></a><a class="genanchor" href="#116763"> &para;</a><div class="date" title="2015-02-24 02:53"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116763">
<div class="phpcode"><code><span class="html">PHP is failing when parsing UTF-8 with Byte Order Mark. Strip it with this one from string before passing it to csv parser:<br /><br /><span class="default">&lt;?php<br />        $bom </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'CCC'</span><span class="keyword">, </span><span class="default">0xEF</span><span class="keyword">, </span><span class="default">0xBB</span><span class="keyword">, </span><span class="default">0xBF</span><span class="keyword">);<br />        if (</span><span class="default">strncmp</span><span class="keyword">(</span><span class="default">$yourString</span><span class="keyword">, </span><span class="default">$bom</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$body </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$yourString</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111665">  <div class="votes">
    <div id="Vu111665">
    <a href="/manual/vote-note.php?id=111665&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111665">
    <a href="/manual/vote-note.php?id=111665&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111665" title="72% like this...">
    44
    </div>
  </div>
  <a href="#111665" class="name">
  <strong class="user"><em>normadize -a- gmail -d- com</em></strong></a><a class="genanchor" href="#111665"> &para;</a><div class="date" title="2013-03-13 11:19"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111665">
<div class="phpcode"><code><span class="html">Like some other users here noted, str_getcsv() cannot be used if you want to comply with either the RFC or with most spreadsheet tools like Excel or Google Docs.<br /><br />These tools do not escape commas or new lines, but instead place double-quotes (") around the field. If there are any double-quotes in the field, these are escaped with another double-quote (" becomes ""). All this may look odd, but it is what the RFC and most tools do ... <br /><br />For instance, try exporting as .csv a Google Docs spreadsheet (File &gt; Download as &gt; .csv) which has new lines and commas as part of the field values and see how the .csv content looks, then try to parse it using str_getcsv() ... it will spectacularly regardless of the arguments you pass to it.<br /><br />Here is a function that can handle everything correctly, and more:<br /><br />- doesn't use any for or while loops,<br />- it allows for any separator (any string of any length),<br />- option to skip empty lines,<br />- option to trim fields,<br />- can handle UTF8 data too (although .csv files are likely non-unicode).<br /><br />Here is the more human readable version of the function:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// returns a two-dimensional array or rows and fields<br /><br /></span><span class="keyword">function </span><span class="default">parse_csv </span><span class="keyword">(</span><span class="default">$csv_string</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">","</span><span class="keyword">, </span><span class="default">$skip_empty_lines </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">, </span><span class="default">$trim_fields </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">)<br />{<br />    </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/(?&lt;!")""/'</span><span class="keyword">, </span><span class="string">'!!Q!!'</span><span class="keyword">, </span><span class="default">$csv_string</span><span class="keyword">);<br />    </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />        </span><span class="string">'/"(.*?)"/s'</span><span class="keyword">,<br />        function (</span><span class="default">$field</span><span class="keyword">) {<br />            return </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]));<br />        },<br />        </span><span class="default">$enc<br />    </span><span class="keyword">);<br />    </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="default">$skip_empty_lines </span><span class="keyword">? (</span><span class="default">$trim_fields </span><span class="keyword">? </span><span class="string">'/( *\R)+/s' </span><span class="keyword">: </span><span class="string">'/\R+/s'</span><span class="keyword">) : </span><span class="string">'/\R/s'</span><span class="keyword">, </span><span class="default">$enc</span><span class="keyword">);<br />    return </span><span class="default">array_map</span><span class="keyword">(<br />        function (</span><span class="default">$line</span><span class="keyword">) use (</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$trim_fields</span><span class="keyword">) {<br />            </span><span class="default">$fields </span><span class="keyword">= </span><span class="default">$trim_fields </span><span class="keyword">? </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'trim'</span><span class="keyword">, </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">)) : </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">);<br />            return </span><span class="default">array_map</span><span class="keyword">(<br />                function (</span><span class="default">$field</span><span class="keyword">) {<br />                    return </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'!!Q!!'</span><span class="keyword">, </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">)));<br />                },<br />                </span><span class="default">$fields<br />            </span><span class="keyword">);<br />        },<br />        </span><span class="default">$lines<br />    </span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Since this is not using any loops, you can actually write it as a one-line statement (one-liner).<br /><br />Here's the function using just one line of code for the function body, formatted nicely though:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// returns the same two-dimensional array as above, but with a one-liner code<br /><br /></span><span class="keyword">function </span><span class="default">parse_csv </span><span class="keyword">(</span><span class="default">$csv_string</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">","</span><span class="keyword">, </span><span class="default">$skip_empty_lines </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">, </span><span class="default">$trim_fields </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">)<br />{<br />    return </span><span class="default">array_map</span><span class="keyword">(<br />        function (</span><span class="default">$line</span><span class="keyword">) use (</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$trim_fields</span><span class="keyword">) {<br />            return </span><span class="default">array_map</span><span class="keyword">(<br />                function (</span><span class="default">$field</span><span class="keyword">) {<br />                    return </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'!!Q!!'</span><span class="keyword">, </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">)));<br />                },<br />                </span><span class="default">$trim_fields </span><span class="keyword">? </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'trim'</span><span class="keyword">, </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">)) : </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">)<br />            );<br />        },<br />        </span><span class="default">preg_split</span><span class="keyword">(<br />            </span><span class="default">$skip_empty_lines </span><span class="keyword">? (</span><span class="default">$trim_fields </span><span class="keyword">? </span><span class="string">'/( *\R)+/s' </span><span class="keyword">: </span><span class="string">'/\R+/s'</span><span class="keyword">) : </span><span class="string">'/\R/s'</span><span class="keyword">,<br />            </span><span class="default">preg_replace_callback</span><span class="keyword">(<br />                </span><span class="string">'/"(.*?)"/s'</span><span class="keyword">,<br />                function (</span><span class="default">$field</span><span class="keyword">) {<br />                    return </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]));<br />                },<br />                </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/(?&lt;!")""/'</span><span class="keyword">, </span><span class="string">'!!Q!!'</span><span class="keyword">, </span><span class="default">$csv_string</span><span class="keyword">)<br />            )<br />        )<br />    );<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Replace !!Q!! with another placeholder if you wish.<br /><br />Have fun.</span></code></div>
  </div>
 </div>
  <div class="note" id="99323">  <div class="votes">
    <div id="Vu99323">
    <a href="/manual/vote-note.php?id=99323&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99323">
    <a href="/manual/vote-note.php?id=99323&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99323" title="66% like this...">
    86
    </div>
  </div>
  <a href="#99323" class="name">
  <strong class="user"><em>Jay Williams</em></strong></a><a class="genanchor" href="#99323"> &para;</a><div class="date" title="2010-08-10 01:50"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99323">
<div class="phpcode"><code><span class="html">Here is a quick and easy way to convert a CSV file to an associated array:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @link <a href="http://gist.github.com/385876" rel="nofollow" target="_blank">http://gist.github.com/385876</a><br /> */<br /></span><span class="keyword">function </span><span class="default">csv_to_array</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">=</span><span class="string">','</span><span class="keyword">)<br />{<br />    if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) || !</span><span class="default">is_readable</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">))<br />        return </span><span class="default">FALSE</span><span class="keyword">;<br /><br />    </span><span class="default">$header </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />    </span><span class="default">$data </span><span class="keyword">= array();<br />    if ((</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">)<br />    {<br />        while ((</span><span class="default">$row </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">)<br />        {<br />            if(!</span><span class="default">$header</span><span class="keyword">)<br />                </span><span class="default">$header </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">;<br />            else<br />                </span><span class="default">$data</span><span class="keyword">[] = </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">);<br />        }<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$data</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115776">  <div class="votes">
    <div id="Vu115776">
    <a href="/manual/vote-note.php?id=115776&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115776">
    <a href="/manual/vote-note.php?id=115776&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115776" title="69% like this...">
    17
    </div>
  </div>
  <a href="#115776" class="name">
  <strong class="user"><em>dejiakala at gmail dot com</em></strong></a><a class="genanchor" href="#115776"> &para;</a><div class="date" title="2014-09-21 06:06"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115776">
<div class="phpcode"><code><span class="html">I wanted the best of the 2 solutions by james at moss dot io and Jay Williams (csv_to_array()) - create associative array from a CSV file with a header row.<br /><br /><span class="default">&lt;?php<br /><br />$array </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'str_getcsv'</span><span class="keyword">, </span><span class="default">file</span><span class="keyword">(</span><span class="string">'data.csv'</span><span class="keyword">));<br /><br /></span><span class="default">$header </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /><br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="string">'_combine_array'</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">);<br /><br />function </span><span class="default">_combine_array</span><span class="keyword">(&amp;</span><span class="default">$row</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">) {<br />  </span><span class="default">$row </span><span class="keyword">= </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Then I thought why not try some benchmarking? I grabbed a sample CSV file with 50,000 rows (10 columns each) and Vulcan Logic Disassembler (VLD) which hooks into the Zend Engine and dumps all the opcodes (execution units) of a script - see <a href="http://pecl.php.net/package/vld" rel="nofollow" target="_blank">http://pecl.php.net/package/vld</a> and example here: <a href="http://fabien.potencier.org/article/8/print-vs-echo-which-one-is-faster" rel="nofollow" target="_blank">http://fabien.potencier.org/article/8/print-vs-echo-which-one-is-faster</a><br /><br />Result: <br /><br />array_walk() and array_map() - 39 opcodes<br />csv_to_array() - 69 opcodes</span></code></div>
  </div>
 </div>
  <div class="note" id="113220">  <div class="votes">
    <div id="Vu113220">
    <a href="/manual/vote-note.php?id=113220&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113220">
    <a href="/manual/vote-note.php?id=113220&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113220" title="68% like this...">
    26
    </div>
  </div>
  <a href="#113220" class="name">
  <strong class="user"><em>Ryan Rubley</em></strong></a><a class="genanchor" href="#113220"> &para;</a><div class="date" title="2013-09-13 08:00"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113220">
<div class="phpcode"><code><span class="html">@normadize - that is a nice start, but it fails on situations where a field is empty but quoted (returning a string with one double quote instead of an empty string) and cases like """""foo""""" that should result in ""foo"" but instead return "foo". I also get a row with 1 empty field at the end because of the final CRLF in the CSV. Plus, I don't really like the !!Q!! magic or urlencoding to get around things. Also, \R doesn't work in pcre on any of my php installations.<br /><br />Here is my take on this, without anonymous functions (so it works on PHP &lt; 5.3), and without your options (because I believe the only correct way to parse according to the RFC would be $skip_empty_lines = false and $trim_fields = false).<br /><br />//parse a CSV file into a two-dimensional array<br />//this seems as simple as splitting a string by lines and commas, but this only works if tricks are performed<br />//to ensure that you do NOT split on lines and commas that are inside of double quotes.<br />function parse_csv($str)<br />{<br />    //match all the non-quoted text and one series of quoted text (or the end of the string)<br />    //each group of matches will be parsed with the callback, with $matches[1] containing all the non-quoted text,<br />    //and $matches[3] containing everything inside the quotes<br />    $str = preg_replace_callback('/([^"]*)("((""|[^"])*)"|$)/s', 'parse_csv_quotes', $str);<br /><br />    //remove the very last newline to prevent a 0-field array for the last line<br />    $str = preg_replace('/\n$/', '', $str);<br /><br />    //split on LF and parse each line with a callback<br />    return array_map('parse_csv_line', explode("\n", $str));<br />}<br /><br />//replace all the csv-special characters inside double quotes with markers using an escape sequence<br />function parse_csv_quotes($matches)<br />{<br />    //anything inside the quotes that might be used to split the string into lines and fields later,<br />    //needs to be quoted. The only character we can guarantee as safe to use, because it will never appear in the unquoted text, is a CR<br />    //So we're going to use CR as a marker to make escape sequences for CR, LF, Quotes, and Commas.<br />    $str = str_replace("\r", "\rR", $matches[3]);<br />    $str = str_replace("\n", "\rN", $str);<br />    $str = str_replace('""', "\rQ", $str);<br />    $str = str_replace(',', "\rC", $str);<br /><br />    //The unquoted text is where commas and newlines are allowed, and where the splits will happen<br />    //We're going to remove all CRs from the unquoted text, by normalizing all line endings to just LF<br />    //This ensures us that the only place CR is used, is as the escape sequences for quoted text<br />    return preg_replace('/\r\n?/', "\n", $matches[1]) . $str;<br />}<br /><br />//split on comma and parse each field with a callback<br />function parse_csv_line($line)<br />{<br />    return array_map('parse_csv_field', explode(',', $line));<br />}<br /><br />//restore any csv-special characters that are part of the data<br />function parse_csv_field($field) {<br />    $field = str_replace("\rC", ',', $field);<br />    $field = str_replace("\rQ", '"', $field);<br />    $field = str_replace("\rN", "\n", $field);<br />    $field = str_replace("\rR", "\r", $field);<br />    return $field;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="88311">  <div class="votes">
    <div id="Vu88311">
    <a href="/manual/vote-note.php?id=88311&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88311">
    <a href="/manual/vote-note.php?id=88311&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88311" title="71% like this...">
    3
    </div>
  </div>
  <a href="#88311" class="name">
  <strong class="user"><em>daniel dot oconnor at gmail dot com</em></strong></a><a class="genanchor" href="#88311"> &para;</a><div class="date" title="2009-01-19 04:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88311">
<div class="phpcode"><code><span class="html">Don't have this? Ask fgetcsv() to do it for you.
<br />
<br />5.1.0+
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'str_getcsv'</span><span class="keyword">)) {
<br />    function </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">","</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$escape </span><span class="keyword">= </span><span class="string">"\\"</span><span class="keyword">) {
<br />        </span><span class="default">$fiveMBs </span><span class="keyword">= </span><span class="default">5 </span><span class="keyword">* </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">;
<br />        </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"php://temp/maxmemory:</span><span class="default">$fiveMBs</span><span class="string">"</span><span class="keyword">, </span><span class="string">'r+'</span><span class="keyword">);
<br />        </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">);
<br />        </span><span class="default">rewind</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />
<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">); </span><span class="comment">//  $escape only got added in 5.3.0
<br />
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />        return </span><span class="default">$data</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85733">  <div class="votes">
    <div id="Vu85733">
    <a href="/manual/vote-note.php?id=85733&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85733">
    <a href="/manual/vote-note.php?id=85733&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85733" title="70% like this...">
    4
    </div>
  </div>
  <a href="#85733" class="name">
  <strong class="user"><em>keananda at gmail dot com</em></strong></a><a class="genanchor" href="#85733"> &para;</a><div class="date" title="2008-09-15 04:29"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85733">
<div class="phpcode"><code><span class="html">For those who need this function but not yet installed in their environment, you can use my function bellow.<br /><br />You can parse your csv file into an associative array (by default) for each lines, or into an object.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">parse_csv</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    </span><span class="default">$delimiter </span><span class="keyword">= empty(</span><span class="default">$options</span><span class="keyword">[</span><span class="string">'delimiter'</span><span class="keyword">]) ? </span><span class="string">"," </span><span class="keyword">: </span><span class="default">$options</span><span class="keyword">[</span><span class="string">'delimiter'</span><span class="keyword">];<br />    </span><span class="default">$to_object </span><span class="keyword">= empty(</span><span class="default">$options</span><span class="keyword">[</span><span class="string">'to_object'</span><span class="keyword">]) ? </span><span class="default">false </span><span class="keyword">: </span><span class="default">true</span><span class="keyword">;<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">pr</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">);<br />    </span><span class="default">$field_names </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">));<br />    foreach (</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">) {<br />        </span><span class="comment">// Skip the empty line<br />        </span><span class="keyword">if (empty(</span><span class="default">$line</span><span class="keyword">)) continue;<br />        </span><span class="default">$fields </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">);<br />        </span><span class="default">$_res </span><span class="keyword">= </span><span class="default">$to_object </span><span class="keyword">? new </span><span class="default">stdClass </span><span class="keyword">: array();<br />        foreach (</span><span class="default">$field_names </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$f</span><span class="keyword">) {<br />            if (</span><span class="default">$to_object</span><span class="keyword">) {<br />                </span><span class="default">$_res</span><span class="keyword">-&gt;{</span><span class="default">$f</span><span class="keyword">} = </span><span class="default">$fields</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />            } else {<br />                </span><span class="default">$_res</span><span class="keyword">[</span><span class="default">$f</span><span class="keyword">] = </span><span class="default">$fields</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />            }<br />        }<br />        </span><span class="default">$res</span><span class="keyword">[] = </span><span class="default">$_res</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$res</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />NOTE:<br />Line number 1 of the csv file will be considered as header (field names).<br /><br />TODO:<br />- Enclosure handling<br />- Escape character handling<br />- Other features/enhancements as you need<br /><br />EXAMPLE USE:<br />Content of /path/to/file.csv:<br />CODE,COUNTRY<br />AD,Andorra<br />AE,United Arab Emirates<br />AF,Afghanistan<br />AG,Antigua and Barbuda<br /><br /><span class="default">&lt;?php<br />$arr_csv </span><span class="keyword">= </span><span class="default">parse_csv</span><span class="keyword">(</span><span class="string">"/path/to/file.csv"</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$arr_csv</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>// Output:<br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [CODE] =&gt; AD<br />            [COUNTRY] =&gt; Andorra<br />        )<br />    [1] =&gt; Array<br />        (<br />            [CODE] =&gt; AE<br />            [COUNTRY] =&gt; United Arab Emirates<br />        )<br />    [2] =&gt; Array<br />        (<br />            [CODE] =&gt; AF<br />            [COUNTRY] =&gt; Afghanistan<br />        )<br />    [3] =&gt; Array<br />        (<br />            [CODE] =&gt; AG<br />            [COUNTRY] =&gt; Antigua and Barbuda<br />        )<br />)<br /><br /><span class="default">&lt;?php<br />$obj_csv </span><span class="keyword">= </span><span class="default">parse_csv</span><span class="keyword">(</span><span class="string">"/path/to/file.csv"</span><span class="keyword">, array(</span><span class="string">"to_object" </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$obj_csv</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>// Output:<br />Array<br />(<br />    [0] =&gt; stdClass Object<br />        (<br />            [CODE] =&gt; AD<br />            [COUNTRY] =&gt; Andorra     <br />        )<br />    [1] =&gt; stdClass Object<br />        (<br />            [CODE] =&gt; AE<br />            [COUNTRY] =&gt; United Arab Emirates     <br />        )<br />    [2] =&gt; stdClass Object<br />        (<br />            [CODE] =&gt; AF<br />            [COUNTRY] =&gt; Afghanistan     <br />        )<br />    [3] =&gt; stdClass Object<br />        (<br />            [CODE] =&gt; AG<br />            [COUNTRY] =&gt; Antigua and Barbuda     <br />        )<br />    [4] =&gt; stdClass Object<br />        (<br />            [CODE] =&gt; <br />            [COUNTRY] =&gt; <br />        )<br />)<br /><br />// If you use character | (pipe) as delimiter in your csv file, use:<br /><span class="default">&lt;?php<br />$arr_csv </span><span class="keyword">= </span><span class="default">parse_csv</span><span class="keyword">(</span><span class="string">"/path/to/file.csv"</span><span class="keyword">, array(</span><span class="string">"delimiter"</span><span class="keyword">=&gt;</span><span class="string">"|"</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />==NSD==</span></code></div>
  </div>
 </div>
  <div class="note" id="111579">  <div class="votes">
    <div id="Vu111579">
    <a href="/manual/vote-note.php?id=111579&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111579">
    <a href="/manual/vote-note.php?id=111579&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111579" title="66% like this...">
    3
    </div>
  </div>
  <a href="#111579" class="name">
  <strong class="user"><em>V.Krishn</em></strong></a><a class="genanchor" href="#111579"> &para;</a><div class="date" title="2013-03-06 01:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111579">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />Note</span><span class="keyword">: </span><span class="default">The </span><span class="keyword">function </span><span class="default">trims all values unlike  str_getcsv </span><span class="keyword">(</span><span class="default">v5.3</span><span class="keyword">).<br /></span><span class="comment">/**<br />  * @link <a href="https://github.com/insteps/phputils" rel="nofollow" target="_blank">https://github.com/insteps/phputils</a> (for updated code)<br />  * Parse a CSV string into an array for php 4+.<br />  * @param string $input String<br />  * @param string $delimiter String<br />  * @param string $enclosure String<br />  * @return array<br />  */<br /></span><span class="keyword">function </span><span class="default">str_getcsv4</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">) {<br /><br />    if( ! </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/[</span><span class="default">$enclosure</span><span class="string">]/"</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">) ) {<br />      return (array)</span><span class="default">preg_replace</span><span class="keyword">(array(</span><span class="string">"/^\\s*/"</span><span class="keyword">, </span><span class="string">"/\\s*$/"</span><span class="keyword">), </span><span class="string">''</span><span class="keyword">, </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">));<br />    }<br /><br />    </span><span class="default">$token </span><span class="keyword">= </span><span class="string">"##"</span><span class="keyword">; </span><span class="default">$token2 </span><span class="keyword">= </span><span class="string">"::"</span><span class="keyword">;<br />    </span><span class="comment">//alternate tokens "\034\034", "\035\035", "%%";<br />    </span><span class="default">$t1 </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(array(</span><span class="string">"/\\\[</span><span class="default">$enclosure</span><span class="string">]/"</span><span class="keyword">, </span><span class="string">"/</span><span class="default">$enclosure</span><span class="string">{2}/"</span><span class="keyword">,<br />         </span><span class="string">"/[</span><span class="default">$enclosure</span><span class="string">]\\s*[</span><span class="default">$delimiter</span><span class="string">]\\s*[</span><span class="default">$enclosure</span><span class="string">]\\s*/"</span><span class="keyword">, </span><span class="string">"/\\s*[</span><span class="default">$enclosure</span><span class="string">]\\s*/"</span><span class="keyword">),<br />         array(</span><span class="default">$token2</span><span class="keyword">, </span><span class="default">$token2</span><span class="keyword">, </span><span class="default">$token</span><span class="keyword">, </span><span class="default">$token</span><span class="keyword">), </span><span class="default">trim</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">), </span><span class="default">$enclosure</span><span class="keyword">)));<br /><br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">, </span><span class="default">$t1</span><span class="keyword">);<br />    foreach(</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">) {<br />        if ( </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^</span><span class="keyword">{</span><span class="default">$delimiter</span><span class="keyword">}</span><span class="string">/"</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">) || </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/</span><span class="keyword">{</span><span class="default">$delimiter</span><span class="keyword">}</span><span class="string">$/"</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">) ) {<br />            </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">); </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/</span><span class="default">$delimiter</span><span class="string">/"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$token</span><span class="string">"</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]); }<br />    }<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">, </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$token</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">));<br />    return (array)</span><span class="default">preg_replace</span><span class="keyword">(array(</span><span class="string">"/^\\s/"</span><span class="keyword">, </span><span class="string">"/\\s$/"</span><span class="keyword">, </span><span class="string">"/</span><span class="default">$token2</span><span class="string">/"</span><span class="keyword">), array(</span><span class="string">''</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">), </span><span class="default">$a</span><span class="keyword">);<br /><br />}<br /><br />if ( ! </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'str_getcsv'</span><span class="keyword">)) {<br />  function </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">) {<br />    return </span><span class="default">str_getcsv4</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88353">  <div class="votes">
    <div id="Vu88353">
    <a href="/manual/vote-note.php?id=88353&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88353">
    <a href="/manual/vote-note.php?id=88353&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88353" title="66% like this...">
    7
    </div>
  </div>
  <a href="#88353" class="name">
  <strong class="user"><em>Jeremy</em></strong></a><a class="genanchor" href="#88353"> &para;</a><div class="date" title="2009-01-20 05:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88353">
<div class="phpcode"><code><span class="html">After using several methods in the past to create CSV strings without using files (disk IO sucks), I finally decided it's time to write a function to handle it all. This function could use some cleanup, and the variable type test might be overkill for what is needed, I haven't thought about it too much.
<br />
<br />Also, I took the liberty of replacing fields with certain data types with strings which I find much easier to work with. Some of you may not agree with those. Also, please note that the type "double" or float has been coded specifically for two digit precision because if I am using a float, it's most likely for currency.
<br />
<br />I am sure some of you out there would appreciate this function.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">str_putcsv</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$terminator </span><span class="keyword">= </span><span class="string">"\n"</span><span class="keyword">) {
<br />        </span><span class="comment"># First convert associative array to numeric indexed array
<br />        </span><span class="keyword">foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) </span><span class="default">$workArray</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;
<br />
<br />        </span><span class="default">$returnString </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;                 </span><span class="comment"># Initialize return string
<br />        </span><span class="default">$arraySize </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$workArray</span><span class="keyword">);     </span><span class="comment"># Get size of array
<br />        
<br />        </span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$arraySize</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />            </span><span class="comment"># Nested array, process nest item
<br />            </span><span class="keyword">if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$workArray</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])) {
<br />                </span><span class="default">$returnString </span><span class="keyword">.= </span><span class="default">str_putcsv</span><span class="keyword">(</span><span class="default">$workArray</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">, </span><span class="default">$terminator</span><span class="keyword">);
<br />            } else {
<br />                switch (</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$workArray</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])) {
<br />                    </span><span class="comment"># Manually set some strings
<br />                    </span><span class="keyword">case </span><span class="string">"NULL"</span><span class="keyword">:     </span><span class="default">$_spFormat </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">; break;
<br />                    case </span><span class="string">"boolean"</span><span class="keyword">:  </span><span class="default">$_spFormat </span><span class="keyword">= (</span><span class="default">$workArray</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] == </span><span class="default">true</span><span class="keyword">) ? </span><span class="string">'true'</span><span class="keyword">: </span><span class="string">'false'</span><span class="keyword">; break;
<br />                    </span><span class="comment"># Make sure sprintf has a good datatype to work with
<br />                    </span><span class="keyword">case </span><span class="string">"integer"</span><span class="keyword">:  </span><span class="default">$_spFormat </span><span class="keyword">= </span><span class="string">'%i'</span><span class="keyword">; break;
<br />                    case </span><span class="string">"double"</span><span class="keyword">:   </span><span class="default">$_spFormat </span><span class="keyword">= </span><span class="string">'%0.2f'</span><span class="keyword">; break;
<br />                    case </span><span class="string">"string"</span><span class="keyword">:   </span><span class="default">$_spFormat </span><span class="keyword">= </span><span class="string">'%s'</span><span class="keyword">; break;
<br />                    </span><span class="comment"># Unknown or invalid items for a csv - note: the datatype of array is already handled above, assuming the data is nested
<br />                    </span><span class="keyword">case </span><span class="string">"object"</span><span class="keyword">:
<br />                    case </span><span class="string">"resource"</span><span class="keyword">:
<br />                    default:         </span><span class="default">$_spFormat </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">; break;
<br />                }
<br />                                </span><span class="default">$returnString </span><span class="keyword">.= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%2$s'</span><span class="keyword">.</span><span class="default">$_spFormat</span><span class="keyword">.</span><span class="string">'%2$s'</span><span class="keyword">, </span><span class="default">$workArray</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$enclosure</span><span class="keyword">);
<br /></span><span class="default">$returnString </span><span class="keyword">.= (</span><span class="default">$i </span><span class="keyword">&lt; (</span><span class="default">$arraySize</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">)) ? </span><span class="default">$delimiter </span><span class="keyword">: </span><span class="default">$terminator</span><span class="keyword">;
<br />            }
<br />        }
<br />        </span><span class="comment"># Done the workload, return the output information
<br />        </span><span class="keyword">return </span><span class="default">$returnString</span><span class="keyword">;
<br />    }
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98088">  <div class="votes">
    <div id="Vu98088">
    <a href="/manual/vote-note.php?id=98088&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98088">
    <a href="/manual/vote-note.php?id=98088&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98088" title="64% like this...">
    7
    </div>
  </div>
  <a href="#98088" class="name">
  <strong class="user"><em>hpartidas at deuz dot net</em></strong></a><a class="genanchor" href="#98088"> &para;</a><div class="date" title="2010-05-25 09:50"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98088">
<div class="phpcode"><code><span class="html">I found myself wanting to parse a CSV and didn't have access to str_getcsv, so I wrote substitute for PHP &lt; 5.3, hope it helps someone out there stuck in the same situation.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'str_getcsv'</span><span class="keyword">)) { 
<br />    function </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$escape </span><span class="keyword">= </span><span class="string">'\\'</span><span class="keyword">, </span><span class="default">$eol </span><span class="keyword">= </span><span class="string">'\n'</span><span class="keyword">) { 
<br />        if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) &amp;&amp; !empty(</span><span class="default">$input</span><span class="keyword">)) { 
<br />            </span><span class="default">$output </span><span class="keyword">= array(); 
<br />            </span><span class="default">$tmp    </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$eol</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">,</span><span class="default">$input</span><span class="keyword">); 
<br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">) &amp;&amp; !empty(</span><span class="default">$tmp</span><span class="keyword">)) { 
<br />                while (list(</span><span class="default">$line_num</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">)) { 
<br />                    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$escape</span><span class="keyword">.</span><span class="default">$enclosure</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">)) {
<br />                        while (</span><span class="default">$strlen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">)) { 
<br />                            </span><span class="default">$pos_delimiter       </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="default">$delimiter</span><span class="keyword">); 
<br />                            </span><span class="default">$pos_enclosure_start </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="default">$enclosure</span><span class="keyword">); 
<br />                            if (
<br />                                </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$pos_delimiter</span><span class="keyword">) &amp;&amp; </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$pos_enclosure_start</span><span class="keyword">) 
<br />                                &amp;&amp; (</span><span class="default">$pos_enclosure_start </span><span class="keyword">&lt; </span><span class="default">$pos_delimiter</span><span class="keyword">)
<br />                                ) {
<br />                                </span><span class="default">$enclosed_str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">); 
<br />                                </span><span class="default">$pos_enclosure_end </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$enclosed_str</span><span class="keyword">,</span><span class="default">$enclosure</span><span class="keyword">); 
<br />                                </span><span class="default">$enclosed_str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$enclosed_str</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$pos_enclosure_end</span><span class="keyword">); 
<br />                                </span><span class="default">$output</span><span class="keyword">[</span><span class="default">$line_num</span><span class="keyword">][] = </span><span class="default">$enclosed_str</span><span class="keyword">; 
<br />                                </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$pos_enclosure_end</span><span class="keyword">+</span><span class="default">3</span><span class="keyword">; 
<br />                            } else {
<br />                                if (empty(</span><span class="default">$pos_delimiter</span><span class="keyword">) &amp;&amp; empty(</span><span class="default">$pos_enclosure_start</span><span class="keyword">)) {
<br />                                    </span><span class="default">$output</span><span class="keyword">[</span><span class="default">$line_num</span><span class="keyword">][] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);
<br />                                    </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">);
<br />                                } else {
<br />                                    </span><span class="default">$output</span><span class="keyword">[</span><span class="default">$line_num</span><span class="keyword">][] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$pos_delimiter</span><span class="keyword">);
<br />                                    </span><span class="default">$offset </span><span class="keyword">= (
<br />                                                !empty(</span><span class="default">$pos_enclosure_start</span><span class="keyword">) 
<br />                                                &amp;&amp; (</span><span class="default">$pos_enclosure_start </span><span class="keyword">&lt; </span><span class="default">$pos_delimiter</span><span class="keyword">)
<br />                                                )
<br />                                                ?</span><span class="default">$pos_enclosure_start
<br />                                                </span><span class="keyword">:</span><span class="default">$pos_delimiter</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">; 
<br />                                } 
<br />                            } 
<br />                            </span><span class="default">$line </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="default">$offset</span><span class="keyword">); 
<br />                        } 
<br />                    } else { 
<br />                        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$delimiter</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">);
<br />    
<br />                        </span><span class="comment">/*
<br />                         * Validating against pesky extra line breaks creating false rows.
<br />                         */
<br />                        </span><span class="keyword">if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">) &amp;&amp; !empty(</span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) {
<br />                            </span><span class="default">$output</span><span class="keyword">[</span><span class="default">$line_num</span><span class="keyword">] = </span><span class="default">$line</span><span class="keyword">;
<br />                        }  
<br />                    } 
<br />                } 
<br />                return </span><span class="default">$output</span><span class="keyword">; 
<br />            } else { 
<br />                return </span><span class="default">false</span><span class="keyword">; 
<br />            } 
<br />        } else { 
<br />            return </span><span class="default">false</span><span class="keyword">; 
<br />        } 
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120361">  <div class="votes">
    <div id="Vu120361">
    <a href="/manual/vote-note.php?id=120361&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120361">
    <a href="/manual/vote-note.php?id=120361&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120361" title="62% like this...">
    2
    </div>
  </div>
  <a href="#120361" class="name">
  <strong class="user"><em>Xkang</em></strong></a><a class="genanchor" href="#120361"> &para;</a><div class="date" title="2016-12-21 01:25"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120361">
<div class="phpcode"><code><span class="html">how to solve the UTF-8 BOM's problem<br />如何处理UTF-8编码的CSV文件中的BOM问题<br />$bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ); //define bom<br />$f = file_get_contents('a.csv'); //open the CSV file<br />#$csv = str_getcsv($f); //it will have bom  这样会出现bom的问题<br />$csv = str_getcsv(str_replace($bom,'',$f)); //replace the bom 替换掉bom<br />var_dump($csv);  //dump 输出</span></code></div>
  </div>
 </div>
  <div class="note" id="89619">  <div class="votes">
    <div id="Vu89619">
    <a href="/manual/vote-note.php?id=89619&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89619">
    <a href="/manual/vote-note.php?id=89619&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89619" title="60% like this...">
    1
    </div>
  </div>
  <a href="#89619" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#89619"> &para;</a><div class="date" title="2009-03-16 10:02"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89619">
<div class="phpcode"><code><span class="html">For some reason o'connor's code only reads one line of a csv for me... I had to replace the line <br /><br />      $data = fgetcsv($fp, 1000, $delimiter, $enclosure); //  $escape only got added in 5.3.0 <br /><br />with this:<br /><br />      $data;<br />      while (!feof($fp))<br />      {<br />        $data[] = fgetcsv($fp, 0, $delimiter, $enclosure); //  $escape only got added in 5.3.0<br />      }<br /><br />...to get all of the data out of my string (some post data pasted into a textbox and processed only with stripslashes).</span></code></div>
  </div>
 </div>
  <div class="note" id="109948">  <div class="votes">
    <div id="Vu109948">
    <a href="/manual/vote-note.php?id=109948&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109948">
    <a href="/manual/vote-note.php?id=109948&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109948" title="57% like this...">
    1
    </div>
  </div>
  <a href="#109948" class="name">
  <strong class="user"><em>khelibert at gmail dot com</em></strong></a><a class="genanchor" href="#109948"> &para;</a><div class="date" title="2012-09-04 04:42"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109948">
<div class="phpcode"><code><span class="html">I've written this to handle :<br />- fields with or without enclosure;<br />- escape and enclosure characters using the same character (ie &lt;&lt;"&gt;&gt; in Excel) <br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />             * Converts a csv file into an array of lines and columns.<br />             * khelibert@gmail.com<br />             * @param $fileContent String<br />             * @param string $escape String<br />             * @param string $enclosure String<br />             * @param string $delimiter String<br />             * @return array<br />             */<br />            </span><span class="keyword">function </span><span class="default">csvToArray</span><span class="keyword">(</span><span class="default">$fileContent</span><span class="keyword">,</span><span class="default">$escape </span><span class="keyword">= </span><span class="string">'\\'</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">';'</span><span class="keyword">)<br />            {<br />                </span><span class="default">$lines </span><span class="keyword">= array();<br />                </span><span class="default">$fields </span><span class="keyword">= array();<br /><br />                if(</span><span class="default">$escape </span><span class="keyword">== </span><span class="default">$enclosure</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$escape </span><span class="keyword">= </span><span class="string">'\\'</span><span class="keyword">;<br />                    </span><span class="default">$fileContent </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'\\'</span><span class="keyword">,</span><span class="default">$enclosure</span><span class="keyword">.</span><span class="default">$enclosure</span><span class="keyword">,</span><span class="string">"\r\n"</span><span class="keyword">,</span><span class="string">"\r"</span><span class="keyword">),<br />                                array(</span><span class="string">'\\\\'</span><span class="keyword">,</span><span class="default">$escape</span><span class="keyword">.</span><span class="default">$enclosure</span><span class="keyword">,</span><span class="string">"\\n"</span><span class="keyword">,</span><span class="string">"\\n"</span><span class="keyword">),</span><span class="default">$fileContent</span><span class="keyword">);<br />                }<br />                else<br />                    </span><span class="default">$fileContent </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"\r\n"</span><span class="keyword">,</span><span class="string">"\r"</span><span class="keyword">),array(</span><span class="string">"\\n"</span><span class="keyword">,</span><span class="string">"\\n"</span><span class="keyword">),</span><span class="default">$fileContent</span><span class="keyword">);<br /><br />                </span><span class="default">$nb </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$fileContent</span><span class="keyword">);<br />                </span><span class="default">$field </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />                </span><span class="default">$inEnclosure </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                </span><span class="default">$previous </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />                for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$nb</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />                {<br />                    </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$fileContent</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />                    if(</span><span class="default">$c </span><span class="keyword">=== </span><span class="default">$enclosure</span><span class="keyword">)<br />                    {<br />                        if(</span><span class="default">$previous </span><span class="keyword">!== </span><span class="default">$escape</span><span class="keyword">)<br />                            </span><span class="default">$inEnclosure </span><span class="keyword">^= </span><span class="default">true</span><span class="keyword">;<br />                        else<br />                            </span><span class="default">$field </span><span class="keyword">.= </span><span class="default">$enclosure</span><span class="keyword">;<br />                    }<br />                    else if(</span><span class="default">$c </span><span class="keyword">=== </span><span class="default">$escape</span><span class="keyword">)<br />                    {<br />                        </span><span class="default">$next </span><span class="keyword">= </span><span class="default">$fileContent</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">];<br />                        if(</span><span class="default">$next </span><span class="keyword">!= </span><span class="default">$enclosure </span><span class="keyword">&amp;&amp; </span><span class="default">$next </span><span class="keyword">!= </span><span class="default">$escape</span><span class="keyword">)<br />                            </span><span class="default">$field </span><span class="keyword">.= </span><span class="default">$escape</span><span class="keyword">;<br />                    }<br />                    else if(</span><span class="default">$c </span><span class="keyword">=== </span><span class="default">$delimiter</span><span class="keyword">)<br />                    {<br />                        if(</span><span class="default">$inEnclosure</span><span class="keyword">)<br />                            </span><span class="default">$field </span><span class="keyword">.= </span><span class="default">$delimiter</span><span class="keyword">;<br />                        else<br />                        {<br />                            </span><span class="comment">//end of the field<br />                            </span><span class="default">$fields</span><span class="keyword">[] = </span><span class="default">$field</span><span class="keyword">;<br />                            </span><span class="default">$field </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />                        }<br />                    }<br />                    else if(</span><span class="default">$c </span><span class="keyword">=== </span><span class="string">"\n"</span><span class="keyword">)<br />                    {<br />                        </span><span class="default">$fields</span><span class="keyword">[] = </span><span class="default">$field</span><span class="keyword">;<br />                        </span><span class="default">$field </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />                        </span><span class="default">$lines</span><span class="keyword">[] = </span><span class="default">$fields</span><span class="keyword">;<br />                        </span><span class="default">$fields </span><span class="keyword">= array();<br />                    }<br />                    else<br />                        </span><span class="default">$field </span><span class="keyword">.= </span><span class="default">$c</span><span class="keyword">;<br />                    </span><span class="default">$previous </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">;<br />                }<br />                </span><span class="comment">//we add the last element<br />                </span><span class="keyword">if(</span><span class="default">true </span><span class="keyword">|| </span><span class="default">$field </span><span class="keyword">!== </span><span class="string">''</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$fields</span><span class="keyword">[] = </span><span class="default">$field</span><span class="keyword">;<br />                    </span><span class="default">$lines</span><span class="keyword">[] = </span><span class="default">$fields</span><span class="keyword">;<br />                }<br />                return </span><span class="default">$lines</span><span class="keyword">;<br />            }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117585">  <div class="votes">
    <div id="Vu117585">
    <a href="/manual/vote-note.php?id=117585&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117585">
    <a href="/manual/vote-note.php?id=117585&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117585" title="54% like this...">
    1
    </div>
  </div>
  <a href="#117585" class="name">
  <strong class="user"><em>peter dot mlich at volny dot cz</em></strong></a><a class="genanchor" href="#117585"> &para;</a><div class="date" title="2015-07-02 10:21"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117585">
<div class="phpcode"><code><span class="html">&gt; 49 durik at 3ilab dot net /  4 years ago<br />$rows = str_getcsv($csv_data, "\n");<br />- bug, data in csv can have "\n"<br />'aaa','bb<br />b','ccc'</span></code></div>
  </div>
 </div>
  <div class="note" id="117366">  <div class="votes">
    <div id="Vu117366">
    <a href="/manual/vote-note.php?id=117366&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117366">
    <a href="/manual/vote-note.php?id=117366&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117366" title="52% like this...">
    1
    </div>
  </div>
  <a href="#117366" class="name">
  <strong class="user"><em>pasmanik at gmail dot com</em></strong></a><a class="genanchor" href="#117366"> &para;</a><div class="date" title="2015-05-28 08:08"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117366">
<div class="phpcode"><code><span class="html">I prepared some better function for parsing CSV string.<br /><br />function csv_to_array($string='', $row_delimiter=PHP_EOL, $delimiter = "," , $enclosure = '"' , $escape = "\\" )<br />{<br />    $rows = array_filter(explode($row_delimiter, $string));<br />    $header = NULL;<br />    $data = array();<br /><br />    foreach($rows as $row)<br />    {<br />        $row = str_getcsv ($row, $delimiter, $enclosure , $escape);<br /><br />        if(!$header)<br />            $header = $row;<br />        else<br />            $data[] = array_combine($header, $row);<br />    }<br /><br />    return $data;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="128969">  <div class="votes">
    <div id="Vu128969">
    <a href="/manual/vote-note.php?id=128969&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128969">
    <a href="/manual/vote-note.php?id=128969&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128969" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128969" class="name">
  <strong class="user"><em>hans at loltek dot net</em></strong></a><a class="genanchor" href="#128969"> &para;</a><div class="date" title="2023-10-18 10:17"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128969">
<div class="phpcode"><code><span class="html">old MacOS (up to ~2001) and old Office For MacOS (up to 2007? I think) use carriage-return for newlines, <br />Microsoft Windows use carriage-return+line-feed for newlines,<br />Unix (Linux and modern MacOS) use line-feeds, <br />Some systems use BOM/byte-order-masks just to say they use UTF-8, i've even encountered one-BOM-per-CSV-row!<br /><br />For a csv-file parser handling all the above cases, I wrote:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">parse_csv</span><span class="keyword">(</span><span class="default">string $csv</span><span class="keyword">, </span><span class="default">string $separator </span><span class="keyword">= </span><span class="string">","</span><span class="keyword">): array<br />{<br />    </span><span class="default">$csv </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">(<br />        </span><span class="default">$csv</span><span class="keyword">,<br />        [<br />            </span><span class="string">"\xEF\xBB\xBF" </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">, </span><span class="comment">// remove UTF-8 byte order masks, if present<br />            </span><span class="string">"\r\n" </span><span class="keyword">=&gt; </span><span class="string">"\n"</span><span class="keyword">, </span><span class="comment">// Windows CrLf=&gt; Unix Lf<br />            </span><span class="string">"\r" </span><span class="keyword">=&gt; </span><span class="string">"\n" </span><span class="comment">// old-MacOS Cr =&gt; Unix Lf<br />            // (both modern MacOS and Linux use Lf .. Windows is the only outlier)<br />        </span><span class="keyword">]<br />    );<br />    </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$csv</span><span class="keyword">);<br />    </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">), </span><span class="default">$separator</span><span class="keyword">);<br />    </span><span class="default">$ret </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$lineno </span><span class="keyword">=&gt; </span><span class="default">$line</span><span class="keyword">) {<br />        if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">) &lt; </span><span class="default">1</span><span class="keyword">) {<br />            </span><span class="comment">// ... probably malformed csv, but we'll allow it<br />            </span><span class="keyword">continue;<br />        }<br />        </span><span class="default">$parsed </span><span class="keyword">= </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">, </span><span class="default">$separator</span><span class="keyword">);<br />        if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$parsed</span><span class="keyword">) !== </span><span class="default">count</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">)) {<br />            throw new </span><span class="default">\RuntimeException</span><span class="keyword">(</span><span class="string">"error on csv line #</span><span class="keyword">{</span><span class="default">$lineno</span><span class="keyword">}</span><span class="string">: count mismatch:" </span><span class="keyword">. </span><span class="default">count</span><span class="keyword">(</span><span class="default">$parsed</span><span class="keyword">) . </span><span class="string">' !== ' </span><span class="keyword">. </span><span class="default">count</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">) . </span><span class="string">": " </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">([<br />                </span><span class="string">'error' </span><span class="keyword">=&gt; </span><span class="string">'count mismatch'</span><span class="keyword">,<br />                </span><span class="string">'keys' </span><span class="keyword">=&gt; </span><span class="default">$keys</span><span class="keyword">,<br />                </span><span class="string">'parsed' </span><span class="keyword">=&gt; </span><span class="default">$parsed</span><span class="keyword">,<br />                </span><span class="string">'line' </span><span class="keyword">=&gt; </span><span class="default">$line<br />            </span><span class="keyword">], </span><span class="default">true</span><span class="keyword">));<br />        }<br />        </span><span class="default">$ret</span><span class="keyword">[] = </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$parsed</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129904">  <div class="votes">
    <div id="Vu129904">
    <a href="/manual/vote-note.php?id=129904&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129904">
    <a href="/manual/vote-note.php?id=129904&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129904" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129904" class="name">
  <strong class="user"><em>nicolasbonnici at gmail dot com</em></strong></a><a class="genanchor" href="#129904"> &para;</a><div class="date" title="2024-12-07 11:31"><strong>9 months ago</strong></div>
  <div class="text" id="Hcom129904">
<div class="phpcode"><code><span class="html">Better way to get an associative key value array output.<br /><br />$output = [];<br />$lines = array_values(explode(PHP_EOL, $your_csv_string));<br />$headers = str_getcsv(array_shift($lines));<br />    foreach ($lines as $line) {<br />        $parsedLine = str_getcsv($line);<br />        if (count($headers) !== count($parsedLine)) {<br />            continue;<br />        }<br />        $output[] = array_combine($headers, $parsedLine);<br />}<br />var_dump($output);</span></code></div>
  </div>
 </div>
  <div class="note" id="128960">  <div class="votes">
    <div id="Vu128960">
    <a href="/manual/vote-note.php?id=128960&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128960">
    <a href="/manual/vote-note.php?id=128960&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128960" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128960" class="name">
  <strong class="user"><em>manngo</em></strong></a><a class="genanchor" href="#128960"> &para;</a><div class="date" title="2023-10-15 06:24"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128960">
<div class="phpcode"><code><span class="html">I can’t see this mentioned in the description, but it appears that the fields will be trimmed slightly of trailing line breaks.<br /><br />In the following example:<br /><br /><span class="default">&lt;?php<br />    $string </span><span class="keyword">= </span><span class="string">"\nPHP\r\n,Java\nScript\r\n\r\n,Fortran\n,Cobol\n\n,\nSwift\r\n\r\n\r\n"</span><span class="keyword">;<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />    foreach(</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$d</span><span class="keyword">) print </span><span class="string">"[</span><span class="default">$d</span><span class="string">]"</span><span class="keyword">;<br /><br /></span><span class="comment">/*  Result:<br />    ================================================<br />    [<br />    PHP][Java<br />    Script<br />    ][Fortran][Cobol<br />    ][<br />    Swift<br />    ]<br />    ================================================ */<br /></span><span class="default">?&gt;<br /></span><br />You’ll see:<br /><br />-    a leading line break is retained; a line break in the rest of the field is also retained<br />-    one trailing line break is removed; any more are retained<br />-    a line break at the end of the string is also removed; this means that two trailing line breaks at the end are removed<br />-    a line break can be a unix/macos line break (\n) or a windows line beak (\r\n)<br /><br />Tested on my Macintosh, so I’m not sure how universal this is.<br /><br />Among other things, it means you can read the file with the file() function without having to include the FILE_IGNORE_NEW_LINES flag.</span></code></div>
  </div>
 </div>
  <div class="note" id="129150">  <div class="votes">
    <div id="Vu129150">
    <a href="/manual/vote-note.php?id=129150&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129150">
    <a href="/manual/vote-note.php?id=129150&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129150" title="no votes...">
    0
    </div>
  </div>
  <a href="#129150" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#129150"> &para;</a><div class="date" title="2024-01-09 11:33"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129150">
<div class="phpcode"><code><span class="html">For maximum compatibility with standard (RFC-4180) CSV files, remember that the proprietary-escape mechanism should be disabled. i.e. set the optional 5th parameter to ""  (the empty string).</span></code></div>
  </div>
 </div>
  <div class="note" id="127865">  <div class="votes">
    <div id="Vu127865">
    <a href="/manual/vote-note.php?id=127865&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127865">
    <a href="/manual/vote-note.php?id=127865&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127865" title="no votes...">
    0
    </div>
  </div>
  <a href="#127865" class="name">
  <strong class="user"><em>Wade Rossmann</em></strong></a><a class="genanchor" href="#127865"> &para;</a><div class="date" title="2022-10-26 09:34"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127865">
<div class="phpcode"><code><span class="html">For completeness, here is a userspace str_putcsv() that is fully compatible with fgetcsv() and fputcsv()'s arguments. Namely $escape and $eol, which all others seem to be omitting.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">str_putcsv</span><span class="keyword">(<br />    array </span><span class="default">$fields</span><span class="keyword">,<br />    </span><span class="default">string $separator </span><span class="keyword">= </span><span class="string">","</span><span class="keyword">,<br />    </span><span class="default">string $enclosure </span><span class="keyword">= </span><span class="string">"\""</span><span class="keyword">,<br />    </span><span class="default">string $escape </span><span class="keyword">= </span><span class="string">"\\"</span><span class="keyword">,<br />    </span><span class="default">string $eol </span><span class="keyword">= </span><span class="string">"\n"<br /></span><span class="keyword">) {<br />    return </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$separator</span><span class="keyword">,<br />        </span><span class="default">array_map</span><span class="keyword">(<br />            function(</span><span class="default">$a</span><span class="keyword">)use(</span><span class="default">$enclosure</span><span class="keyword">, </span><span class="default">$escape</span><span class="keyword">) {<br />                </span><span class="default">$type </span><span class="keyword">= </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />                switch(</span><span class="default">$type</span><span class="keyword">) {<br />                    case </span><span class="string">'integer'</span><span class="keyword">: return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%d'</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">);<br />                    case </span><span class="string">'double'</span><span class="keyword">:  return </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%0.'</span><span class="keyword">.</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'precision'</span><span class="keyword">).</span><span class="string">'f'</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">), </span><span class="string">'0'</span><span class="keyword">);<br />                    case </span><span class="string">'boolean'</span><span class="keyword">: return ( </span><span class="default">$a </span><span class="keyword">? </span><span class="string">'true' </span><span class="keyword">: </span><span class="string">'false' </span><span class="keyword">);<br />                    case </span><span class="string">'NULL'</span><span class="keyword">:    return </span><span class="string">''</span><span class="keyword">;<br />                    case </span><span class="string">'string'</span><span class="keyword">:<br />                        return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'"%s"'</span><span class="keyword">, </span><span class="default">str_replace</span><span class="keyword">(<br />                            [</span><span class="default">$escape</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">],<br />                            [</span><span class="default">$escape</span><span class="keyword">.</span><span class="default">$escape</span><span class="keyword">, </span><span class="default">$escape</span><span class="keyword">.</span><span class="default">$enclosure</span><span class="keyword">],<br />                            </span><span class="default">$a<br />                        </span><span class="keyword">));<br />                    default: throw new </span><span class="default">TypeError</span><span class="keyword">(</span><span class="string">"Cannot stringify type: </span><span class="default">$type</span><span class="string">"</span><span class="keyword">);<br />                }<br />            },<br />            </span><span class="default">$fields<br />        </span><span class="keyword">)<br />    ) . </span><span class="default">$eol</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125941">  <div class="votes">
    <div id="Vu125941">
    <a href="/manual/vote-note.php?id=125941&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125941">
    <a href="/manual/vote-note.php?id=125941&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125941" title="100% like this...">
    2
    </div>
  </div>
  <a href="#125941" class="name">
  <strong class="user"><em>ivijan dot stefan at gmail dot com</em></strong></a><a class="genanchor" href="#125941"> &para;</a><div class="date" title="2021-03-18 10:43"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125941">
<div class="phpcode"><code><span class="html">Imagine a situation where you need a function that works with both URL and comma delimited text.<br /><br />This is exactly the function that works like that using str_getcsv(). Just simply insert a CSV URL or comma separated text and it work nicely.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">parse_csv</span><span class="keyword">( </span><span class="default">$filename_or_text</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">=</span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">=</span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$linebreak</span><span class="keyword">=</span><span class="string">"\n" </span><span class="keyword">)<br />{<br />    </span><span class="default">$return </span><span class="keyword">= array();<br />    <br />    if(</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$csv </span><span class="keyword">= (</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$filename_or_text</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_URL</span><span class="keyword">) ? </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename_or_text</span><span class="keyword">) : </span><span class="default">$filename_or_text</span><span class="keyword">)))<br />    {<br />        </span><span class="default">$csv </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$csv</span><span class="keyword">);<br />        </span><span class="default">$csv </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$csv</span><span class="keyword">, </span><span class="string">'UTF-16LE'</span><span class="keyword">);   <br />        <br />        foreach(</span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$csv</span><span class="keyword">, </span><span class="default">$linebreak</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">) as </span><span class="default">$row</span><span class="keyword">){<br />            </span><span class="default">$col </span><span class="keyword">= </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">);<br />            </span><span class="default">$col </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'trim'</span><span class="keyword">, </span><span class="default">$col</span><span class="keyword">);<br />            </span><span class="default">$return</span><span class="keyword">[] = </span><span class="default">$col</span><span class="keyword">;<br />        }<br />    }<br />    else<br />    {<br />        throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'Can not open the file.'</span><span class="keyword">);<br />        </span><span class="default">$return </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    }<br />    <br />    return </span><span class="default">$return</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125719">  <div class="votes">
    <div id="Vu125719">
    <a href="/manual/vote-note.php?id=125719&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125719">
    <a href="/manual/vote-note.php?id=125719&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125719" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125719" class="name">
  <strong class="user"><em>txxllm at hotmail dot com</em></strong></a><a class="genanchor" href="#125719"> &para;</a><div class="date" title="2021-01-25 06:05"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125719">
<div class="phpcode"><code><span class="html">Sometimes the enclosure parameter of the str_getcsv function doesn't work, so I wrote a function that is equivalent to the function<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />     * @param string $input<br />     * @param string $delimiter<br />     * @param string $enclosure<br />     * @param string $escape<br />     * @return array<br />     * @author TXX<br />     * @date   2021/1/25 15:03<br />     */<br />    </span><span class="keyword">function </span><span class="default">my_str_getcsv</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$escape </span><span class="keyword">= </span><span class="string">'\\'</span><span class="keyword">) {<br />        </span><span class="default">$output </span><span class="keyword">= array();<br /><br />        if (empty(</span><span class="default">$input</span><span class="keyword">) || !</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)) {<br />            return </span><span class="default">$output</span><span class="keyword">;<br />        }<br /><br />        if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">. </span><span class="default">$escape </span><span class="keyword">. </span><span class="default">$enclosure </span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">)) {<br />            while (</span><span class="default">$strlen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)) {<br />                </span><span class="default">$pos_delimiter       </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">);    </span><span class="comment">//分隔符出现位置<br />                </span><span class="default">$pos_enclosure_start </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">);    </span><span class="comment">//封闭符-开始出现位置<br /><br />                //有封闭符并封闭符在分隔符之前<br />                </span><span class="keyword">if (</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$pos_delimiter</span><span class="keyword">) &amp;&amp; </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$pos_enclosure_start</span><span class="keyword">) &amp;&amp; </span><span class="default">$pos_enclosure_start </span><span class="keyword">&lt; </span><span class="default">$pos_delimiter</span><span class="keyword">) {<br />                    </span><span class="default">$pos_enclosure_start </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">;<br />                    </span><span class="default">$enclosed_str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$pos_enclosure_start</span><span class="keyword">);    </span><span class="comment">//封闭字符串-开始<br />                    </span><span class="default">$pos_enclosure_end </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$enclosed_str</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">);    </span><span class="comment">//封闭符-结尾封闭字符串-开始中出现位置<br />                    </span><span class="default">$pos_enclosure_end </span><span class="keyword">+= </span><span class="default">$pos_enclosure_start</span><span class="keyword">;    </span><span class="comment">//封闭符-结尾在原始数据中出现位置<br /><br />                    </span><span class="keyword">if (</span><span class="default">$pos_enclosure_end </span><span class="keyword">&lt;  </span><span class="default">$pos_delimiter</span><span class="keyword">) {<br />                        </span><span class="comment">//封闭符-结束在分隔符之前,无需进行封闭<br />                        </span><span class="default">$output</span><span class="keyword">[] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos_delimiter</span><span class="keyword">);<br />                        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$pos_delimiter </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />                    } else {<br />                        </span><span class="comment">//封闭符-结束在分隔符之后,需要封闭<br />                        </span><span class="default">$pos_enclosure_end </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">;<br />                        </span><span class="default">$before_enclosed_str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos_enclosure_end</span><span class="keyword">);<br />                        </span><span class="default">$enclosed_str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$pos_enclosure_end</span><span class="keyword">);    </span><span class="comment">//封闭字符串之后的字符串<br /><br />                        </span><span class="default">$enclosed_arr </span><span class="keyword">= </span><span class="default">my_str_getcsv</span><span class="keyword">(</span><span class="default">$enclosed_str</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">);    </span><span class="comment">//将封闭之后的字符串执行自身<br />                        </span><span class="default">$enclosed_arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">$before_enclosed_str </span><span class="keyword">. </span><span class="default">$enclosed_arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br /><br />                        </span><span class="default">$output </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">$enclosed_arr</span><span class="keyword">);<br />                        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);    </span><span class="comment">//光标移至结尾<br />                    </span><span class="keyword">}<br />                } else {<br />                    </span><span class="comment">//无封闭<br />                    </span><span class="keyword">if (!</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$pos_delimiter</span><span class="keyword">)) {<br />                        </span><span class="comment">//无分隔符,直接将字符串加入输出数组<br />                        </span><span class="default">$output</span><span class="keyword">[] = </span><span class="default">$input</span><span class="keyword">;<br />                        </span><span class="comment">//光标移至结尾<br />                        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />                    } else if (</span><span class="default">$input </span><span class="keyword">== </span><span class="default">$delimiter</span><span class="keyword">) {<br />                        </span><span class="comment">//如果字符串只剩下分隔符,需保存'',''<br />                        </span><span class="default">$output </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, [</span><span class="string">''</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">]);<br />                        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$pos_delimiter</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;    </span><span class="comment">//光标移至分隔符后一位<br />                    </span><span class="keyword">} else {<br />                        </span><span class="default">$output</span><span class="keyword">[] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos_delimiter</span><span class="keyword">);    </span><span class="comment">//将分割符之前的数据<br />                        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$pos_delimiter</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;    </span><span class="comment">//光标移至分隔符后一位<br />                    </span><span class="keyword">}<br />                }<br />                </span><span class="comment">//将字符串更新至光标位置<br />                </span><span class="default">$input </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">$offset</span><span class="keyword">);<br />            }<br />        } else {<br />            </span><span class="comment">//字符串中不存在封闭符,直接通过分隔符分割<br />            </span><span class="default">$input </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">. </span><span class="default">$escape </span><span class="keyword">. </span><span class="default">$delimiter </span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">);<br /><br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)) {<br />                </span><span class="default">$output </span><span class="keyword">= </span><span class="default">$input</span><span class="keyword">;<br />            }<br />        }<br /><br />        return </span><span class="default">$output</span><span class="keyword">;<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124893">  <div class="votes">
    <div id="Vu124893">
    <a href="/manual/vote-note.php?id=124893&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124893">
    <a href="/manual/vote-note.php?id=124893&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124893" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124893" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124893"> &para;</a><div class="date" title="2020-04-09 06:58"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124893">
<div class="phpcode"><code><span class="html">Note that the function does NOT remove the escaping characters. If you do<br /><br /><span class="default">&lt;?php<br />str_getcsv</span><span class="keyword">(</span><span class="string">'"abc\"abc"'</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />you'll get an array with a string(8) "abc\"abc", the \ will stay.</span></code></div>
  </div>
 </div>
  <div class="note" id="111577">  <div class="votes">
    <div id="Vu111577">
    <a href="/manual/vote-note.php?id=111577&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111577">
    <a href="/manual/vote-note.php?id=111577&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111577" title="50% like this...">
    0
    </div>
  </div>
  <a href="#111577" class="name">
  <strong class="user"><em>V.Krishn</em></strong></a><a class="genanchor" href="#111577"> &para;</a><div class="date" title="2013-03-06 01:20"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111577">
<div class="phpcode"><code><span class="html">Note: The function trims all values unlike  str_getcsv (v5.3).<br />/**<br />  * @link <a href="https://github.com/insteps/phputils" rel="nofollow" target="_blank">https://github.com/insteps/phputils</a> (for updated code)<br />  * Parse a CSV string into an array for php 4+.<br />  * @param string $input String<br />  * @param string $delimiter String<br />  * @param string $enclosure String<br />  * @return array<br />  */<br />function str_getcsv4($input, $delimiter = ',', $enclosure = '"') {<br /><br />    if( ! preg_match("/[$enclosure]/", $input) ) {<br />      return (array)preg_replace(array("/^\\s*/", "/\\s*$/"), '', explode($delimiter, $input));<br />    }<br /><br />    $token = "##"; $token2 = "::";<br />    //alternate tokens "\034\034", "\035\035", "%%";<br />    $t1 = preg_replace(array("/\\\[$enclosure]/", "/$enclosure{2}/",<br />         "/[$enclosure]\\s*[$delimiter]\\s*[$enclosure]\\s*/", "/\\s*[$enclosure]\\s*/"),<br />         array($token2, $token2, $token, $token), trim(trim(trim($input), $enclosure)));<br /><br />    $a = explode($token, $t1);<br />    foreach($a as $k=&gt;$v) {<br />        if ( preg_match("/^{$delimiter}/", $v) || preg_match("/{$delimiter}$/", $v) ) {<br />            $a[$k] = trim($v, $delimiter); $a[$k] = preg_replace("/$delimiter/", "$token", $a[$k]); }<br />    }<br />    $a = explode($token, implode($token, $a));<br />    return (array)preg_replace(array("/^\\s/", "/\\s$/", "/$token2/"), array('', '', $enclosure), $a);<br /><br />}<br /><br />if ( ! function_exists('str_getcsv')) {<br />  function str_getcsv($input, $delimiter = ',', $enclosure = '"') {<br />    return str_getcsv4($input, $delimiter, $enclosure);<br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="106674">  <div class="votes">
    <div id="Vu106674">
    <a href="/manual/vote-note.php?id=106674&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106674">
    <a href="/manual/vote-note.php?id=106674&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106674" title="50% like this...">
    0
    </div>
  </div>
  <a href="#106674" class="name">
  <strong class="user"><em>xoneca at gmail dot com</em></strong></a><a class="genanchor" href="#106674"> &para;</a><div class="date" title="2011-11-27 04:26"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106674">
<div class="phpcode"><code><span class="html">Note that this function can also be used to parse other types of constructions. For example, I have used to parse .htaccess AddDescription lines:<br /><br />    AddDescription "My description to the file." filename.jpg<br /><br />Those lines can be parsed like this:<br /><br /><span class="default">&lt;?php<br /><br />$line </span><span class="keyword">= </span><span class="string">'AddDescription "My description to the file." filename.jpg'</span><span class="keyword">;<br /><br /></span><span class="default">$parsed </span><span class="keyword">= </span><span class="default">str_getcsv</span><span class="keyword">(<br />    </span><span class="default">$line</span><span class="keyword">, </span><span class="comment"># Input line<br />    </span><span class="string">' '</span><span class="keyword">,   </span><span class="comment"># Delimiter<br />    </span><span class="string">'"'</span><span class="keyword">,   </span><span class="comment"># Enclosure<br />    </span><span class="string">'\\'   </span><span class="comment"># Escape char<br /></span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$parsed </span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The output:<br /><br />array(3) {<br />  [0]=&gt;<br />  string(14) "AddDescription"<br />  [1]=&gt;<br />  string(27) "My description to the file."<br />  [2]=&gt;<br />  string(12) "filename.jpg"<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="88773">  <div class="votes">
    <div id="Vu88773">
    <a href="/manual/vote-note.php?id=88773&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88773">
    <a href="/manual/vote-note.php?id=88773&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88773" title="50% like this...">
    0
    </div>
  </div>
  <a href="#88773" class="name">
  <strong class="user"><em>dave_walter at NOSPAM dot yahoo dot com</em></strong></a><a class="genanchor" href="#88773"> &para;</a><div class="date" title="2009-02-06 03:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88773">
<div class="phpcode"><code><span class="html">Drawing inspiration from daniel dot oconnor at gmail dot com, here's an alternative str_putcsv() that leverages existing PHP core functionality (5.1.0+) to avoid re-inventing the wheel.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'str_putcsv'</span><span class="keyword">)) {<br />    function </span><span class="default">str_putcsv</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">','</span><span class="keyword">, </span><span class="default">$enclosure </span><span class="keyword">= </span><span class="string">'"'</span><span class="keyword">) {<br />        </span><span class="comment">// Open a memory "file" for read/write...<br />        </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'php://temp'</span><span class="keyword">, </span><span class="string">'r+'</span><span class="keyword">);<br />        </span><span class="comment">// ... write the $input array to the "file" using fputcsv()...<br />        </span><span class="default">fputcsv</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$enclosure</span><span class="keyword">);<br />        </span><span class="comment">// ... rewind the "file" so we can read what we just wrote...<br />        </span><span class="default">rewind</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        </span><span class="comment">// ... read the entire line into a variable...<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        </span><span class="comment">// ... close the "file"...<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        </span><span class="comment">// ... and return the $data to the caller, with the trailing newline from fgets() removed.<br />        </span><span class="keyword">return </span><span class="default">rtrim</span><span class="keyword">( </span><span class="default">$data</span><span class="keyword">, </span><span class="string">"\n" </span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85799">  <div class="votes">
    <div id="Vu85799">
    <a href="/manual/vote-note.php?id=85799&amp;page=function.str-getcsv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85799">
    <a href="/manual/vote-note.php?id=85799&amp;page=function.str-getcsv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85799" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85799" class="name">
  <strong class="user"><em>william dot j dot weir at gmail dot com</em></strong></a><a class="genanchor" href="#85799"> &para;</a><div class="date" title="2008-09-18 03:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85799">
<div class="phpcode"><code><span class="html">If your happy enough having just a multi-dimensional array, this should work fine. I had wanted to use the one provided by keananda but it was choking on pr($lines).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">f_parse_csv</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$longest</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">) {<br />  </span><span class="default">$mdarray </span><span class="keyword">= array();<br />  </span><span class="default">$file    </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />  while (</span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$longest</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">)) {<br />    </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$mdarray</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">);<br />    }<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />  return </span><span class="default">$mdarray</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;<br /></span><br />$longest is a number that represents the longest line in the csv file as required by fgetcsv().  The page for fgetcsv() said that the longest line could be set to 0 or left out, but I couldn't get it to work without. I just made it extra large when I had to use it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.str-getcsv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-getcsv.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
