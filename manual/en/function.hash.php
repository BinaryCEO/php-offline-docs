<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: hash - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.hash.php">
 <link rel="shorturl" href="https://www.php.net/hash">
 <link rel="alternate" href="https://www.php.net/hash" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.hash.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.hash.php">
 <link rel="next" href="https://www.php.net/manual/en/function.hash-algos.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.hash.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.hash.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.hash.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.hash.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.hash.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.hash.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.hash.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.hash.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.hash.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.hash.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.hash.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generate a hash value (message digest)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: hash - Manual" />
<meta name="twitter:description" content="Generate a hash value (message digest)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: hash - Manual" />
<meta itemprop="description" content="Generate a hash value (message digest)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generate a hash value (message digest)" />

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
        <a href="function.hash-algos.php">
          hash_algos &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.hash.php">
          &laquo; Hash Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.hash.php'>Hash</a></li>      <li><a href='ref.hash.php'>Hash Functions</a></li>      </ul>
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
            <option value='en/function.hash.php' selected="selected">English</option>
            <option value='de/function.hash.php'>German</option>
            <option value='es/function.hash.php'>Spanish</option>
            <option value='fr/function.hash.php'>French</option>
            <option value='it/function.hash.php'>Italian</option>
            <option value='ja/function.hash.php'>Japanese</option>
            <option value='pt_BR/function.hash.php'>Brazilian Portuguese</option>
            <option value='ru/function.hash.php'>Russian</option>
            <option value='tr/function.hash.php'>Turkish</option>
            <option value='uk/function.hash.php'>Ukrainian</option>
            <option value='zh/function.hash.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.hash" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">hash</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.2, PHP 7, PHP 8, PECL hash &gt;= 1.1)</p><p class="refpurpose"><span class="refname">hash</span> &mdash; <span class="dc-title">Generate a hash value (message digest)</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.hash-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>hash</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$algo</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$binary</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>


 </div>

 <div class="refsect1 parameters" id="refsect1-function.hash-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">algo</code></dt>
     <dd>
      <p class="para">
       Name of selected hashing algorithm (e.g. <code class="literal">&quot;sha256&quot;</code>).
       For a list of supported algorithms see <span class="function"><a href="function.hash-algos.php" class="function">hash_algos()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       Message to be hashed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">binary</code></dt>
     <dd>
      <p class="para">
       When set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, outputs raw binary data.
       <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> outputs lowercase hexits.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An array of options for the various hashing algorithms.
       Currently, only the <code class="literal">&quot;seed&quot;</code> parameter is
       supported by the MurmurHash variants.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.hash-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string containing the calculated message digest as lowercase hexits
   unless <code class="parameter">binary</code> is set to true in which case the raw
   binary representation of the message digest is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.hash-changelog">
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
       <td>8.1.0</td>
       <td>The <code class="parameter">options</code> parameter has been added.</td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="function"><strong>hash()</strong></span> now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> exception
        if <code class="parameter">algo</code> is unknown; previously, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned instead.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.hash-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-979">
    <p><strong>Example #1 A <span class="function"><strong>hash()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">hash</span><span style="color: #007700">(</span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">, </span><span style="color: #DD0000">'The quick brown fox jumped over the lazy dog.'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.hash-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.hash-init.php" class="function" rel="rdfs-seeAlso">hash_init()</a> - Initialize an incremental hashing context</span></li>
    <li><span class="function"><a href="function.hash-file.php" class="function" rel="rdfs-seeAlso">hash_file()</a> - Generate a hash value using the contents of a given file</span></li>
    <li><span class="function"><a href="function.hash-hmac.php" class="function" rel="rdfs-seeAlso">hash_hmac()</a> - Generate a keyed hash value using the HMAC method</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/hash/functions/hash.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.hash%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.hash&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104987">  <div class="votes">
    <div id="Vu104987">
    <a href="/manual/vote-note.php?id=104987&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104987">
    <a href="/manual/vote-note.php?id=104987&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104987" title="84% like this...">
    693
    </div>
  </div>
  <a href="#104987" class="name">
  <strong class="user"><em>nmmm at nmmm dot nu</em></strong></a><a class="genanchor" href="#104987"> &para;</a><div class="date" title="2011-07-20 01:50"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104987">
