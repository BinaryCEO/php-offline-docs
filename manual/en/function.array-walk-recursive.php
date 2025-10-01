<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_walk_recursive - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-walk-recursive.php">
 <link rel="shorturl" href="https://www.php.net/array-walk-recursive">
 <link rel="alternate" href="https://www.php.net/array-walk-recursive" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-walk.php">
 <link rel="next" href="https://www.php.net/manual/en/function.arsort.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-walk-recursive.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-walk-recursive.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-walk-recursive.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-walk-recursive.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-walk-recursive.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-walk-recursive.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-walk-recursive.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-walk-recursive.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-walk-recursive.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-walk-recursive.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-walk-recursive.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Apply a user function recursively to every member of an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_walk_recursive - Manual" />
<meta name="twitter:description" content="Apply a user function recursively to every member of an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_walk_recursive - Manual" />
<meta itemprop="description" content="Apply a user function recursively to every member of an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Apply a user function recursively to every member of an array" />

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
        <a href="function.arsort.php">
          arsort &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-walk.php">
          &laquo; array_walk        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.array.php'>Arrays</a></li>      <li><a href='ref.array.php'>Array Functions</a></li>      </ul>
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
            <option value='en/function.array-walk-recursive.php' selected="selected">English</option>
            <option value='de/function.array-walk-recursive.php'>German</option>
            <option value='es/function.array-walk-recursive.php'>Spanish</option>
            <option value='fr/function.array-walk-recursive.php'>French</option>
            <option value='it/function.array-walk-recursive.php'>Italian</option>
            <option value='ja/function.array-walk-recursive.php'>Japanese</option>
            <option value='pt_BR/function.array-walk-recursive.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-walk-recursive.php'>Russian</option>
            <option value='tr/function.array-walk-recursive.php'>Turkish</option>
            <option value='uk/function.array-walk-recursive.php'>Ukrainian</option>
            <option value='zh/function.array-walk-recursive.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-walk-recursive" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_walk_recursive</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_walk_recursive</span> &mdash; <span class="dc-title">Apply a user function recursively to every member of an array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-walk-recursive-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_walk_recursive</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$arg</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   Applies the user-defined <code class="parameter">callback</code> function to each
   element of the <code class="parameter">array</code>. This function will recurse
   into deeper arrays.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.array-walk-recursive-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
       Typically, <code class="parameter">callback</code> takes on two parameters.
       The <code class="parameter">array</code> parameter&#039;s value being the first, and
       the key/index second.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If <code class="parameter">callback</code> needs to be working with the
        actual values of the array, specify the first parameter of
        <code class="parameter">callback</code> as a
        <a href="language.references.php" class="link">reference</a>. Then,
        any changes made to those elements will be made in the
        original array itself.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">arg</code></dt>
     <dd>
      <p class="para">
       If the optional <code class="parameter">arg</code> parameter is supplied,
       it will be passed as the third parameter to the
       <code class="parameter">callback</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>



 <div class="refsect1 returnvalues" id="refsect1-function.array-walk-recursive-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-walk-recursive-changelog">
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
 <td>8.2.0</td>
 <td>
  The return type is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> now; previously, it was <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
 </td>
</tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.array-walk-recursive-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5293">
    <p><strong>Example #1 <span class="function"><strong>array_walk_recursive()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$sweet </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'a' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'apple'</span><span style="color: #007700">, </span><span style="color: #DD0000">'b' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'banana'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$fruits </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'sweet' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$sweet</span><span style="color: #007700">, </span><span style="color: #DD0000">'sour' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'lemon'</span><span style="color: #007700">);<br /><br />function </span><span style="color: #0000BB">test_print</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$key</span><span style="color: #DD0000"> holds </span><span style="color: #0000BB">$item</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">array_walk_recursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$fruits</span><span style="color: #007700">, </span><span style="color: #DD0000">'test_print'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">a holds apple
b holds banana
sour holds lemon</pre>
</div>
    </div>
    <div class="example-contents"><p>
     You may notice that the key &#039;<code class="literal">sweet</code>&#039; is never displayed. Any key that holds an
     <span class="type"><a href="language.types.array.php" class="type array">array</a></span> will not be passed to the function.
    </p></div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.array-walk-recursive-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-walk.php" class="function" rel="rdfs-seeAlso">array_walk()</a> - Apply a user supplied function to every member of an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-walk-recursive.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-walk-recursive%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-walk-recursive&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-walk-recursive.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112339">  <div class="votes">
    <div id="Vu112339">
    <a href="/manual/vote-note.php?id=112339&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112339">
    <a href="/manual/vote-note.php?id=112339&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112339" title="88% like this...">
    331
    </div>
  </div>
  <a href="#112339" class="name">
  <strong class="user"><em>none at of dot your dot biz</em></strong></a><a class="genanchor" href="#112339"> &para;</a><div class="date" title="2013-06-03 10:50"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112339">
<div class="phpcode"><code><span class="html">Since this is only mentioned in the footnote of the output of one of the examples, I feel it should be spelled out:<br /><br />* THIS FUNCTION ONLY VISITS LEAF NODES *<br /><br />That is to say that if you have a tree of arrays with subarrays of subarrays, only the plain values at the leaves of the tree will be visited by the callback function.  The callback function isn't ever called for a nodes in the tree that subnodes (i.e., a subarray).  This has the effect as to make this function unusable for most practical situations.</span></code></div>
  </div>
 </div>
  <div class="note" id="122602">  <div class="votes">
    <div id="Vu122602">
    <a href="/manual/vote-note.php?id=122602&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122602">
    <a href="/manual/vote-note.php?id=122602&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122602" title="80% like this...">
    29
    </div>
  </div>
  <a href="#122602" class="name">
  <strong class="user"><em>r</em></strong></a><a class="genanchor" href="#122602"> &para;</a><div class="date" title="2018-04-08 02:54"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122602">
