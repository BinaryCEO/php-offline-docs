<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: password_needs_rehash - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.password-needs-rehash.php">
 <link rel="shorturl" href="https://www.php.net/password-needs-rehash">
 <link rel="alternate" href="https://www.php.net/password-needs-rehash" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.password.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.password-hash.php">
 <link rel="next" href="https://www.php.net/manual/en/function.password-verify.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.password-needs-rehash.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.password-needs-rehash.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.password-needs-rehash.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.password-needs-rehash.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.password-needs-rehash.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.password-needs-rehash.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.password-needs-rehash.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.password-needs-rehash.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.password-needs-rehash.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.password-needs-rehash.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.password-needs-rehash.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Checks if the given hash matches the given options" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: password_needs_rehash - Manual" />
<meta name="twitter:description" content="Checks if the given hash matches the given options" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: password_needs_rehash - Manual" />
<meta itemprop="description" content="Checks if the given hash matches the given options" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Checks if the given hash matches the given options" />

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
        <a href="function.password-verify.php">
          password_verify &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.password-hash.php">
          &laquo; password_hash        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.password.php'>Password Hashing</a></li>      <li><a href='ref.password.php'>Password Hashing Functions</a></li>      </ul>
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
            <option value='en/function.password-needs-rehash.php' selected="selected">English</option>
            <option value='de/function.password-needs-rehash.php'>German</option>
            <option value='es/function.password-needs-rehash.php'>Spanish</option>
            <option value='fr/function.password-needs-rehash.php'>French</option>
            <option value='it/function.password-needs-rehash.php'>Italian</option>
            <option value='ja/function.password-needs-rehash.php'>Japanese</option>
            <option value='pt_BR/function.password-needs-rehash.php'>Brazilian Portuguese</option>
            <option value='ru/function.password-needs-rehash.php'>Russian</option>
            <option value='tr/function.password-needs-rehash.php'>Turkish</option>
            <option value='uk/function.password-needs-rehash.php'>Ukrainian</option>
            <option value='zh/function.password-needs-rehash.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.password-needs-rehash" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">password_needs_rehash</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">password_needs_rehash</span> &mdash; <span class="dc-title">Checks if the given hash matches the given options</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.password-needs-rehash-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>password_needs_rehash</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hash</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$algo</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function checks to see if the supplied hash implements the algorithm
   and options provided. If not, it is assumed that the hash needs to be
   rehashed.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.password-needs-rehash-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">hash</code></dt>
    <dd>
     <p class="para">
      A hash created by <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span>.
     </p>
    </dd>
   
   
    <dt><code class="parameter">algo</code></dt>
    <dd>
     <p class="para">
      A <a href="password.constants.php" class="link">password algorithm constant</a> denoting the algorithm to use when hashing the password.
     </p>
    </dd>
   
   
    <dt><code class="parameter">options</code></dt>
    <dd>
     <p class="para">
      An associative array containing options. See the <a href="password.constants.php" class="link">password algorithm constants</a> for documentation on the supported options for each algorithm.
     </p>
    </dd>
   
  </dl>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.password-needs-rehash-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the hash should be rehashed to match the given
   <code class="parameter">algo</code> and <code class="parameter">options</code>, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   otherwise.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.password-needs-rehash-changelog">
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
       <td>7.4.0</td>
       <td>
        The <code class="parameter">algo</code> parameter expects a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> now, but still accepts
        <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>s for backward compatibility.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.password-needs-rehash-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1058">
    <p><strong>Example #1 Usage of <span class="function"><strong>password_needs_rehash()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'rasmuslerdorf'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$hash </span><span style="color: #007700">= </span><span style="color: #DD0000">'$2y$12$4Umg0rCJwMswRw/l.SwHvuQV01coP0eWmGzd61QH2RvAOMANUBGC.'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$algorithm </span><span style="color: #007700">= </span><span style="color: #0000BB">PASSWORD_BCRYPT</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// bcrypt's cost parameter can change over time as hardware improves<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= [</span><span style="color: #DD0000">'cost' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">13</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">// Verify stored hash against plain-text password<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">password_verify</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$hash</span><span style="color: #007700">)) {<br />    </span><span style="color: #FF8000">// Check if either the algorithm or the options have changed<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">password_needs_rehash</span><span style="color: #007700">(</span><span style="color: #0000BB">$hash</span><span style="color: #007700">, </span><span style="color: #0000BB">$algorithm</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">)) {<br />        </span><span style="color: #FF8000">// If so, create a new hash, and replace the old one<br />        </span><span style="color: #0000BB">$newHash </span><span style="color: #007700">= </span><span style="color: #0000BB">password_hash</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$algorithm</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br />        </span><span style="color: #FF8000">// Update the user record with the $newHash<br />    </span><span style="color: #007700">}<br /><br />    </span><span style="color: #FF8000">// Perform the login.<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p> 
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/password/functions/password-needs-rehash.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.password-needs-rehash%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.password-needs-rehash&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.password-needs-rehash.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115023">  <div class="votes">
    <div id="Vu115023">
    <a href="/manual/vote-note.php?id=115023&amp;page=function.password-needs-rehash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115023">
    <a href="/manual/vote-note.php?id=115023&amp;page=function.password-needs-rehash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115023" title="66% like this...">
    28
    </div>
  </div>
  <a href="#115023" class="name">
  <strong class="user"><em>php dot net at muer dot nl</em></strong></a><a class="genanchor" href="#115023"> &para;</a><div class="date" title="2014-05-13 09:39"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115023">