<div class="phpcode"><code><span class="html">I was interested how "long" each hash is, so I did:
<br />
<br /><span class="default">&lt;?php
<br />$data </span><span class="keyword">= </span><span class="string">"hello"</span><span class="keyword">;
<br />
<br />foreach (</span><span class="default">hash_algos</span><span class="keyword">() as </span><span class="default">$v</span><span class="keyword">) {
<br />        </span><span class="default">$r </span><span class="keyword">= </span><span class="default">hash</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%-12s %3d %s\n"</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">), </span><span class="default">$r</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />which produce (long hashes are cropped)
<br />
<br />md2           32 a9046c73e00331af68917d3804f70655                   
<br />md4           32 866437cb7a794bce2b727acc0362ee27
<br />md5           32 5d41402abc4b2a76b9719d911017c592
<br />sha1          40 aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d
<br />sha256        64 2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e730
<br />sha384        96 59e1748777448c69de6b800d7a33bbfb9ff1b463e44354c3553
<br />sha512       128 9b71d224bd62f3785d96d46ad3ea3d73319bfbc2890caadae2d
<br />ripemd128     32 789d569f08ed7055e94b4289a4195012
<br />ripemd160     40 108f07b8382412612c048d07d13f814118445acd
<br />ripemd256     64 cc1d2594aece0a064b7aed75a57283d9490fd5705ed3d66bf9a
<br />ripemd320     80 eb0cf45114c56a8421fbcb33430fa22e0cd607560a88bbe14ce
<br />whirlpool    128 0a25f55d7308eca6b9567a7ed3bd1b46327f0f1ffdc804dd8bb
<br />tiger128,3    32 a78862336f7ffd2c8a3874f89b1b74f2
<br />tiger160,3    40 a78862336f7ffd2c8a3874f89b1b74f2f27bdbca
<br />tiger192,3    48 a78862336f7ffd2c8a3874f89b1b74f2f27bdbca39660254
<br />tiger128,4    32 1c2a939f230ee5e828f5d0eae5947135
<br />tiger160,4    40 1c2a939f230ee5e828f5d0eae5947135741cd0ae
<br />tiger192,4    48 1c2a939f230ee5e828f5d0eae5947135741cd0aefeeb2adc
<br />snefru        64 7c5f22b1a92d9470efea37ec6ed00b2357a4ce3c41aa6e28e3b
<br />gost          64 a7eb5d08ddf2363f1ea0317a803fcef81d33863c8b2f9f6d7d1
<br />adler32        8 062c0215
<br />crc32          8 3d653119
<br />crc32b         8 3610a686
<br />haval128,3    32 85c3e4fac0ba4d85519978fdc3d1d9be
<br />haval160,3    40 0e53b29ad41cea507a343cdd8b62106864f6b3fe
<br />haval192,3    48 bfaf81218bbb8ee51b600f5088c4b8601558ff56e2de1c4f
<br />haval224,3    56 92d0e3354be5d525616f217660e0f860b5d472a9cb99d6766be
<br />haval256,3    64 26718e4fb05595cb8703a672a8ae91eea071cac5e7426173d4c
<br />haval128,4    32 fe10754e0b31d69d4ece9c7a46e044e5
<br />haval160,4    40 b9afd44b015f8afce44e4e02d8b908ed857afbd1
<br />haval192,4    48 ae73833a09e84691d0214f360ee5027396f12599e3618118
<br />haval224,4    56 e1ad67dc7a5901496b15dab92c2715de4b120af2baf661ecd92
<br />haval256,4    64 2d39577df3a6a63168826b2a10f07a65a676f5776a0772e0a87
<br />haval128,5    32 d20e920d5be9d9d34855accb501d1987
<br />haval160,5    40 dac5e2024bfea142e53d1422b90c9ee2c8187cc6
<br />haval192,5    48 bbb99b1e989ec3174019b20792fd92dd67175c2ff6ce5965
<br />haval224,5    56 aa6551d75e33a9c5cd4141e9a068b1fc7b6d847f85c3ab16295
<br />haval256,5    64 348298791817d5088a6de6c1b6364756d404a50bd64e645035f</span></code></div>
  </div>
 </div>
  <div class="note" id="94104">  <div class="votes">
    <div id="Vu94104">
    <a href="/manual/vote-note.php?id=94104&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94104">
    <a href="/manual/vote-note.php?id=94104&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94104" title="74% like this...">
    161
    </div>
  </div>
  <a href="#94104" class="name">
  <strong class="user"><em>Kai Petzke</em></strong></a><a class="genanchor" href="#94104"> &para;</a><div class="date" title="2009-10-16 05:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94104">
<div class="phpcode"><code><span class="html">The well known hash functions MD5 and SHA1 should be avoided in new applications. Collission attacks against MD5 are well documented in the cryptographics literature and have already been demonstrated in practice. Therefore, MD5 is no longer secure for certain applications.<br /><br />Collission attacks against SHA1 have also been published, though they still require computing power, which is somewhat out of scope. As computing power increases with time and the attacks are likely to get better, too, attacks against systems relying on SHA1 for security are likely to become feasible within the next few years.<br /><br />There is no lack of potential alternative hash algorithms, as the many choices for the "algo" argument of PHPs hash() function already suggests. Unfortunately, there is lack of analysis, as to how secure these alternative algorithms are. It is rather safe to assume, though, that the SHA2 family with its most prominent members SHA-256 und SHA-512, is better than SHA1.<br /><br />When storing password hashes, it is a good idea to prefix a salt to the password before hashing, to avoid the same passwords to hash to the same values and to avoid the use of rainbow tables for password recovery. Unlike suggested in other articles, there is no security advantage in putting the salt in the middle, or even at both the beginning and the end, of the combined salt-password-string.<br /><br />Rather, there are two other factors, that determine the strength of the salt: Its length and its variability. For example, using the same salt for all passwords is easy to implement, but gives only very little additional security. In particular, if users type the same passwords, they will still hash to the same value!<br /><br />Therefore, the salt should be random string with at least as many variable bits, as there are bits in the hash result. In the user database, store username, the randomly generated salt for that user, and the result of hashing the salt-password-string. Access authentication is then done by looking up the entry for the user, calculating the hash of the salt found in the database and the password provided by the user, and comparing the result with the one stored in the database.</span></code></div>
  </div>
 </div>
  <div class="note" id="122785">  <div class="votes">
    <div id="Vu122785">
    <a href="/manual/vote-note.php?id=122785&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122785">
    <a href="/manual/vote-note.php?id=122785&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122785" title="75% like this...">
    63
    </div>
  </div>
  <a href="#122785" class="name">
  <strong class="user"><em>jrz [dot] agarcia [at] gmail [dot] com</em></strong></a><a class="genanchor" href="#122785"> &para;</a><div class="date" title="2018-05-31 07:22"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122785">