<div class="phpcode"><code><span class="html">How to modify external variable from inside recursive function using userdata argument.<br /><br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= [<br />   </span><span class="string">'one' </span><span class="keyword">=&gt; [</span><span class="string">'one_one' </span><span class="keyword">=&gt; </span><span class="default">11</span><span class="keyword">, </span><span class="string">'one_two' </span><span class="keyword">=&gt; </span><span class="default">12</span><span class="keyword">],<br />   </span><span class="string">'two' </span><span class="keyword">=&gt; </span><span class="default">2<br /></span><span class="keyword">];<br /><br /></span><span class="default">$counter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br /></span><span class="comment">//Does not persist<br /></span><span class="default">array_walk_recursive</span><span class="keyword">( </span><span class="default">$arr</span><span class="keyword">, function(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$counter</span><span class="keyword">) {<br />   </span><span class="default">$counter</span><span class="keyword">++;<br />   echo </span><span class="string">"</span><span class="default">$value</span><span class="string"> : </span><span class="default">$counter</span><span class="string">"</span><span class="keyword">;  <br />}, </span><span class="default">$counter</span><span class="keyword">);<br />echo </span><span class="string">"counter : </span><span class="default">$counter</span><span class="string">"</span><span class="keyword">; <br /><br /></span><span class="comment">// result<br />// 11 : 1<br />// 12 : 1<br />// 2 : 1<br />// counter: 0 <br /><br />//Persists only in same array node<br /></span><span class="default">array_walk_recursive</span><span class="keyword">( </span><span class="default">$arr</span><span class="keyword">, function(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, &amp;</span><span class="default">$counter</span><span class="keyword">) {<br />   </span><span class="default">$counter</span><span class="keyword">++;<br />   echo </span><span class="string">"</span><span class="default">$value</span><span class="string"> : </span><span class="default">$counter</span><span class="string">"</span><span class="keyword">;  <br />}, </span><span class="default">$counter</span><span class="keyword">);<br /><br /></span><span class="comment">// result<br />// 11 : 1<br />// 12 : 2<br />// 2 : 1<br />// counter : 0<br /><br />//Fully persistent. Using 'use' keyword<br /></span><span class="default">array_walk_recursive</span><span class="keyword">( </span><span class="default">$arr</span><span class="keyword">, function(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) use (&amp;</span><span class="default">$counter</span><span class="keyword">) {<br />   </span><span class="default">$counter</span><span class="keyword">++;<br />   echo </span><span class="string">"</span><span class="default">$value</span><span class="string"> : </span><span class="default">$counter</span><span class="string">"</span><span class="keyword">;  <br />}, </span><span class="default">$counter</span><span class="keyword">);<br />echo </span><span class="string">"counter : </span><span class="default">$counter</span><span class="string">"</span><span class="keyword">; <br /><br /></span><span class="comment">// result<br />// 11 : 1<br />// 12 : 2<br />// 2 : 3<br />// counter : 3</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106146">  <div class="votes">
    <div id="Vu106146">
    <a href="/manual/vote-note.php?id=106146&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106146">
    <a href="/manual/vote-note.php?id=106146&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106146" title="77% like this...">
    51
    </div>
  </div>
  <a href="#106146" class="name">
  <strong class="user"><em>ghoffman at salientdigital dot com</em></strong></a><a class="genanchor" href="#106146"> &para;</a><div class="date" title="2011-10-13 10:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106146">
<div class="phpcode"><code><span class="html">If you are wanting to change the values of an existing multi-dimensional array, as it says above in the note, you need to specify the first argument as a reference. All that means is, be sure to precede the $item variable with an ampersand (&amp;) as in the good_example below. <br /><br />Unfortunately the PHP example given doesn't do this. It actually took me a while to figure out why my function wasn't changing the original array, even though I was passing by reference. <br /><br />Here's the tip: Don't return any value from the function! Just change the value of $item that you passed in by reference. This is rather counter-intuitive since the vast majority of functions return a value.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// array_walk_recursive fails to change your array unless you pass by reference.<br />// Don't return values from your filter function, even though it's quite logical at a glance!<br /></span><span class="keyword">function </span><span class="default">bad_example</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">,</span><span class="default">$key</span><span class="keyword">){<br />   if(</span><span class="default">$key</span><span class="keyword">==</span><span class="string">'test'</span><span class="keyword">){<br />       return </span><span class="string">'PHP Rocks'</span><span class="keyword">;  </span><span class="comment">// Don't do it<br />   </span><span class="keyword">}else{<br />      return </span><span class="default">$item</span><span class="keyword">;  </span><span class="comment">// Don't do this either<br />   </span><span class="keyword">}<br />}<br /><br /></span><span class="comment">// array_walk_recursive pass-by-reference example<br /></span><span class="keyword">function </span><span class="default">good_example</span><span class="keyword">(&amp;</span><span class="default">$item</span><span class="keyword">,</span><span class="default">$key</span><span class="keyword">){<br />   if(</span><span class="default">$key</span><span class="keyword">==</span><span class="string">'test'</span><span class="keyword">){<br />        </span><span class="default">$item</span><span class="keyword">=</span><span class="string">'PHP Rocks'</span><span class="keyword">; </span><span class="comment">// Do This!<br />   </span><span class="keyword">}<br />}<br /><br /></span><span class="default">$arr </span><span class="keyword">= array(</span><span class="string">'a'</span><span class="keyword">=&gt;</span><span class="string">'1'</span><span class="keyword">,</span><span class="string">'b'</span><span class="keyword">=&gt;</span><span class="string">'2'</span><span class="keyword">,</span><span class="string">'test'</span><span class="keyword">=&gt;</span><span class="string">'Replace This'</span><span class="keyword">);<br /><br /></span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">,</span><span class="string">'bad_example'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="comment">/**<br /> * no errors, but prints...<br /> * array('a'=&gt;'1','b'=&gt;'2','test'=&gt;'Replace This');<br /> */<br /><br /></span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">,</span><span class="string">'good_example'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="comment">/**<br /> * prints...<br /> * array('a'=&gt;'1','b'=&gt;'2','test'=&gt;'PHP Rocks');<br /> */<br /><br /></span><span class="default">?&gt;<br /></span><br />Returning a value from your function does work if you pass by reference and modify $item before you return, but you will eat up memory very, very fast if you try it, even on an example as small as the one here.<br /><br />One other silly thing you might try first is something like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Resist the urge to do this, it doesn't work.<br /></span><span class="default">$filtered </span><span class="keyword">= </span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$unfiltered</span><span class="keyword">,</span><span class="string">'filter_function'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Of course, $filtered is just TRUE afterwards, not the filtered results you were wanting. Oh, it ran your function recursively alright, but changed all the values in the local function scope only and returns a boolean as the documentation states.</span></code></div>
  </div>
 </div>
  <div class="note" id="116876">  <div class="votes">
    <div id="Vu116876">
    <a href="/manual/vote-note.php?id=116876&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116876">
    <a href="/manual/vote-note.php?id=116876&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116876" title="66% like this...">
    16
    </div>
  </div>
  <a href="#116876" class="name">
  <strong class="user"><em>php at genjo dot fr</em></strong></a><a class="genanchor" href="#116876"> &para;</a><div class="date" title="2015-03-13 05:33"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116876">