<div class="phpcode"><code><span class="html">This function cannot check if a string is a MD5 or SHA1 hash. It can only tell you if a password, hashed using the password_hash function, needs to be put through the hashing function again to keep up to date with the new defaults.
<br />
<br />The only time you can use this function is when your user logs in and you have already checked by means of password_verify that the password entered is actually correct. At that point, if password_needs_rehash returns true, you can put the plain text password through the password_hash function.</span></code></div>
  </div>
 </div>
  <div class="note" id="115727">  <div class="votes">
    <div id="Vu115727">
    <a href="/manual/vote-note.php?id=115727&amp;page=function.password-needs-rehash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115727">
    <a href="/manual/vote-note.php?id=115727&amp;page=function.password-needs-rehash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115727" title="65% like this...">
    13
    </div>
  </div>
  <a href="#115727" class="name">
  <strong class="user"><em>admin at torntech dot com</em></strong></a><a class="genanchor" href="#115727"> &para;</a><div class="date" title="2014-09-13 02:48"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115727">
<div class="phpcode"><code><span class="html">Some other use-cases for the password_needs_rehash function is when you have specified using the PASSWORD_DEFAULT algorithm for password_hash.<br />As mentioned on the Password Hashing Predefined Constants and password_hash pages, the algorithm used by PASSWORD_DEFAULT is subject to change as different versions of PHP are released.<br />Additionally password_needs_rehash would be used if you have changed the optional cost or static salt (DO NOT USE A STATIC SALT) requirements of your password_hash options.<br /><br />Full example:<br /><br /><span class="default">&lt;?php<br /><br />$new </span><span class="keyword">= [<br />    </span><span class="string">'options' </span><span class="keyword">=&gt; [</span><span class="string">'cost' </span><span class="keyword">=&gt; </span><span class="default">11</span><span class="keyword">],<br />    </span><span class="string">'algo' </span><span class="keyword">=&gt; </span><span class="default">PASSWORD_DEFAULT</span><span class="keyword">,<br />    </span><span class="string">'hash' </span><span class="keyword">=&gt; </span><span class="default">null<br /></span><span class="keyword">];<br /><br /></span><span class="default">$password </span><span class="keyword">= </span><span class="string">'rasmuslerdorf'</span><span class="keyword">;<br /><br /></span><span class="comment">//stored hash of password<br /></span><span class="default">$oldHash </span><span class="keyword">= </span><span class="string">'$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq'</span><span class="keyword">;<br /><br /></span><span class="comment">//verify stored hash against plain-text password<br /></span><span class="keyword">if (</span><span class="default">true </span><span class="keyword">=== </span><span class="default">password_verify</span><span class="keyword">(</span><span class="default">$password</span><span class="keyword">, </span><span class="default">$oldHash</span><span class="keyword">)) {<br />    </span><span class="comment">//verify legacy password to new password_hash options<br />    </span><span class="keyword">if (</span><span class="default">true </span><span class="keyword">=== </span><span class="default">password_needs_rehash</span><span class="keyword">(</span><span class="default">$oldHash</span><span class="keyword">, </span><span class="default">$new</span><span class="keyword">[</span><span class="string">'algo'</span><span class="keyword">], </span><span class="default">$new</span><span class="keyword">[</span><span class="string">'options'</span><span class="keyword">])) {<br />        </span><span class="comment">//rehash/store plain-text password using new hash<br />        </span><span class="default">$newHash </span><span class="keyword">= </span><span class="default">password_hash</span><span class="keyword">(</span><span class="default">$password</span><span class="keyword">, </span><span class="default">$new</span><span class="keyword">[</span><span class="string">'algo'</span><span class="keyword">], </span><span class="default">$new</span><span class="keyword">[</span><span class="string">'options'</span><span class="keyword">]);<br />        echo </span><span class="default">$newHash</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />The above example will output something similar to:<br />$2y$11$Wu5rN3u38.g/XWdUeA6Wj.PD.F0fLXXmZrMNFyzzg2UxkVmxlk41W</span></code></div>
  </div>
 </div>
  <div class="note" id="122742">  <div class="votes">
    <div id="Vu122742">
    <a href="/manual/vote-note.php?id=122742&amp;page=function.password-needs-rehash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122742">
    <a href="/manual/vote-note.php?id=122742&amp;page=function.password-needs-rehash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122742" title="64% like this...">
    9
    </div>
  </div>
  <a href="#122742" class="name">
  <strong class="user"><em>geekasylum at google mail</em></strong></a><a class="genanchor" href="#122742"> &para;</a><div class="date" title="2018-05-17 11:05"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122742">