<div class="phpcode"><code><span class="html">I was curious about hashes behavior (time and length), so i ran this code (yeah, I'm cheating because i took two examples from this page)<br /><span class="default">&lt;?php<br />  </span><span class="keyword">echo </span><span class="string">"Building data..."</span><span class="keyword">;<br />  </span><span class="default">$data </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />  for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1500</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    </span><span class="default">$data </span><span class="keyword">.= </span><span class="default">sha1</span><span class="keyword">(</span><span class="string">"H:k - </span><span class="default">$i</span><span class="string"> - k:H"</span><span class="keyword">);<br /><br />  echo </span><span class="string">"OK! ("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">).</span><span class="string">" bytes)"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />  </span><span class="default">$res </span><span class="keyword">= [];<br /><br />  echo </span><span class="string">"Testing hashes....."</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />  foreach (</span><span class="default">hash_algos</span><span class="keyword">() as </span><span class="default">$algo</span><span class="keyword">) {<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$hash </span><span class="keyword">= </span><span class="default">hash</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br />    </span><span class="default">$time </span><span class="keyword">= (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) - </span><span class="default">$time</span><span class="keyword">) * </span><span class="default">1000</span><span class="keyword">;<br />    </span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$hash</span><span class="keyword">);<br /><br />    </span><span class="default">$res</span><span class="keyword">[</span><span class="string">"</span><span class="default">$time</span><span class="string">"</span><span class="keyword">][] = [<br />      </span><span class="string">"algo"   </span><span class="keyword">=&gt; </span><span class="string">"HEX-</span><span class="default">$algo</span><span class="string">"</span><span class="keyword">,<br />      </span><span class="string">"length" </span><span class="keyword">=&gt; </span><span class="string">"</span><span class="default">$length</span><span class="string">"</span><span class="keyword">,<br />      </span><span class="string">"time"   </span><span class="keyword">=&gt; </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%.8f"</span><span class="keyword">, </span><span class="default">$time</span><span class="keyword">)<br />    ];<br /><br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">hash</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$time </span><span class="keyword">= (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) - </span><span class="default">$time</span><span class="keyword">) * </span><span class="default">1000</span><span class="keyword">;<br /><br />    </span><span class="default">$res</span><span class="keyword">[</span><span class="string">"</span><span class="default">$time</span><span class="string">"</span><span class="keyword">][] = [<br />      </span><span class="string">"algo"   </span><span class="keyword">=&gt; </span><span class="string">"RAW-</span><span class="default">$algo</span><span class="string">"</span><span class="keyword">,<br />      </span><span class="string">"length" </span><span class="keyword">=&gt; </span><span class="string">"</span><span class="default">$length</span><span class="string">"</span><span class="keyword">,<br />      </span><span class="string">"time"   </span><span class="keyword">=&gt; </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%.8f"</span><span class="keyword">, </span><span class="default">$time</span><span class="keyword">)<br />    ];<br />  }<br /><br />  </span><span class="default">ksort</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br />  </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />  echo </span><span class="string">"Results:"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />  echo </span><span class="string">"Posit.      Time in ms   Type-Hash algo        Hash length"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />  foreach(</span><span class="default">$res </span><span class="keyword">as </span><span class="default">$sres</span><span class="keyword">){<br />    foreach(</span><span class="default">$sres </span><span class="keyword">as </span><span class="default">$result</span><span class="keyword">){<br />      echo </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%5d. %12s ms    %-20s %-2d bytes"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">++, </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">], </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'algo'</span><span class="keyword">], </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'length'</span><span class="keyword">]).</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />  }<br /></span><span class="default">?&gt;<br /></span><br />I found interesting that today (may 31, 2018), I found 103 algos, 65 more than 9 years ago (based on this comment: <a href="https://secure.php.net/manual/en/function.hash.php#89574" rel="nofollow" target="_blank">https://secure.php.net/manual/en/function.hash.php#89574</a> )<br /><br />Also, here is my results: <a href="https://ideone.com/embed/0iwuGn" rel="nofollow" target="_blank">https://ideone.com/embed/0iwuGn</a><br /><br />I'm not posting here due to message length limitations.</span></code></div>
  </div>
 </div>
  <div class="note" id="89574">  <div class="votes">
    <div id="Vu89574">
    <a href="/manual/vote-note.php?id=89574&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89574">
    <a href="/manual/vote-note.php?id=89574&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89574" title="73% like this...">
    78
    </div>
  </div>
  <a href="#89574" class="name">
  <strong class="user"><em>luka8088 at gmail dot com</em></strong></a><a class="genanchor" href="#89574"> &para;</a><div class="date" title="2009-03-14 03:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89574">
<div class="phpcode"><code><span class="html">Performance test results on my laptop:<br />Results are here shorten to fit php web notes ...<br />This was tested with 1024000 bytes (1000 KB) of random data, md4 always gets the first place, and md2 always get the last place :)<br /><br />Results: (in microseconds)<br />   1.  md4                           5307.912<br />   2.  md5                           6890.058<br />   3.  crc32b                        7298.946<br />   4.  crc32                         7561.922<br />   5.  sha1                          8886.098<br />   6.  tiger128,3                    11054.992<br />   7.  haval192,3                    11132.955<br />   8.  haval224,3                    11160.135<br />   9.  tiger160,3                    11162.996<br />  10.  haval160,3                    11242.151<br />  11.  haval256,3                    11327.981<br />  12.  tiger192,3                    11630.058<br />  13.  haval128,3                    11880.874<br />  14.  tiger192,4                    14776.945<br />  15.  tiger128,4                    14871.12<br />  16.  tiger160,4                    14946.937<br />  17.  haval160,4                    15661.954<br />  18.  haval192,4                    15717.029<br />  19.  haval256,4                    15759.944<br />  20.  adler32                       15796.184<br />  21.  haval128,4                    15887.022<br />  22.  haval224,4                    16047.954<br />  23.  ripemd256                     16245.126<br />  24.  haval160,5                    17818.927<br />  25.  haval128,5                    17887.115<br />  26.  haval224,5                    18085.002<br />  27.  haval192,5                    18135.07<br />  28.  haval256,5                    18678.903<br />  29.  sha256                        19020.08<br />  30.  ripemd128                     20671.844<br />  31.  ripemd160                     21853.923<br />  32.  ripemd320                     22425.889<br />  33.  sha384                        45102.119<br />  34.  sha512                        45655.965<br />  35.  gost                          57237.148<br />  36.  whirlpool                     64682.96<br />  37.  snefru                        80352.783<br />  38.  md2                           705397.844<br /><br />Code for generating this:<br />(compatible both with browser and cli mode)<br /><br />&lt;pre&gt;<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="string">'Building random data ...' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">; <br />@</span><span class="default">ob_flush</span><span class="keyword">();</span><span class="default">flush</span><span class="keyword">();<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">64000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    </span><span class="default">$data </span><span class="keyword">.= </span><span class="default">hash</span><span class="keyword">(</span><span class="string">'md5'</span><span class="keyword">, </span><span class="default">rand</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">);<br /><br />echo </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) . </span><span class="string">' bytes of random data built !' </span><span class="keyword">. </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="string">'Testing hash algorithms ...' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">; <br />@</span><span class="default">ob_flush</span><span class="keyword">();</span><span class="default">flush</span><span class="keyword">();<br /><br /></span><span class="default">$results </span><span class="keyword">= array();<br />foreach (</span><span class="default">hash_algos</span><span class="keyword">() as </span><span class="default">$v</span><span class="keyword">) {<br />    echo </span><span class="default">$v </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">; <br />    @</span><span class="default">ob_flush</span><span class="keyword">();</span><span class="default">flush</span><span class="keyword">();<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">hash</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$time</span><span class="keyword">;<br />    </span><span class="default">$results</span><span class="keyword">[</span><span class="default">$time </span><span class="keyword">* </span><span class="default">1000000000</span><span class="keyword">][] = </span><span class="string">"</span><span class="default">$v</span><span class="string"> (hex)"</span><span class="keyword">;<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">hash</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$time</span><span class="keyword">;<br />    </span><span class="default">$results</span><span class="keyword">[</span><span class="default">$time </span><span class="keyword">* </span><span class="default">1000000000</span><span class="keyword">][] = </span><span class="string">"</span><span class="default">$v</span><span class="string"> (raw)"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">ksort</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">);<br /><br />echo </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="string">'Results: ' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">; <br /><br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />foreach (</span><span class="default">$results </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)<br />    foreach (</span><span class="default">$v </span><span class="keyword">as </span><span class="default">$k1 </span><span class="keyword">=&gt; </span><span class="default">$v1</span><span class="keyword">)<br />        echo </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">++ . </span><span class="string">'.'</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">) . </span><span class="string">'  ' </span><span class="keyword">. </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">) . (</span><span class="default">$k </span><span class="keyword">/ </span><span class="default">1000</span><span class="keyword">) . </span><span class="string">' microseconds' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />&lt;/pre&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="121361">  <div class="votes">
    <div id="Vu121361">
    <a href="/manual/vote-note.php?id=121361&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121361">
    <a href="/manual/vote-note.php?id=121361&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121361" title="72% like this...">
    11
    </div>
  </div>
  <a href="#121361" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121361"> &para;</a><div class="date" title="2017-07-11 11:58"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121361">
<div class="phpcode"><code><span class="html">Of the hash algorithms currently available, SHA3 was chosen by NIST from fifty-one submitted candidates and subsequently mandated by the U.S. Department of Commerce for Federal Government use.<br /><br /><a href="http://nvlpubs.nist.gov/nistpubs/FIPS/NIST.FIPS.202.pdf" rel="nofollow" target="_blank">http://nvlpubs.nist.gov/nistpubs/FIPS/NIST.FIPS.202.pdf</a><br /><br />So if you're wanting to select a hash algorithm, you can consider SHA3 to be "good enough for government work".</span></code></div>
  </div>
 </div>
  <div class="note" id="124509">  <div class="votes">
    <div id="Vu124509">
    <a href="/manual/vote-note.php?id=124509&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124509">
    <a href="/manual/vote-note.php?id=124509&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124509" title="64% like this...">
    10
    </div>
  </div>
  <a href="#124509" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#124509"> &para;</a><div class="date" title="2019-12-15 12:07"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124509">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/* PHP 7.4<br /><br />n°   hash  results<br />1.   adler32 (hex)       555.992 ms<br />2.   adler32 (raw)       556.945 ms<br />3.   fnv132 (raw)        1107.931 ms<br />4.   fnv1a64 (raw)       1107.931 ms<br />5.   fnv164 (raw)        1108.169 ms<br />6.   fnv1a32 (raw)       1108.884 ms<br />7.   fnv164 (hex)        1108.884 ms<br />8.   fnv1a64 (hex)       1109.123 ms<br />9.   fnv132 (hex)        1116.991 ms<br />10.  fnv1a32 (hex)       1147.985 ms<br />11.  tiger192,3 (raw)    1523.017 ms<br />12.  tiger192,3 (hex)    1532.077 ms<br />13.  tiger128,3 (hex)    1538.038 ms<br />14.  tiger128,3 (raw)    1546.144 ms<br />15.  md4 (raw)           1554.965 ms<br />16.  md4 (hex)           1565.933 ms<br />17.  tiger160,3 (raw)    1574.039 ms<br />18.  tiger160,3 (hex)    1588.106 ms<br />19.  joaat (hex)         1661.777 ms<br />20.  joaat (raw)         1662.969 ms<br />21.  md5 (raw)           1822.948 ms<br />22.  md5 (hex)           1842.975 ms<br />23.  tiger160,4 (hex)    1996.994 ms<br />24.  tiger160,4 (raw)    2007.961 ms<br />25.  tiger128,4 (raw)    2035.14 ms<br />26.  tiger192,4 (raw)    2043.962 ms<br />27.  tiger128,4 (hex)    2065.896 ms<br />28.  tiger192,4 (hex)    2070.903 ms<br />29.  sha1 (hex)          2254.009 ms<br />30.  sha1 (raw)          2326.011 ms<br />31.  sha3-224 (hex)      2768.039 ms<br />32.  sha3-224 (raw)      2783.06 ms<br />33.  sha512 (hex)        2936.124 ms<br />34.  sha512 (raw)        2943.992 ms<br />35.  sha3-256 (hex)      2945.899 ms<br />36.  sha3-256 (raw)      2970.933 ms<br />37.  sha512/224 (raw)    2990.007 ms<br />38.  sha384 (raw)        3006.935 ms<br />39.  sha512/224 (hex)    3010.988 ms<br />40.  sha512/256 (raw)    3024.101 ms<br />41.  sha384 (hex)        3036.975 ms<br />42.  ripemd256 (raw)     3068.923 ms<br />43.  ripemd256 (hex)     3072.023 ms<br />44.  ripemd128 (raw)     3077.03 ms<br />45.  ripemd128 (hex)     3123.998 ms<br />46.  sha512/256 (hex)    3184.08 ms<br />47.  haval256,3 (hex)    3671.884 ms<br />48.  haval224,3 (hex)    3776.073 ms<br />49.  sha3-384 (hex)      3777.98 ms<br />50.  haval128,3 (raw)    3823.041 ms<br />51.  haval128,3 (hex)    3829.002 ms<br />52.  sha3-384 (raw)      3835.916 ms<br />53.  haval256,3 (raw)    3852.128 ms<br />54.  haval224,3 (raw)    3855.943 ms<br />55.  haval160,3 (raw)    3859.996 ms<br />56.  haval160,3 (hex)    3862.857 ms<br />57.  haval192,3 (raw)    3892.898 ms<br />58.  haval192,3 (hex)    3922.939 ms<br />59.  crc32c (hex)        4080.057 ms<br />60.  ripemd160 (hex)     4091.024 ms<br />61.  ripemd160 (raw)     4094.123 ms<br />62.  ripemd320 (raw)     4114.866 ms<br />63.  crc32b (hex)        4116.058 ms<br />64.  crc32 (raw)         4118.919 ms<br />65.  ripemd320 (hex)     4175.186 ms<br />66.  crc32c (raw)        4180.908 ms<br />67.  crc32 (hex)         4194.974 ms<br />68.  crc32b (raw)        4208.803 ms<br />69.  sha224 (hex)        4735.946 ms<br />70.  sha256 (raw)        4753.112 ms<br />71.  sha256 (hex)        4761.934 ms<br />72.  sha224 (raw)        4762.887 ms<br />73.  haval192,4 (raw)    5304.098 ms<br />74.  haval160,4 (raw)    5308.151 ms<br />75.  haval128,4 (raw)    5323.886 ms<br />76.  haval192,4 (hex)    5346.059 ms<br />77.  haval128,4 (hex)    5351.066 ms<br />78.  haval256,4 (hex)    5367.04 ms<br />79.  haval256,4 (raw)    5378.007 ms<br />80.  haval224,4 (raw)    5398.988 ms<br />81.  haval224,4 (hex)    5413.055 ms<br />82.  sha3-512 (raw)      5460.023 ms<br />83.  sha3-512 (hex)      5527.973 ms<br />84.  haval160,4 (hex)    5529.88 ms<br />85.  haval192,5 (hex)    6403.923 ms<br />86.  haval160,5 (raw)    6499.052 ms<br />87.  haval128,5 (raw)    6513.833 ms<br />88.  haval160,5 (hex)    6540.06 ms<br />89.  haval128,5 (hex)    6541.013 ms<br />90.  haval192,5 (raw)    6566.047 ms<br />91.  haval224,5 (raw)    6567.001 ms<br />92.  haval256,5 (hex)    6577.014 ms<br />93.  haval224,5 (hex)    6598.949 ms<br />94.  haval256,5 (raw)    6598.949 ms<br />95.  whirlpool (raw)     9627.103 ms<br />96.  whirlpool (hex)     9634.017 ms<br />97.  gost (raw)          18457.889 ms<br />98.  gost-crypto (raw)   18479.824 ms<br />99.  gost (hex)          18527.03 ms<br />100.  gost-crypto (hex)  18530.13 ms<br />101.  snefru256 (hex)    36260.843 ms<br />102.  snefru256 (raw)    36325.931 ms<br />103.  snefru (hex)       36480.903 ms<br />104.  snefru (raw)       36496.877 ms<br />105.  md2 (raw)          184617.996 ms<br />106.  md2 (hex)          185398.101 ms<br /><br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84939">  <div class="votes">
    <div id="Vu84939">
    <a href="/manual/vote-note.php?id=84939&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84939">
    <a href="/manual/vote-note.php?id=84939&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84939" title="66% like this...">
    32
    </div>
  </div>
  <a href="#84939" class="name">
  <strong class="user"><em>Leigh</em></strong></a><a class="genanchor" href="#84939"> &para;</a><div class="date" title="2008-08-06 10:10"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84939">
<div class="phpcode"><code><span class="html">Just a quick note about these benchmarks and how you should apply them.<br /><br />If you are hashing passwords etc for security, speed is not your friend. You should use the slowest method.<br /><br />Slow to hash means slow to crack and will hopefully make generating things like rainbow tables more trouble than it's worth.</span></code></div>
  </div>
 </div>
  <div class="note" id="113346">  <div class="votes">
    <div id="Vu113346">
    <a href="/manual/vote-note.php?id=113346&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113346">
    <a href="/manual/vote-note.php?id=113346&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113346" title="60% like this...">
    8
    </div>
  </div>
  <a href="#113346" class="name">
  <strong class="user"><em>buar42 at gmail dot com</em></strong></a><a class="genanchor" href="#113346"> &para;</a><div class="date" title="2013-09-29 08:45"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113346">
<div class="phpcode"><code><span class="html">I made a PHP script that will let you sort all the available hashes on your system by generation time or by the length of the hash. It shows a general correlation on my system (longer hashes take longer to calculate) but some are faster than others, for example, sha512 makes the (joint) longest hash, but is actually only ninth slowest (from 43 hashes available on my machine)<br /><br />As I understand it, the strength of a hash is dependant on the number of collisions that it has (where two input values produce the same hash) so with an infinite number of input values but a finite number of hashes, there are a (theoretically) infinite number of collisions. But, if you have a longer hash, then you're dividing infinity by a larger number, so you'll have fewer collisions.<br /><br />In reality the number of collisions will be limited by the minimum and maximum password lengths that you choose to allow, so that if you enforce a policy where passwords must be exactly a certain length (20 characters for example) you'll have a large number of unique passwords, but a smaller number of potential inputs than you have hashes coming out, so that should prevent collisions entirely. In theory.<br /><br />Tl;dr: I think that longer hashes are better.<br /><br />Anyway, here's the code:<br /><span class="default">&lt;?php<br /><br />$data </span><span class="keyword">= </span><span class="string">"hello"</span><span class="keyword">; <br /><br />foreach (</span><span class="default">hash_algos</span><span class="keyword">() as </span><span class="default">$v</span><span class="keyword">)<br /> {<br />  </span><span class="default">$time</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />   {<br />    </span><span class="default">$r</span><span class="keyword">[</span><span class="default">$v</span><span class="keyword">] = </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">hash</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">));<br />   }<br />  </span><span class="default">$t</span><span class="keyword">[</span><span class="default">$v</span><span class="keyword">] = </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">)-</span><span class="default">$time</span><span class="keyword">;<br /> }<br /><br />switch (</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'sort'</span><span class="keyword">])<br /> {<br />  default:<br />   </span><span class="default">ksort </span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);<br />   </span><span class="default">$array </span><span class="keyword">= </span><span class="string">'r'</span><span class="keyword">;<br />   break;<br />  case </span><span class="string">'length'</span><span class="keyword">:<br />   </span><span class="default">asort </span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);<br />   </span><span class="default">$array </span><span class="keyword">= </span><span class="string">'r'</span><span class="keyword">;<br />   break;<br />  case </span><span class="string">'time'</span><span class="keyword">:<br />   </span><span class="default">asort </span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">);<br />   </span><span class="default">$array </span><span class="keyword">= </span><span class="string">'t'</span><span class="keyword">;<br />   break;<br /> }<br /><br />echo </span><span class="string">'&lt;pre&gt;        &lt;a href="?sort=alph"&gt;Name&lt;/a&gt;        | &lt;a href="?sort=length"&gt;Hash Length&lt;/a&gt; | &lt;a href="?sort=time"&gt;Time taken for 10000 hashes.&lt;/a&gt;'</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />foreach ($</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br /> {<br />  echo </span><span class="default">$key</span><span class="keyword">;<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">19</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />   {<br />    echo </span><span class="string">' '</span><span class="keyword">;<br />   }<br />  echo </span><span class="string">'| '</span><span class="keyword">.</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]); </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">11</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />   {<br />    echo </span><span class="string">' '</span><span class="keyword">;<br />   }<br />  echo </span><span class="string">'| '</span><span class="keyword">.</span><span class="default">$t</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">;<br /> }<br /><br />echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107920">  <div class="votes">
    <div id="Vu107920">
    <a href="/manual/vote-note.php?id=107920&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107920">
    <a href="/manual/vote-note.php?id=107920&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107920" title="58% like this...">
    5
    </div>
  </div>
  <a href="#107920" class="name">
  <strong class="user"><em>sneskid at hotmail dot com</em></strong></a><a class="genanchor" href="#107920"> &para;</a><div class="date" title="2012-03-14 09:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107920">
<div class="phpcode"><code><span class="html">On two different servers I found that crc32() relates to hash('crc32b',)<br />This may be good to know if you are writing a crc32_file function based on hash_file.<br />(The example does not compensate for negative crc32 results)<br /><span class="default">&lt;?php<br />$val </span><span class="keyword">= </span><span class="string">'hello'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">crc32</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) == ( </span><span class="string">'0x' </span><span class="keyword">. </span><span class="default">hash</span><span class="keyword">(</span><span class="string">'crc32b'</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) ) ); </span><span class="comment">// bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">crc32</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) == ( </span><span class="string">'0x' </span><span class="keyword">. </span><span class="default">hash</span><span class="keyword">(</span><span class="string">'crc32'</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) ) ); </span><span class="comment">// bool(false)<br /></span><span class="default">?&gt;<br /></span><br />Also if you are looking for a way to reduce collisions and still keep the hash result small (smaller than say md5) you could get a nice database friendly 64 bit value by using hash/crc32 and hash/crc32b, which is slower than a single md5 but the result may be more suitable for certain tasks.<br /><span class="default">&lt;?php<br />$val </span><span class="keyword">= </span><span class="string">'hello'</span><span class="keyword">;<br /></span><span class="default">$crc64 </span><span class="keyword">= ( </span><span class="string">'0x' </span><span class="keyword">. </span><span class="default">hash</span><span class="keyword">(</span><span class="string">'crc32'</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) . </span><span class="default">hash</span><span class="keyword">(</span><span class="string">'crc32b'</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) ) );<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$crc64</span><span class="keyword">); </span><span class="comment">// string(18) "0x3d6531193610a686"<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$crc64 </span><span class="keyword">+ </span><span class="default">0</span><span class="keyword">); </span><span class="comment">// int(4423996193312384646)<br /></span><span class="default">?&gt;<br /></span><br />(examples tested on php 5.2.17)<br />note: ('0x' . $hex . + 0) is faster than base_convert($hex,16,10)</span></code></div>
  </div>
 </div>
  <div class="note" id="124917">  <div class="votes">
    <div id="Vu124917">
    <a href="/manual/vote-note.php?id=124917&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124917">
    <a href="/manual/vote-note.php?id=124917&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124917" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124917" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124917"> &para;</a><div class="date" title="2020-04-16 04:19"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124917">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?PHP<br /></span><span class="keyword">function </span><span class="default">allhash</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">){<br />    foreach(</span><span class="default">hash_algos</span><span class="keyword">() as </span><span class="default">$v</span><span class="keyword">){<br />        </span><span class="default">$r</span><span class="keyword">[] = </span><span class="string">"</span><span class="default">$v</span><span class="string">\t Length: "</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">hash</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">));<br />    }<br />    return </span><span class="default">$r</span><span class="keyword">;<br />}<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">allhash</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>output:<br /><br />Array<br />(<br />    [0] =&gt; md2   Length: 32<br />    [1] =&gt; md4   Length: 32<br />    [2] =&gt; md5   Length: 32<br />    [3] =&gt; sha1  Length: 40<br />    [4] =&gt; sha224        Length: 56<br />    [5] =&gt; sha256        Length: 64<br />    [6] =&gt; sha384        Length: 96<br />    [7] =&gt; sha512/224    Length: 56<br />    [8] =&gt; sha512/256    Length: 64<br />    [9] =&gt; sha512        Length: 128<br />    [10] =&gt; sha3-224     Length: 56<br />    [11] =&gt; sha3-256     Length: 64<br />    [12] =&gt; sha3-384     Length: 96<br />    [13] =&gt; sha3-512     Length: 128<br />    [14] =&gt; ripemd128    Length: 32<br />    [15] =&gt; ripemd160    Length: 40<br />    [16] =&gt; ripemd256    Length: 64<br />    [17] =&gt; ripemd320    Length: 80<br />    [18] =&gt; whirlpool    Length: 128<br />    [19] =&gt; tiger128,3   Length: 32<br />    [20] =&gt; tiger160,3   Length: 40<br />    [21] =&gt; tiger192,3   Length: 48<br />    [22] =&gt; tiger128,4   Length: 32<br />    [23] =&gt; tiger160,4   Length: 40<br />    [24] =&gt; tiger192,4   Length: 48<br />    [25] =&gt; snefru       Length: 64<br />    [26] =&gt; snefru256    Length: 64<br />    [27] =&gt; gost         Length: 64<br />    [28] =&gt; gost-crypto  Length: 64<br />    [29] =&gt; adler32      Length: 8<br />    [30] =&gt; crc32        Length: 8<br />    [31] =&gt; crc32b       Length: 8<br />    [32] =&gt; crc32c       Length: 8<br />    [33] =&gt; fnv132       Length: 8<br />    [34] =&gt; fnv1a32      Length: 8<br />    [35] =&gt; fnv164       Length: 16<br />    [36] =&gt; fnv1a64      Length: 16<br />    [37] =&gt; joaat        Length: 8<br />    [38] =&gt; haval128,3   Length: 32<br />    [39] =&gt; haval160,3   Length: 40<br />    [40] =&gt; haval192,3   Length: 48<br />    [41] =&gt; haval224,3   Length: 56<br />    [42] =&gt; haval256,3   Length: 64<br />    [43] =&gt; haval128,4   Length: 32<br />    [44] =&gt; haval160,4   Length: 40<br />    [45] =&gt; haval192,4   Length: 48<br />    [46] =&gt; haval224,4   Length: 56<br />    [47] =&gt; haval256,4   Length: 64<br />    [48] =&gt; haval128,5   Length: 32<br />    [49] =&gt; haval160,5   Length: 40<br />    [50] =&gt; haval192,5   Length: 48<br />    [51] =&gt; haval224,5   Length: 56<br />    [52] =&gt; haval256,5   Length: 64<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="95715">  <div class="votes">
    <div id="Vu95715">
    <a href="/manual/vote-note.php?id=95715&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95715">
    <a href="/manual/vote-note.php?id=95715&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95715" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95715" class="name">
  <strong class="user"><em>robert+nospam at robert-gonzalez dot com</em></strong></a><a class="genanchor" href="#95715"> &para;</a><div class="date" title="2010-01-17 04:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95715">