<div class="phpcode"><code><span class="html">I use RecursiveIteratorIterator with parameter CATCH_GET_CHILD to iterate on leafs AND nodes instead of array_walk_recursive function :<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Iteration on leafs AND nodes<br /></span><span class="keyword">foreach (new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(new </span><span class="default">RecursiveArrayIterator</span><span class="keyword">(</span><span class="default">$candidate</span><span class="keyword">), </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">::</span><span class="default">CATCH_GET_CHILD</span><span class="keyword">) as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />    echo </span><span class="string">'My node ' </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">' with value ' </span><span class="keyword">. </span><span class="default">$value </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124036">  <div class="votes">
    <div id="Vu124036">
    <a href="/manual/vote-note.php?id=124036&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124036">
    <a href="/manual/vote-note.php?id=124036&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124036" title="66% like this...">
    3
    </div>
  </div>
  <a href="#124036" class="name">
  <strong class="user"><em>mike at mpsharp dot com</em></strong></a><a class="genanchor" href="#124036"> &para;</a><div class="date" title="2019-07-13 04:32"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124036">
<div class="phpcode"><code><span class="html">Here's a more general solution to modifying the array to which the leaf belongs.   You can unset the current key, or add siblings, etc.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Modified version of array_walk_recursive that passes in the array to the callback<br /> * The callback can modify the array or value by specifying a reference for the parameter.<br /> *<br /> * @param array The input array.<br /> * @param callable $callback($value, $key, $array)<br /> */<br /></span><span class="keyword">function </span><span class="default">array_walk_recursive_array</span><span class="keyword">(array &amp;</span><span class="default">$array</span><span class="keyword">, callable </span><span class="default">$callback</span><span class="keyword">) {<br />    foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; &amp;</span><span class="default">$v</span><span class="keyword">) {<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {<br />            </span><span class="default">array_walk_recursive_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">);<br />        } else {<br />            </span><span class="default">$callback</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">);<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121335">  <div class="votes">
    <div id="Vu121335">
    <a href="/manual/vote-note.php?id=121335&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121335">
    <a href="/manual/vote-note.php?id=121335&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121335" title="66% like this...">
    3
    </div>
  </div>
  <a href="#121335" class="name">
  <strong class="user"><em>CommentUser</em></strong></a><a class="genanchor" href="#121335"> &para;</a><div class="date" title="2017-07-07 01:55"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121335">
<div class="phpcode"><code><span class="html">The following code, which returns back a flattened array of sorts into the $results array, in newer versions of PHP raises the error "PHP Fatal error:  Call-time pass-by-reference has been removed":<br /><br /><span class="default">&lt;?php <br /><br />$results </span><span class="keyword">= array();<br /><br />function </span><span class="default">example_function </span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, &amp;</span><span class="default">$arr_values</span><span class="keyword">)<br />{<br />    </span><span class="default">$arr_values</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$item</span><span class="keyword">; <br />}<br /><br /></span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'example_function'</span><span class="keyword">, &amp;</span><span class="default">$results</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />This can be fixed using an anonymous function:<br /><br /><span class="default">&lt;?php<br /><br />$results </span><span class="keyword">= array();<br /><br /></span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, function (</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) use (&amp;</span><span class="default">$results</span><span class="keyword">){</span><span class="default">$results</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$item</span><span class="keyword">;});<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99639">  <div class="votes">
    <div id="Vu99639">
    <a href="/manual/vote-note.php?id=99639&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99639">
    <a href="/manual/vote-note.php?id=99639&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99639" title="66% like this...">
    8
    </div>
  </div>
  <a href="#99639" class="name">
  <strong class="user"><em>bradbeattie at gmail dot com</em></strong></a><a class="genanchor" href="#99639"> &para;</a><div class="date" title="2010-08-27 11:18"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99639">
<div class="phpcode"><code><span class="html">The description says "If funcname needs to be working with the actual values of the array, specify the first parameter of funcname as a reference." This isn't necessarily helpful as the function you're calling might be built in (e.g. trim or strip_tags). One option would be to create a version of these like so.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">trim_by_reference</span><span class="keyword">(&amp;</span><span class="default">$string</span><span class="keyword">) {
<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />The downside to this approach is that you need to create a wrapper function for each function you might want to call. Instead, we can use PHP 5.3's inline function syntax to create a new version of array_walk_recursive.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="comment">/**
<br />     * This function acts exactly like array_walk_recursive, except that it pretends that the function
<br />     * its calling replaces the value with its result.
<br />     * 
<br />     * @param $array The first value of the array will be passed into $function as the primary argument
<br />     * @param $function The function to be called on each element in the array, recursively
<br />     * @param $parameters An optional array of the additional parameters to be appeneded to the function
<br />     * 
<br />     * Example usage to alter $array to get the second, third and fourth character from each value
<br />     *     array_walk_recursive_referential($array, "substr", array("1","3"));
<br />     */
<br />    </span><span class="keyword">function </span><span class="default">array_walk_recursive_referential</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$function</span><span class="keyword">, </span><span class="default">$parameters </span><span class="keyword">= array()) {
<br />        </span><span class="default">$reference_function </span><span class="keyword">= function(&amp;</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$userdata</span><span class="keyword">) {
<br />            </span><span class="default">$parameters </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(array(</span><span class="default">$value</span><span class="keyword">), </span><span class="default">$userdata</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$userdata</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$parameters</span><span class="keyword">);
<br />        };
<br />        </span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$reference_function</span><span class="keyword">, array(</span><span class="default">$function</span><span class="keyword">, </span><span class="default">$parameters</span><span class="keyword">));
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />The advantage here is that we only explicitly define one wrapper function instead of potentially dozens.</span></code></div>
  </div>
 </div>
  <div class="note" id="114574">  <div class="votes">
    <div id="Vu114574">
    <a href="/manual/vote-note.php?id=114574&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114574">
    <a href="/manual/vote-note.php?id=114574&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114574" title="64% like this...">
    7
    </div>
  </div>
  <a href="#114574" class="name">
  <strong class="user"><em>gk at anuary dot com</em></strong></a><a class="genanchor" href="#114574"> &para;</a><div class="date" title="2014-03-07 09:29"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114574">
<div class="phpcode"><code><span class="html">array_walk_recursive itself cannot unset values. Even though you can pass array by reference, unsetting the value in the callback will only unset the variable in that scope.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * <a href="http://uk1.php.net/array_walk_recursive" rel="nofollow" target="_blank">http://uk1.php.net/array_walk_recursive</a> implementation that is used to remove nodes from the array.
<br /> *
<br /> * @param array The input array.
<br /> * @param callable $callback Function must return boolean value indicating whether to remove the node.
<br /> * @return array
<br /> */
<br /></span><span class="keyword">function </span><span class="default">walk_recursive_remove </span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">, callable </span><span class="default">$callback</span><span class="keyword">) {
<br />    foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {
<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {
<br />            </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">walk_recursive_remove</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">);
<br />        } else {
<br />            if (</span><span class="default">$callback</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">)) {
<br />                unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);
<br />            }
<br />        }
<br />    }
<br />
<br />    return </span><span class="default">$array</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />An up to date implementation of the above function can be looked up from <a href="https://github.com/gajus/marray/blob/master/src/marray.php#L116." rel="nofollow" target="_blank">https://github.com/gajus/marray/blob/master/src/marray.php#L116.</a></span></code></div>
  </div>
 </div>
  <div class="note" id="123182">  <div class="votes">
    <div id="Vu123182">
    <a href="/manual/vote-note.php?id=123182&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123182">
    <a href="/manual/vote-note.php?id=123182&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123182" title="60% like this...">
    1
    </div>
  </div>
  <a href="#123182" class="name">
  <strong class="user"><em>Dario</em></strong></a><a class="genanchor" href="#123182"> &para;</a><div class="date" title="2018-10-01 06:42"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123182">