<div class="phpcode"><code><span class="html">This function can indeed be used to assist in transparently updating legacy passwords (those not using the password_hash() function - eg: perhaps something using MD5 or SHA1)<br /><br />In legacy sites, when authenticating a user (during login) first check the password using password_verify(). If that fails it may simply be because the user's password hash was created long ago by a legacy or home-brew password algorithm.<br /><br />You can then re-check the password against the site's legacy password algorithm.  If that fails too, then the login fails, since the supplied password did not authenticate against either the new, or the old password tests.<br /><br />If any one of those two test was successfull, you know that the password is good so you would then call password_needs_rehash() on the stored hash, and it will properly indicate if the password hash needs to be re-computed, either because it's an unrecognised (legacy) hash or it's a modern hash created by password_hash(), which may just need its cost index updated.<br /><br />Simply store the recomputed hash in the database and you now have a password_verify() compatible password for that user and the second test can be skipped in future logins (but still check if it needs rehashing).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.password-needs-rehash&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.password-needs-rehash.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.password.php">Password Hashing Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.password-algos.php" title="password_&#8203;algos">password_&#8203;algos</a>
                        </li>
                                                <li class="">
                            <a href="function.password-get-info.php" title="password_&#8203;get_&#8203;info">password_&#8203;get_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.password-hash.php" title="password_&#8203;hash">password_&#8203;hash</a>
                        </li>
                                                <li class="current">
                            <a href="function.password-needs-rehash.php" title="password_&#8203;needs_&#8203;rehash">password_&#8203;needs_&#8203;rehash</a>
                        </li>
                                                <li class="">
                            <a href="function.password-verify.php" title="password_&#8203;verify">password_&#8203;verify</a>
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