<div class="phpcode"><code><span class="html">I've recently had the need to look at various hash algorithms and their values of the same string. To make my life a little easier I wrote this little script. It takes a string and runs it through all of the available hash algorithms on your server, outputting them in a clean little HTML table.<br /><br />-----<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* Get the posted value of the form if there is one */<br /></span><span class="default">$p </span><span class="keyword">= empty(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'p'</span><span class="keyword">]) ? </span><span class="default">null </span><span class="keyword">: </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'p'</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span>&lt;html&gt;<br />&lt;head&gt;&lt;title&gt;Hash testing&lt;/title&gt;&lt;/head&gt;<br />&lt;style type="text/css"&gt;<br />    table {border-collapse: collapse;}<br />    table, td, th {border: solid 1px #ccc;}<br />    th {background: #e1e1e1;border-color: #999;}<br />    td, th {padding: 0.25em;}<br />    td.algo {font-weight: bold;}<br />    tr.on td {background: #f0f0f0;}<br />&lt;/style&gt;<br />&lt;body&gt;<br />    &lt;h1&gt;String hashing&lt;/h1&gt;<br />    &lt;form method="post" action="<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">basename</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">) </span><span class="default">?&gt;</span>"&gt;<br />        &lt;p&gt;&lt;label for="p"&gt;Enter a string to hash:&lt;/label&gt;&lt;br /&gt;&lt;input id="p" type="text" name="p" value="<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$p ?&gt;</span>" /&gt;&lt;/p&gt;<br />        &lt;p&gt;&lt;input type="submit" name="submit" value="Hash It" /&gt;&lt;/p&gt;<br />    &lt;/form&gt;<br />    <br />    <span class="default">&lt;?php </span><span class="comment">/* If there is a posted value use it */ </span><span class="default">?&gt;<br /></span>    <span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">$p</span><span class="keyword">): </span><span class="default">?&gt;<br /></span>    &lt;hr /&gt;<br />    &lt;h2&gt;Table of hash values for &lt;em&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$p ?&gt;</span>&lt;/em&gt; based on algorithm&lt;/h2&gt;<br />    &lt;table&gt;<br />        &lt;tr&gt;<br />            &lt;th&gt;Algorithm&lt;/th&gt;<br />            &lt;th&gt;Hashed value of &lt;em&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$p ?&gt;</span>&lt;/em&gt;&lt;/th&gt;<br />        &lt;/tr&gt;<br />        <span class="default">&lt;?php </span><span class="comment">/* Loop through each hash algorithm, colorizing every other row */ </span><span class="default">?&gt;<br /></span>        <span class="default">&lt;?php $on </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">; foreach (</span><span class="default">hash_algos</span><span class="keyword">() as </span><span class="default">$algo</span><span class="keyword">): </span><span class="default">?&gt;</span> <br />        &lt;tr<span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">$on</span><span class="keyword">): </span><span class="default">?&gt;</span> class="on"<span class="default">&lt;?php </span><span class="keyword">endif; </span><span class="default">?&gt;</span>&gt;<br />            &lt;td class="algo"&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$algo ?&gt;</span>&lt;/td&gt;<br />            &lt;td class="hash"&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">hash</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">, </span><span class="default">$p</span><span class="keyword">) </span><span class="default">?&gt;</span>&lt;/td&gt;<br />        &lt;/tr&gt;<br />    <span class="default">&lt;?php $on </span><span class="keyword">= !</span><span class="default">$on</span><span class="keyword">; endforeach; </span><span class="default">?&gt;</span> <br />    &lt;/table&gt;<br />    <span class="default">&lt;?php </span><span class="keyword">endif; </span><span class="default">?&gt;<br /></span>&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="121362">  <div class="votes">
    <div id="Vu121362">
    <a href="/manual/vote-note.php?id=121362&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121362">
    <a href="/manual/vote-note.php?id=121362&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121362" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#121362" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121362"> &para;</a><div class="date" title="2017-07-12 12:13"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121362">