<div class="phpcode"><code><span class="html">I was looking for how to change values of array since you can't pass array by reference anymore in new PHP versions, here is simple solution<br /><br /><span class="default">&lt;?php<br />array_walk_recursive</span><span class="keyword">(<br />    </span><span class="default">$myArray</span><span class="keyword">,<br />    function (&amp;</span><span class="default">$value</span><span class="keyword">) {<br />        if (</span><span class="comment">/*some condition*/</span><span class="keyword">) {<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="string">'New value'</span><span class="keyword">;<br />        }<br />    }<br />);<br /></span><span class="default">?&gt;<br /></span><br />After that $myArray will be altered with new value.</span></code></div>
  </div>
 </div>
  <div class="note" id="106340">  <div class="votes">
    <div id="Vu106340">
    <a href="/manual/vote-note.php?id=106340&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106340">
    <a href="/manual/vote-note.php?id=106340&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106340" title="60% like this...">
    2
    </div>
  </div>
  <a href="#106340" class="name">
  <strong class="user"><em>cyranix at cyranix dot com</em></strong></a><a class="genanchor" href="#106340"> &para;</a><div class="date" title="2011-10-28 07:45"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106340">
<div class="phpcode"><code><span class="html">I needed to add or modify values in an array with unknown structure. I was hoping to use array_walk_recursive for the task, but because I was also adding new nodes I came up with an alternate solution.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">/**<br />     * Sets key/value pairs at any depth on an array.<br />     * @param $data an array of key/value pairs to be added/modified<br />     * @param $array the array to operate on<br />     */<br />    </span><span class="keyword">function </span><span class="default">setNodes</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, &amp;</span><span class="default">$array</span><span class="keyword">)<br />    {<br />        </span><span class="default">$separator </span><span class="keyword">= </span><span class="string">'.'</span><span class="keyword">; </span><span class="comment">// set this to any string that won't occur in your keys<br />        </span><span class="keyword">foreach (</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$separator</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />                </span><span class="comment">// If the array doesn't contain a special separator character, just set the key/value pair. <br />                // If $value is an array, you will of course set nested key/value pairs just fine.<br />                </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            } else {<br />                </span><span class="comment">// In this case we're trying to target a specific nested node without overwriting any other siblings/ancestors. <br />                // The node or its ancestors may not exist yet.<br />                </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$separator</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">);<br />                </span><span class="comment">// Set the root of the tree.<br />                </span><span class="default">$opt_tree </span><span class="keyword">=&amp; </span><span class="default">$array</span><span class="keyword">;<br />                </span><span class="comment">// Start traversing the tree using the specified keys.<br />                </span><span class="keyword">while (</span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">)) {<br />                    </span><span class="comment">// If there are more keys after the current one...<br />                    </span><span class="keyword">if (</span><span class="default">$keys</span><span class="keyword">) {<br />                        if (!isset(</span><span class="default">$opt_tree</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) || !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$opt_tree</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />                            </span><span class="comment">// Create this node if it doesn't already exist.<br />                            </span><span class="default">$opt_tree</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = array();<br />                        }<br />                        </span><span class="comment">// Redefine the "root" of the tree to this node (assign by reference) then process the next key.<br />                        </span><span class="default">$opt_tree </span><span class="keyword">=&amp; </span><span class="default">$opt_tree</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />                    } else {<br />                        </span><span class="comment">// This is the last key to check, so assign the value.<br />                        </span><span class="default">$opt_tree</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    }<br />                }<br />            }<br />        }<br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />Sample usage: <br /><br /><span class="default">&lt;?php<br /><br />$x </span><span class="keyword">= array();<br /></span><span class="default">setNodes</span><span class="keyword">(array(</span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="string">'bar'</span><span class="keyword">, </span><span class="string">'baz' </span><span class="keyword">=&gt; array(</span><span class="string">'quux' </span><span class="keyword">=&gt; </span><span class="default">42</span><span class="keyword">, </span><span class="string">'hup' </span><span class="keyword">=&gt; </span><span class="default">101</span><span class="keyword">)), </span><span class="default">$x</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">); </span><span class="comment">// $x has the same structure as the first argument<br /></span><span class="default">setNodes</span><span class="keyword">(array(</span><span class="string">'jif.snee' </span><span class="keyword">=&gt; </span><span class="string">'hello world'</span><span class="keyword">, </span><span class="string">'baz.quux.wek' </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">), </span><span class="default">$x</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">); </span><span class="comment">// added $x['jif']['snee'] and modified $x['baz']['quux'] to be array('wek' =&gt; 5)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83624">  <div class="votes">
    <div id="Vu83624">
    <a href="/manual/vote-note.php?id=83624&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83624">
    <a href="/manual/vote-note.php?id=83624&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83624" title="60% like this...">
    1
    </div>
  </div>
  <a href="#83624" class="name">
  <strong class="user"><em>amoffat at amoffat dot com</em></strong></a><a class="genanchor" href="#83624"> &para;</a><div class="date" title="2008-06-04 05:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83624">
<div class="phpcode"><code><span class="html">&lt;?<br />function my_array_map() {<br />    $args = func_get_args();<br />    $arr = array_shift($args);<br />    <br />    foreach ($args as $fn) {<br />        $nfn = create_function('&amp;$v, $k, $fn', '$v = $fn($v);');<br />        array_walk_recursive($arr, $nfn, $fn);<br />    }<br />    return $arr;<br />}<br />?&gt;<br /><br />takes an array as the first argument, and functions as the other arguments.  it applies those functions recursively to the array</span></code></div>
  </div>
 </div>
  <div class="note" id="116604">  <div class="votes">
    <div id="Vu116604">
    <a href="/manual/vote-note.php?id=116604&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116604">
    <a href="/manual/vote-note.php?id=116604&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116604" title="58% like this...">
    2
    </div>
  </div>
  <a href="#116604" class="name">
  <strong class="user"><em>robin leffmann</em></strong></a><a class="genanchor" href="#116604"> &para;</a><div class="date" title="2015-01-28 03:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116604">
<div class="phpcode"><code><span class="html">A simple solution for walking a nested array to obtain the last set value of a specified key:<br /><br /><span class="default">&lt;?php<br /><br />$key </span><span class="keyword">= </span><span class="string">'blah'</span><span class="keyword">;<br /></span><span class="default">$val </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">array_walk_recursive</span><span class="keyword">( </span><span class="default">$your_array</span><span class="keyword">,<br />                      function(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">, </span><span class="default">$u</span><span class="keyword">) { if(</span><span class="default">$k </span><span class="keyword">=== </span><span class="default">$u</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) </span><span class="default">$u</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">; },<br />                      [</span><span class="default">$key </span><span class="keyword">,&amp;</span><span class="default">$val</span><span class="keyword">] );<br /><br />echo </span><span class="string">"</span><span class="default">$key</span><span class="string"> = </span><span class="default">$val</span><span class="string">"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62172">  <div class="votes">
    <div id="Vu62172">
    <a href="/manual/vote-note.php?id=62172&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62172">
    <a href="/manual/vote-note.php?id=62172&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62172" title="58% like this...">
    2
    </div>
  </div>
  <a href="#62172" class="name">
  <strong class="user"><em>gabrielu at hotmail dot com</em></strong></a><a class="genanchor" href="#62172"> &para;</a><div class="date" title="2006-02-21 01:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62172">
<div class="phpcode"><code><span class="html">I decided to add to the previous PHP 4 compatible version of array_walk_recursive() so that it would work within a class and as a standalone function.  Both instances are handled by the following function which I modified from omega13a at sbcglobal dot net.<br /><br />The following example is for usage within a class.  To use as a standalone function take it out of the class and rename it.  (Example: array_walk_recursive_2)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A_Class </span><span class="keyword">{<br /><br />function </span><span class="default">array_walk_recursive</span><span class="keyword">(&amp;</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$funcname</span><span class="keyword">, </span><span class="default">$userdata </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">) {<br />  if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'array_walk_recursive'</span><span class="keyword">)) {<br />    if(!</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$funcname</span><span class="keyword">))<br />      return </span><span class="default">false</span><span class="keyword">;<br /><br />    if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">))<br />      return </span><span class="default">false</span><span class="keyword">;<br /><br />    foreach(</span><span class="default">$input </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {<br />      if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />        if(isset(</span><span class="default">$this</span><span class="keyword">)) {<br />          eval(</span><span class="string">'$this-&gt;' </span><span class="keyword">. </span><span class="default">__FUNCTION__ </span><span class="keyword">. </span><span class="string">'($input[$key], $funcname, $userdata);'</span><span class="keyword">);<br />        } else {<br />          if(@</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">))<br />            eval(</span><span class="default">get_class</span><span class="keyword">() . </span><span class="string">'::' </span><span class="keyword">. </span><span class="default">__FUNCTION__ </span><span class="keyword">. </span><span class="string">'($input[$key], $funcname, $userdata);'</span><span class="keyword">);<br />          else<br />            eval(</span><span class="default">__FUNCTION__ </span><span class="keyword">. </span><span class="string">'($input[$key], $funcname, $userdata);'</span><span class="keyword">);<br />        }<br />      } else {<br />        </span><span class="default">$saved_value </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br /><br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$funcname</span><span class="keyword">)) {<br />          </span><span class="default">$f </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />          for(</span><span class="default">$a</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$a</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$funcname</span><span class="keyword">); </span><span class="default">$a</span><span class="keyword">++)<br />            if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$funcname</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">])) {<br />              </span><span class="default">$f </span><span class="keyword">.= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$funcname</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">]);<br />            } else {<br />              if(</span><span class="default">$a </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">)<br />                </span><span class="default">$f </span><span class="keyword">.= </span><span class="string">'::'</span><span class="keyword">;<br />              </span><span class="default">$f </span><span class="keyword">.= </span><span class="default">$funcname</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">];<br />            }<br />          </span><span class="default">$f </span><span class="keyword">.= </span><span class="string">'($value, $key' </span><span class="keyword">. (!empty(</span><span class="default">$userdata</span><span class="keyword">) ? </span><span class="string">', $userdata' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">) . </span><span class="string">');'</span><span class="keyword">;<br />          eval(</span><span class="default">$f</span><span class="keyword">);<br />        } else {<br />          if(!empty(</span><span class="default">$userdata</span><span class="keyword">))<br />            </span><span class="default">$funcname</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$userdata</span><span class="keyword">);<br />          else<br />            </span><span class="default">$funcname</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">);<br />        }<br /><br />        if(</span><span class="default">$value </span><span class="keyword">!= </span><span class="default">$saved_value</span><span class="keyword">)<br />          </span><span class="default">$input</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />      }<br />    }<br />    return </span><span class="default">true</span><span class="keyword">;<br />  } else {<br />    </span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$funcname</span><span class="keyword">, </span><span class="default">$userdata</span><span class="keyword">);<br />  }<br />}<br /><br />function </span><span class="default">kv_addslashes</span><span class="keyword">(&amp;</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">) {<br />  </span><span class="default">$v </span><span class="keyword">= </span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);<br />}<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage:<br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= array(<br />  </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="string">'"Hello World"'</span><span class="keyword">,<br />  </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="string">"'Hello World'"</span><span class="keyword">,<br />  </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="string">"Hello 'Worl\"d"</span><span class="keyword">,<br />  </span><span class="string">'d' </span><span class="keyword">=&gt; array(<br />    </span><span class="string">'A' </span><span class="keyword">=&gt; </span><span class="string">'H"e"l"l"o" "W"o"r"l"d'<br />    </span><span class="keyword">)<br />  );<br /><br /></span><span class="default">$class </span><span class="keyword">= new </span><span class="default">A_Class</span><span class="keyword">();<br /></span><span class="default">$class</span><span class="keyword">-&gt;</span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, array(&amp;</span><span class="default">$class</span><span class="keyword">, </span><span class="string">'kv_addslashes'</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113722">  <div class="votes">
    <div id="Vu113722">
    <a href="/manual/vote-note.php?id=113722&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113722">
    <a href="/manual/vote-note.php?id=113722&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113722" title="56% like this...">
    2
    </div>
  </div>
  <a href="#113722" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#113722"> &para;</a><div class="date" title="2013-11-21 10:42"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113722">
<div class="phpcode"><code><span class="html">since PHP 5.3.0, you will get a warning saying that "call-time pass-by-reference" is deprecated when you use &amp; in foo(&amp;$a);. And as of PHP 5.4.0, call-time pass-by-reference was removed, so using it will raise a fatal error.</span></code></div>
  </div>
 </div>
  <div class="note" id="121304">  <div class="votes">
    <div id="Vu121304">
    <a href="/manual/vote-note.php?id=121304&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121304">
    <a href="/manual/vote-note.php?id=121304&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121304" title="55% like this...">
    1
    </div>
  </div>
  <a href="#121304" class="name">
  <strong class="user"><em>lincoln dot du dot j at gmail dot com</em></strong></a><a class="genanchor" href="#121304"> &para;</a><div class="date" title="2017-07-03 06:40"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121304">
<div class="phpcode"><code><span class="html">multidimensional array to single array <br /><br />$array=[1=&gt;[2,5=&gt;[4,2],[7,8=&gt;[3,6]],5],4];<br />$arr=[];<br />array_walk_recursive($array, function($k){global $arr; $arr[]=$k;});<br />print_r($arr);<br /><br />Output<br /><br />Array ( [0] =&gt; 2 [1] =&gt; 4 [2] =&gt; 2 [3] =&gt; 7 [4] =&gt; 3 [5] =&gt; 6 [6] =&gt; 5 [7] =&gt; 4 )</span></code></div>
  </div>
 </div>
  <div class="note" id="130141">  <div class="votes">
    <div id="Vu130141">
    <a href="/manual/vote-note.php?id=130141&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130141">
    <a href="/manual/vote-note.php?id=130141&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130141" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130141" class="name">
  <strong class="user"><em>hans at loltek dot net</em></strong></a><a class="genanchor" href="#130141"> &para;</a><div class="date" title="2025-03-13 02:52"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130141">
<div class="phpcode"><code><span class="html">If you want to iterate both arrays and objects interchangeably:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_and_object_walk_recursive</span><span class="keyword">(array|</span><span class="default">object </span><span class="keyword">&amp;</span><span class="default">$array</span><span class="keyword">, callable </span><span class="default">$callback</span><span class="keyword">, </span><span class="default">mixed $arg </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">): </span><span class="default">true<br /></span><span class="keyword">{<br />    </span><span class="default">$argumentCount </span><span class="keyword">= </span><span class="default">func_num_args</span><span class="keyword">();<br />    if (</span><span class="default">$argumentCount </span><span class="keyword">&gt; </span><span class="default">3</span><span class="keyword">) {<br />        throw new </span><span class="default">\ArgumentCountError</span><span class="keyword">(</span><span class="string">"array_and_object_walk_recursive() expects at most 3 arguments, </span><span class="default">$argumentCount</span><span class="string"> given"</span><span class="keyword">);<br />    }<br />    </span><span class="default">$hasThirdArgument </span><span class="keyword">= (</span><span class="default">$argumentCount </span><span class="keyword">=== </span><span class="default">3</span><span class="keyword">);<br />    foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$value</span><span class="keyword">) {<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />            if (</span><span class="default">$hasThirdArgument</span><span class="keyword">) {<br />                </span><span class="default">array_and_object_walk_recursive</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">, </span><span class="default">$arg</span><span class="keyword">);<br />            } else {<br />                </span><span class="default">array_and_object_walk_recursive</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">);<br />            }<br />        }<br />        if (</span><span class="default">$hasThirdArgument</span><span class="keyword">) {<br />            (</span><span class="default">$callback</span><span class="keyword">)(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$arg</span><span class="keyword">);<br />        } else {<br />            (</span><span class="default">$callback</span><span class="keyword">)(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">);<br />        }<br />    }<br />    return </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// just mimicking array_walk_recursive<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;<br /></span>Useful if you have large array-and-object soup in production code.</span></code></div>
  </div>
 </div>
  <div class="note" id="125199">  <div class="votes">
    <div id="Vu125199">
    <a href="/manual/vote-note.php?id=125199&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125199">
    <a href="/manual/vote-note.php?id=125199&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125199" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125199" class="name">
  <strong class="user"><em>lincoln dot du dot j at gmail dot com</em></strong></a><a class="genanchor" href="#125199"> &para;</a><div class="date" title="2020-07-21 02:24"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125199">