<div class="phpcode"><code><span class="html">These are hash functions. Some have been designed to act as signatures for documents, while others are simply act as checks that transmitted data hasn't been damaged or otherwise modified during transmission and don't provide any cryptographic features.<br /><br />Learn their differences, and use what's appropriate, because using the wrong hash function can be worse than not using one at all.</span></code></div>
  </div>
 </div>
  <div class="note" id="123152">  <div class="votes">
    <div id="Vu123152">
    <a href="/manual/vote-note.php?id=123152&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123152">
    <a href="/manual/vote-note.php?id=123152&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123152" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#123152" class="name">
  <strong class="user"><em>Ricardo Striquer (ricardophp yohoocombr)</em></strong></a><a class="genanchor" href="#123152"> &para;</a><div class="date" title="2018-09-21 04:46"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123152">
<div class="phpcode"><code><span class="html">I haven't done any test or actual study (I'm using crc32 and storing it in mysql signed int types), but if your algorithm of choice is bigger them the supported integer of your database I suppose it is possible that the raw_format option is the best option to store directly in the database without type casting demands for it results in a binary string value.<br /><br />To check if your algorithm of choice have the supported integer size in your database just strlen the raw_format output and see how many bytes it have (for example: crc32 have 4 bytes output, sha256 have 32 e md5 possue 16).<br /><br /><span class="default">&lt;?php <br />var_dump</span><span class="keyword">(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">hash</span><span class="keyword">(</span><span class="string">'md5'</span><span class="keyword">, </span><span class="string">'string to check'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">))); </span><span class="comment">// int(16)<br /></span><span class="default">?&gt;<br /></span><br />PS: You can always use floating points to store a very big number but for "common humans" binary types by and large are easier to check, understand and maintain, so i recommend to use binary, but if you are about speed them floating point could be your friend.<br /><br />PS: remembering ... without the raw_format the returned value are hexadecimal values without the 'Hx' complement, so to transform the result into a decimal just hexdec as shown ...<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">hash</span><span class="keyword">(</span><span class="string">'crc32b'</span><span class="keyword">, </span><span class="string">'string to check'</span><span class="keyword">))); </span><span class="comment">// int(1206832624)<br /></span><span class="default">?&gt;<br /></span><br />PS: Just registering ... I have noticed here some tests where 'crc32' is slower than md5, AFAIK by definition a CRC32 algorithm (there are several algorithms to calculate CRC32) is faster than MD5 and Adler-32 is faster than CRC32 (CRC32 is more consistent than Adler-32, less consistent than MD5, but if you want to safely validate the recommended would be SHA256 or better yet SHA512 because they are less likely to collide, so less vulnerable to collision attacks)</span></code></div>
  </div>
 </div>
  <div class="note" id="82972">  <div class="votes">
    <div id="Vu82972">
    <a href="/manual/vote-note.php?id=82972&amp;page=function.hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82972">
    <a href="/manual/vote-note.php?id=82972&amp;page=function.hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82972" title="39% like this...">
    -5
    </div>
  </div>
  <a href="#82972" class="name">
  <strong class="user"><em>inspiration3 at gmail dot com</em></strong></a><a class="genanchor" href="#82972"> &para;</a><div class="date" title="2008-05-04 08:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82972">