<div class="phpcode"><code><span class="html">Normal function solution<br /><br />//1,2,2,3,6,7,3,1,4,2<br />$arr=[<br />    [1,2],<br />    [2,3],<br />    6,7,[3,1,[4,2]]<br />];<br /><br />function a($array){<br />    static $res=[];<br />    foreach($array as $val){<br />        if(is_array($val)){<br />            a($val);<br />        }else{<br />            $res[]=$val;<br />        }<br />    }<br />    return $res;<br />}<br /><br />print_r(a($arr));</span></code></div>
  </div>
 </div>
  <div class="note" id="121303">  <div class="votes">
    <div id="Vu121303">
    <a href="/manual/vote-note.php?id=121303&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121303">
    <a href="/manual/vote-note.php?id=121303&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121303" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121303" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#121303"> &para;</a><div class="date" title="2017-07-03 06:39"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121303">
<div class="phpcode"><code><span class="html">multidimensional array to single array <br /><br />$array=[1=&gt;[2,5=&gt;[4,2],[7,8=&gt;[3,6]],5],4];<br />$arr=[];<br />array_walk_recursive($array, function($k){global $arr; $arr[]=$k;});<br />print_r($arr);<br /><br />Output<br /><br />Array ( [0] =&gt; 2 [1] =&gt; 4 [2] =&gt; 2 [3] =&gt; 7 [4] =&gt; 3 [5] =&gt; 6 [6] =&gt; 5 [7] =&gt; 4 )</span></code></div>
  </div>
 </div>
  <div class="note" id="113058">  <div class="votes">
    <div id="Vu113058">
    <a href="/manual/vote-note.php?id=113058&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113058">
    <a href="/manual/vote-note.php?id=113058&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113058" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113058" class="name">
  <strong class="user"><em>Rodrigo Guariento</em></strong></a><a class="genanchor" href="#113058"> &para;</a><div class="date" title="2013-08-23 01:27"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113058">
<div class="phpcode"><code><span class="html">Simple array_walk_recursive:<br /><br />// var example<br />$myArray = Array(<br />  Array('keyA1' =&gt; '    textA1 ', 'keyA2' =&gt; '  textA2     '),<br />  Array('keyB1' =&gt; '    textB1 ', 'sub' =&gt; <br />        Array('keyB1_sub1' =&gt; '      textB1_sub1   '),<br />          Array('keyB1_sub2' =&gt; '      textB1_sub2   ')<br />      ),<br />  Array('keyC1' =&gt; '    textC1 ', 'keyC2' =&gt; '  textC2     '),<br />  Array('keyD1' =&gt; '    textD1 ', 'keyD2' =&gt; '  textD2     '),<br />  Array('keyE1' =&gt; '    textE1 ', 'keyE2' =&gt; '  textE2     ')<br />);<br /><br />// function for "trim" (or your function, use same structure)<br />function trimming($data) {<br />  if (gettype($data) == 'array')<br />    return array_map("trimming", $data);<br />  else<br />    return trim($data);<br />}<br /><br />// get array<br />$myArray = array_map("trimming", $myArray);<br /><br />// show array trimmed<br />var_dump($myArray);<br /><br />/*<br />RESULT<br /><br />array (size=5)<br />  0 =&gt; <br />    array (size=2)<br />      'keyA1' =&gt; string 'textA1' (length=6)<br />      'keyA2' =&gt; string 'textA2' (length=6)<br />  1 =&gt; <br />    array (size=3)<br />      'keyB1' =&gt; string 'textB1' (length=6)<br />      'sub' =&gt; <br />        array (size=1)<br />          'keyB1_sub1' =&gt; string 'textB1_sub1' (length=11)<br />      0 =&gt; <br />        array (size=1)<br />          'keyB1_sub2' =&gt; string 'textB1_sub2' (length=11)<br />  2 =&gt; <br />    array (size=2)<br />      'keyC1' =&gt; string 'textC1' (length=6)<br />      'keyC2' =&gt; string 'textC2' (length=6)<br />  3 =&gt; <br />    array (size=2)<br />      'keyD1' =&gt; string 'textD1' (length=6)<br />      'keyD2' =&gt; string 'textD2' (length=6)<br />  4 =&gt; <br />    array (size=2)<br />      'keyE1' =&gt; string 'textE1' (length=6)<br />      'keyE2' =&gt; string 'textE2' (length=6)<br /><br />*/</span></code></div>
  </div>
 </div>
  <div class="note" id="110446">  <div class="votes">
    <div id="Vu110446">
    <a href="/manual/vote-note.php?id=110446&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110446">
    <a href="/manual/vote-note.php?id=110446&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110446" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#110446" class="name">
  <strong class="user"><em>chris at willowsconsulting dot ie</em></strong></a><a class="genanchor" href="#110446"> &para;</a><div class="date" title="2012-10-23 10:11"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110446">
<div class="phpcode"><code><span class="html">To convert all values of an array in UTF8, do this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">convert_before_json</span><span class="keyword">(&amp;</span><span class="default">$item</span><span class="keyword">, &amp;</span><span class="default">$key</span><span class="keyword">)<br />{<br />   </span><span class="default">$item</span><span class="keyword">=</span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">);<br />}<br /><br /></span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$your_array</span><span class="keyword">,</span><span class="string">"convert_before_json"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81835">  <div class="votes">
    <div id="Vu81835">
    <a href="/manual/vote-note.php?id=81835&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81835">
    <a href="/manual/vote-note.php?id=81835&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81835" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#81835" class="name">
  <strong class="user"><em>JW</em></strong></a><a class="genanchor" href="#81835"> &para;</a><div class="date" title="2008-03-14 05:59"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81835">
<div class="phpcode"><code><span class="html">This function has a serious bug, which is still not fixed as of the PHP 5.2.5 release. After you call it, it can accidentally modify your original array. Save yourself hours of frustration by reading on.<br /><br />The bug is here: <a href="http://bugs.php.net/bug.php?id=42850," rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=42850,</a> and it looks like it will be fixed for 5.3.<br /><br />If the array that you walk contains other array elements, they will be turned into references. This will happen even if the callback function doesn't take its first argument by reference, and doesn't do anything to the values.<br /><br />For example, try this:<br /><span class="default">&lt;?php<br />$data </span><span class="keyword">= array (</span><span class="string">'key1' </span><span class="keyword">=&gt; </span><span class="string">'val1'</span><span class="keyword">, </span><span class="string">'key2' </span><span class="keyword">=&gt; array(</span><span class="string">'key3' </span><span class="keyword">=&gt; </span><span class="string">'val3'</span><span class="keyword">));<br />function </span><span class="default">foo</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">){}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The original array has no references. Now try this:<br /><span class="default">&lt;?php<br />array_walk_recursive</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="string">'foo'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Now key2 is a reference, not just an array. So if you do this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">test</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">){</span><span class="default">$item</span><span class="keyword">[</span><span class="string">'key2'</span><span class="keyword">] = array();}<br /></span><span class="default">test</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />you will see that test modifies $data, even though it shouldn't.<br /><br />One workaround is to immediately make a deep copy of the array after calling array_walk_recursive, like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_duplicate</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) {<br />  if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)) return </span><span class="default">$input</span><span class="keyword">;<br />  </span><span class="default">$output </span><span class="keyword">= array();<br />  foreach (</span><span class="default">$input </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">$output</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">array_duplicate</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />  }<br />  return </span><span class="default">$output</span><span class="keyword">;<br />}<br /></span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="string">'foo'</span><span class="keyword">);<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">array_duplicate</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />After doing that, the references are gone.</span></code></div>
  </div>
 </div>
  <div class="note" id="122508">  <div class="votes">
    <div id="Vu122508">
    <a href="/manual/vote-note.php?id=122508&amp;page=function.array-walk-recursive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122508">
    <a href="/manual/vote-note.php?id=122508&amp;page=function.array-walk-recursive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122508" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#122508" class="name">
  <strong class="user"><em>seductiveapps.com</em></strong></a><a class="genanchor" href="#122508"> &para;</a><div class="date" title="2018-03-14 05:45"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122508">