<div class="phpcode"><code><span class="html">Another comprehensive benchmark script that orders results from best to worst and includes the crc32(), md5() and sha1() standalone functions:<br /><br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">(</span><span class="string">'HASH_TIMES'</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'HASH_DATA'</span><span class="keyword">, </span><span class="string">'The quick brown fox jumped over!'</span><span class="keyword">); </span><span class="comment">// 32 bytes<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: text/plain'</span><span class="keyword">);<br />echo </span><span class="string">'Testing ' </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">HASH_DATA</span><span class="keyword">) . </span><span class="string">' bytes of data over ' </span><span class="keyword">. </span><span class="default">HASH_TIMES </span><span class="keyword">. </span><span class="string">" iterations:\n"</span><span class="keyword">;<br /><br />foreach (</span><span class="default">hash_algos</span><span class="keyword">() as </span><span class="default">$algo</span><span class="keyword">) {<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">HASH_TIMES</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">hash</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">, </span><span class="default">HASH_DATA</span><span class="keyword">);<br />    </span><span class="default">$results</span><span class="keyword">[</span><span class="default">$algo</span><span class="keyword">] = </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) - </span><span class="default">$time</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">HASH_TIMES</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">crc32</span><span class="keyword">(</span><span class="default">HASH_DATA</span><span class="keyword">); </span><span class="default">$results</span><span class="keyword">[</span><span class="string">'crc32()'</span><span class="keyword">] = </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) - </span><span class="default">$time</span><span class="keyword">;<br /></span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">HASH_TIMES</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">md5</span><span class="keyword">(</span><span class="default">HASH_DATA</span><span class="keyword">); </span><span class="default">$results</span><span class="keyword">[</span><span class="string">'md5()'</span><span class="keyword">] = </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) - </span><span class="default">$time</span><span class="keyword">;<br /></span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">HASH_TIMES</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">sha1</span><span class="keyword">(</span><span class="default">HASH_DATA</span><span class="keyword">); </span><span class="default">$results</span><span class="keyword">[</span><span class="string">'sha1()'</span><span class="keyword">] = </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) - </span><span class="default">$time</span><span class="keyword">;<br /><br /></span><span class="default">asort</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">, </span><span class="default">SORT_NUMERIC</span><span class="keyword">);<br />foreach (</span><span class="default">$results </span><span class="keyword">as </span><span class="default">$algo </span><span class="keyword">=&gt; </span><span class="default">$time</span><span class="keyword">) echo </span><span class="string">"\n</span><span class="default">$time</span><span class="string">\t</span><span class="default">$algo</span><span class="string">"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.hash&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.hash.php">Hash Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.hash.php" title="hash">hash</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-algos.php" title="hash_&#8203;algos">hash_&#8203;algos</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-copy.php" title="hash_&#8203;copy">hash_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-equals.php" title="hash_&#8203;equals">hash_&#8203;equals</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-file.php" title="hash_&#8203;file">hash_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-final.php" title="hash_&#8203;final">hash_&#8203;final</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hkdf.php" title="hash_&#8203;hkdf">hash_&#8203;hkdf</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac.php" title="hash_&#8203;hmac">hash_&#8203;hmac</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac-algos.php" title="hash_&#8203;hmac_&#8203;algos">hash_&#8203;hmac_&#8203;algos</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac-file.php" title="hash_&#8203;hmac_&#8203;file">hash_&#8203;hmac_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-init.php" title="hash_&#8203;init">hash_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-pbkdf2.php" title="hash_&#8203;pbkdf2">hash_&#8203;pbkdf2</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update.php" title="hash_&#8203;update">hash_&#8203;update</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update-file.php" title="hash_&#8203;update_&#8203;file">hash_&#8203;update_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update-stream.php" title="hash_&#8203;update_&#8203;stream">hash_&#8203;update_&#8203;stream</a>
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