<div class="phpcode"><code><span class="html">usage :<br />$nd = $newsApp2-&gt;dataSources();<br />//walkArray ($nd, 'walkArray_printKey', 'walkArray_printValue');<br />// prints the entire array<br /><br />$x = chaseToPath ($nd, 'RSS_list/English News',false);<br />walkArray ($x, 'walkArray_printKey', 'walkArray_printValue');<br />// prints everything under $nd['RSS_list']['English News']<br /><br />function &amp;chaseToPath (&amp;$wm, $path, $create=false) {<br />    //var_dump ($create); die();<br />    //echo '$wm=&lt;pre&gt;'; var_dump ($wm);echo '&lt;/pre&gt;'; //die();<br />    //$path = str_replace ('/', '/d/', $path);<br />    //$path .= '/d';<br />    $nodes = explode ('/', $path);<br />    $chase = &amp;chase ($wm, $nodes, $create);<br />    <br />    //echo '$wm=&lt;pre&gt;'; var_dump ($wm);echo '&lt;/pre&gt;'; die();<br />    /*<br />    $dbg = array (<br />        '$path' =&gt; $path,<br />        '$nodes' =&gt; $nodes,<br />        '$wm' =&gt; $wm,<br />        '$chase' =&gt; $chase<br />    );<br />    echo '$dbg=&lt;pre style="background:red;color:yellow;"&gt;'; var_dump ($dbg); echo '&lt;/pre&gt;';<br />    */<br />    //die();<br />    <br />    <br />    $false = false;<br />    if (good($chase)) {<br />        $arr = &amp;result($chase);    <br />        return $arr;<br />    } else return $false;<br />}        <br /><br />function &amp;chase (&amp;$arr, $indexes, $create=false) {<br />        if (false) {<br />        echo 'sitewide/functions.php --- $arr=&lt;pre&gt;'; var_dump ($arr); echo '&lt;/pre&gt;';<br />        echo 'sitewide/functions.php --- $indexes=&lt;pre&gt;'; var_dump ($indexes); echo '&lt;/pre&gt;';<br />        echo 'sitewide/functions.php --- $create=&lt;pre&gt;'; var_dump ($create); echo '&lt;/pre&gt;';<br />        }<br />    $r = &amp;$arr;<br />    foreach ($indexes as $idx) {<br />            //echo 'sitewide/functions.php --- $idx=&lt;pre&gt;'; var_dump ($idx); var_dump (array_key_exists($idx,$r)); var_dump ($r); echo '&lt;/pre&gt;';<br />            if (<br />                    is_array($r)<br />                    &amp;&amp; (<br />                            $create===true <br />                            || array_key_exists($idx,$r)<br />                    )<br />            ) {<br />                    if ($create===true &amp;&amp; !array_key_exists($idx,$r)) $r[$idx]=array();<br />                    //echo 'sitewide/functions.php --- $idx=&lt;pre&gt;'; var_dump ($idx); echo '&lt;/pre&gt;';<br />                    $r = &amp;$r[$idx];<br />            } else {<br />                    $err = array(<br />                    'msg' =&gt; 'Could not walk the full tree',<br />                    'vars' =&gt; array(<br />                            '$idx--error'=&gt;$idx,<br />                            '$indexes'=&gt;$indexes,<br />                            '$arr'=&gt;$arr<br />                            )<br />                    );<br />                    badResult (E_USER_NOTICE, $err);<br />                    $ret = false; // BUG #2 squashed<br />                    return $ret;<br />            }<br />    }<br />    <br />        //echo 'sitewide/functions.php --- $r=&lt;pre&gt;'; var_dump ($r); echo '&lt;/pre&gt;';<br />    return goodResult($r);<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-walk-recursive&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-walk-recursive.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.array.php">Array Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.array.php" title="array">array</a>
                        </li>
                                                <li class="">
                            <a href="function.array-all.php" title="array_&#8203;all">array_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.array-any.php" title="array_&#8203;any">array_&#8203;any</a>
                        </li>
                                                <li class="">
                            <a href="function.array-change-key-case.php" title="array_&#8203;change_&#8203;key_&#8203;case">array_&#8203;change_&#8203;key_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.array-chunk.php" title="array_&#8203;chunk">array_&#8203;chunk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-column.php" title="array_&#8203;column">array_&#8203;column</a>
                        </li>
                                                <li class="">
                            <a href="function.array-combine.php" title="array_&#8203;combine">array_&#8203;combine</a>
                        </li>
                                                <li class="">
                            <a href="function.array-count-values.php" title="array_&#8203;count_&#8203;values">array_&#8203;count_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff.php" title="array_&#8203;diff">array_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-assoc.php" title="array_&#8203;diff_&#8203;assoc">array_&#8203;diff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-key.php" title="array_&#8203;diff_&#8203;key">array_&#8203;diff_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-uassoc.php" title="array_&#8203;diff_&#8203;uassoc">array_&#8203;diff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-ukey.php" title="array_&#8203;diff_&#8203;ukey">array_&#8203;diff_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill.php" title="array_&#8203;fill">array_&#8203;fill</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill-keys.php" title="array_&#8203;fill_&#8203;keys">array_&#8203;fill_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-filter.php" title="array_&#8203;filter">array_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find.php" title="array_&#8203;find">array_&#8203;find</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find-key.php" title="array_&#8203;find_&#8203;key">array_&#8203;find_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-flip.php" title="array_&#8203;flip">array_&#8203;flip</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect.php" title="array_&#8203;intersect">array_&#8203;intersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-assoc.php" title="array_&#8203;intersect_&#8203;assoc">array_&#8203;intersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-key.php" title="array_&#8203;intersect_&#8203;key">array_&#8203;intersect_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-uassoc.php" title="array_&#8203;intersect_&#8203;uassoc">array_&#8203;intersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-ukey.php" title="array_&#8203;intersect_&#8203;ukey">array_&#8203;intersect_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-is-list.php" title="array_&#8203;is_&#8203;list">array_&#8203;is_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-exists.php" title="array_&#8203;key_&#8203;exists">array_&#8203;key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-first.php" title="array_&#8203;key_&#8203;first">array_&#8203;key_&#8203;first</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-last.php" title="array_&#8203;key_&#8203;last">array_&#8203;key_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.array-keys.php" title="array_&#8203;keys">array_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-map.php" title="array_&#8203;map">array_&#8203;map</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge.php" title="array_&#8203;merge">array_&#8203;merge</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge-recursive.php" title="array_&#8203;merge_&#8203;recursive">array_&#8203;merge_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-multisort.php" title="array_&#8203;multisort">array_&#8203;multisort</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pad.php" title="array_&#8203;pad">array_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pop.php" title="array_&#8203;pop">array_&#8203;pop</a>
                        </li>
                                                <li class="">
                            <a href="function.array-product.php" title="array_&#8203;product">array_&#8203;product</a>
                        </li>
                                                <li class="">
                            <a href="function.array-push.php" title="array_&#8203;push">array_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.array-rand.php" title="array_&#8203;rand">array_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reduce.php" title="array_&#8203;reduce">array_&#8203;reduce</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace.php" title="array_&#8203;replace">array_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace-recursive.php" title="array_&#8203;replace_&#8203;recursive">array_&#8203;replace_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reverse.php" title="array_&#8203;reverse">array_&#8203;reverse</a>
                        </li>
                                                <li class="">
                            <a href="function.array-search.php" title="array_&#8203;search">array_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.array-shift.php" title="array_&#8203;shift">array_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-slice.php" title="array_&#8203;slice">array_&#8203;slice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-splice.php" title="array_&#8203;splice">array_&#8203;splice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-sum.php" title="array_&#8203;sum">array_&#8203;sum</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff.php" title="array_&#8203;udiff">array_&#8203;udiff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-assoc.php" title="array_&#8203;udiff_&#8203;assoc">array_&#8203;udiff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-uassoc.php" title="array_&#8203;udiff_&#8203;uassoc">array_&#8203;udiff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect.php" title="array_&#8203;uintersect">array_&#8203;uintersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-assoc.php" title="array_&#8203;uintersect_&#8203;assoc">array_&#8203;uintersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-uassoc.php" title="array_&#8203;uintersect_&#8203;uassoc">array_&#8203;uintersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unique.php" title="array_&#8203;unique">array_&#8203;unique</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unshift.php" title="array_&#8203;unshift">array_&#8203;unshift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-values.php" title="array_&#8203;values">array_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk.php" title="array_&#8203;walk">array_&#8203;walk</a>
                        </li>
                                                <li class="current">
                            <a href="function.array-walk-recursive.php" title="array_&#8203;walk_&#8203;recursive">array_&#8203;walk_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.arsort.php" title="arsort">arsort</a>
                        </li>
                                                <li class="">
                            <a href="function.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="function.compact.php" title="compact">compact</a>
                        </li>
                                                <li class="">
                            <a href="function.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="function.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="function.end.php" title="end">end</a>
                        </li>
                                                <li class="">
                            <a href="function.extract.php" title="extract">extract</a>
                        </li>
                                                <li class="">
                            <a href="function.in-array.php" title="in_&#8203;array">in_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="function.key-exists.php" title="key_&#8203;exists">key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.krsort.php" title="krsort">krsort</a>
                        </li>
                                                <li class="">
                            <a href="function.ksort.php" title="ksort">ksort</a>
                        </li>
                                                <li class="">
                            <a href="function.list.php" title="list">list</a>
                        </li>
                                                <li class="">
                            <a href="function.natcasesort.php" title="natcasesort">natcasesort</a>
                        </li>
                                                <li class="">
                            <a href="function.natsort.php" title="natsort">natsort</a>
                        </li>
                                                <li class="">
                            <a href="function.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="function.pos.php" title="pos">pos</a>
                        </li>
                                                <li class="">
                            <a href="function.prev.php" title="prev">prev</a>
                        </li>
                                                <li class="">
                            <a href="function.range.php" title="range">range</a>
                        </li>
                                                <li class="">
                            <a href="function.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="function.rsort.php" title="rsort">rsort</a>
                        </li>
                                                <li class="">
                            <a href="function.shuffle.php" title="shuffle">shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.sizeof.php" title="sizeof">sizeof</a>
                        </li>
                                                <li class="">
                            <a href="function.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="function.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="">
                            <a href="function.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="">
                            <a href="function.usort.php" title="usort">usort</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.each.php" title="each">each</a>
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
