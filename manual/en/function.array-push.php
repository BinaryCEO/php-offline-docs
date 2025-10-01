<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_push - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-push.php">
 <link rel="shorturl" href="https://www.php.net/array-push">
 <link rel="alternate" href="https://www.php.net/array-push" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-product.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-rand.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-push.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-push.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-push.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-push.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-push.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-push.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-push.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-push.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-push.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-push.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-push.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Push one or more elements onto the end of array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_push - Manual" />
<meta name="twitter:description" content="Push one or more elements onto the end of array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_push - Manual" />
<meta itemprop="description" content="Push one or more elements onto the end of array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Push one or more elements onto the end of array" />

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
        <a href="function.array-rand.php">
          array_rand &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-product.php">
          &laquo; array_product        </a>
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
            <option value='en/function.array-push.php' selected="selected">English</option>
            <option value='de/function.array-push.php'>German</option>
            <option value='es/function.array-push.php'>Spanish</option>
            <option value='fr/function.array-push.php'>French</option>
            <option value='it/function.array-push.php'>Italian</option>
            <option value='ja/function.array-push.php'>Japanese</option>
            <option value='pt_BR/function.array-push.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-push.php'>Russian</option>
            <option value='tr/function.array-push.php'>Turkish</option>
            <option value='uk/function.array-push.php'>Ukrainian</option>
            <option value='zh/function.array-push.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-push" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_push</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_push</span> &mdash; <span class="dc-title">Push one or more elements onto the end of array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-push-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_push</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$values</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_push()</strong></span> treats <code class="parameter">array</code> as a
   stack, and pushes the passed variables onto the end of
   <code class="parameter">array</code>. The length of <code class="parameter">array</code>
   increases by the number of variables pushed. Has the same effect as:
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array</span><span style="color: #007700">[] = </span><span style="color: #0000BB">$var</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   repeated for each passed value.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    If you use <span class="function"><strong>array_push()</strong></span> to add one element to the
    array, it&#039;s better to use <code class="literal">$array[] = </code> because in that
    way there is no overhead of calling a function.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    <span class="function"><strong>array_push()</strong></span> will raise a warning if the first
    argument is not an array. This differed from the
    <code class="literal">$var[]</code> behaviour where a new array was created, prior to PHP 7.1.0.
   </span>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.array-push-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">values</code></dt>
     <dd>
      <p class="para">
       The values to push onto the end of the <code class="parameter">array</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.array-push-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the new number of elements in the array.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-push-changelog">
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
       <td>7.3.0</td>
       <td>
        This function can now be called with only one parameter. Formerly, at
        least two parameters have been required.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.array-push-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5263">
    <p><strong>Example #1 <span class="function"><strong>array_push()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stack </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"orange"</span><span style="color: #007700">, </span><span style="color: #DD0000">"banana"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_push</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">, </span><span style="color: #DD0000">"apple"</span><span style="color: #007700">, </span><span style="color: #DD0000">"raspberry"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; orange
    [1] =&gt; banana
    [2] =&gt; apple
    [3] =&gt; raspberry
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.array-push-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-pop.php" class="function" rel="rdfs-seeAlso">array_pop()</a> - Pop the element off the end of array</span></li>
    <li><span class="function"><a href="function.array-shift.php" class="function" rel="rdfs-seeAlso">array_shift()</a> - Shift an element off the beginning of array</span></li>
    <li><span class="function"><a href="function.array-unshift.php" class="function" rel="rdfs-seeAlso">array_unshift()</a> - Prepend one or more elements to the beginning of an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-push.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-push%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-push&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-push.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108118">  <div class="votes">
    <div id="Vu108118">
    <a href="/manual/vote-note.php?id=108118&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108118">
    <a href="/manual/vote-note.php?id=108118&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108118" title="79% like this...">
    1260
    </div>
  </div>
  <a href="#108118" class="name">
  <strong class="user"><em>Rodrigo de Aquino</em></strong></a><a class="genanchor" href="#108118"> &para;</a><div class="date" title="2012-03-30 03:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108118">
<div class="phpcode"><code><span class="html">If you're going to use array_push() to insert a "$key" =&gt; "$value" pair into an array, it can be done using the following:<br /><br />    $data[$key] = $value;<br /><br />It is not necessary to use array_push.</span></code></div>
  </div>
 </div>
  <div class="note" id="83388">  <div class="votes">
    <div id="Vu83388">
    <a href="/manual/vote-note.php?id=83388&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83388">
    <a href="/manual/vote-note.php?id=83388&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83388" title="82% like this...">
    716
    </div>
  </div>
  <a href="#83388" class="name">
  <strong class="user"><em>bxi at apparoat dot nl</em></strong></a><a class="genanchor" href="#83388"> &para;</a><div class="date" title="2008-05-23 04:29"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83388">
<div class="phpcode"><code><span class="html">I've done a small comparison between array_push() and the $array[] method and the $array[] seems to be a lot faster.<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array();<br />for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt;= </span><span class="default">100000</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)<br />{<br />    </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">$x</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>takes 0.0622200965881 seconds<br /><br />and<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array();<br />for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt;= </span><span class="default">100000</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)<br />{<br />    </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>takes 1.63195490837 seconds<br /><br />so if your not making use of the return value of array_push() its better to use the $array[] way.<br /><br />Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="118963">  <div class="votes">
    <div id="Vu118963">
    <a href="/manual/vote-note.php?id=118963&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118963">
    <a href="/manual/vote-note.php?id=118963&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118963" title="71% like this...">
    142
    </div>
  </div>
  <a href="#118963" class="name">
  <strong class="user"><em>mrgreen dot webpost at gmail dot com</em></strong></a><a class="genanchor" href="#118963"> &para;</a><div class="date" title="2016-03-09 02:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118963">
<div class="phpcode"><code><span class="html">Rodrigo de Aquino asserted that instead of using array_push to append to an associative array you can instead just do...<br /><br />        $data[$key] = $value;<br /><br />...but this is actually not true. Unlike array_push and even...<br /><br />        $data[] = $value;<br /><br />...Rodrigo's suggestion is NOT guaranteed to append the new element to the END of the array. For instance...<br /><br />        $data['one'] = 1;<br />        $data['two'] = 2;<br />        $data['three'] = 3;<br />        $data['four'] = 4;<br /> <br />...might very well result in an array that looks like this...<br /><br />       [ "four" =&gt; 4, "one" =&gt; 1, "three" =&gt; 3, "two" =&gt; 2 ]<br /><br />I can only assume that PHP sorts the array as elements are added to make it easier for it to find a specified element by its key later. In many cases it won't matter if the array is not stored internally in the same order you added the elements, but if, for instance, you execute a foreach on the array later, the elements may not be processed in the order you need them to be.<br /><br />If you want to add elements to the END of an associative array you should use the unary array union operator (+=) instead...<br /><br />       $data['one'] = 1;<br />       $data += [ "two" =&gt; 2 ];<br />       $data += [ "three" =&gt; 3 ];<br />       $data += [ "four" =&gt; 4 ];<br /><br />You can also, of course, append more than one element at once...<br /><br />       $data['one'] = 1;<br />       $data += [ "two" =&gt; 2, "three" =&gt; 3 ];<br />       $data += [ "four" =&gt; 4 ];<br /><br />Note that like array_push (but unlike $array[] =) the array must exist before the unary union, which means that if you are building an array in a loop you need to declare an empty array first...<br /><br />       $data = [];<br />       for ( $i = 1; $i &lt; 5; $i++ ) {<br />              $data += [ "element$i" =&gt; $i ];<br />       }<br /><br />...which will result in an array that looks like this...<br /><br />      [ "element1" =&gt; 1, "element2" =&gt; 2, "element3" =&gt; 3, "element4" =&gt; 4 ]</span></code></div>
  </div>
 </div>
  <div class="note" id="84959">  <div class="votes">
    <div id="Vu84959">
    <a href="/manual/vote-note.php?id=84959&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84959">
    <a href="/manual/vote-note.php?id=84959&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84959" title="63% like this...">
    53
    </div>
  </div>
  <a href="#84959" class="name">
  <strong class="user"><em>willdemaine at gmail dot com</em></strong></a><a class="genanchor" href="#84959"> &para;</a><div class="date" title="2008-08-07 07:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84959">
<div class="phpcode"><code><span class="html">If you're adding multiple values to an array in a loop, it's faster to use array_push than repeated [] = statements that I see all the time:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">timer<br /></span><span class="keyword">{<br />        private </span><span class="default">$start</span><span class="keyword">;<br />        private </span><span class="default">$end</span><span class="keyword">;<br /><br />        public function </span><span class="default">timer</span><span class="keyword">()<br />        {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        }<br /><br />        public function </span><span class="default">Finish</span><span class="keyword">()<br />        {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">end </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        }<br /><br />        private function </span><span class="default">GetStart</span><span class="keyword">()<br />        {<br />                if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">))<br />                        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">;<br />                else<br />                        return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        private function </span><span class="default">GetEnd</span><span class="keyword">()<br />        {<br />                if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">end</span><span class="keyword">))<br />                        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">end</span><span class="keyword">;<br />                else<br />                        return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        public function </span><span class="default">GetDiff</span><span class="keyword">()<br />        {<br />                return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">GetEnd</span><span class="keyword">() - </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">GetStart</span><span class="keyword">();<br />        }<br /><br />        public function </span><span class="default">Reset</span><span class="keyword">()<br />        {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        }<br /><br />}<br /><br />echo </span><span class="string">"Adding 100k elements to array with []\n\n"</span><span class="keyword">;<br /></span><span class="default">$ta </span><span class="keyword">= array();<br /></span><span class="default">$test </span><span class="keyword">= new </span><span class="default">Timer</span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">100000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />{<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />}<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">Finish</span><span class="keyword">();<br />echo </span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">GetDiff</span><span class="keyword">();<br /><br />echo </span><span class="string">"\n\nAdding 100k elements to array with array_push\n\n"</span><span class="keyword">;<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">Reset</span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">100000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />{<br />        </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$ta</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">);<br />}<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">Finish</span><span class="keyword">();<br />echo </span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">GetDiff</span><span class="keyword">();<br /><br />echo </span><span class="string">"\n\nAdding 100k elements to array with [] 10 per iteration\n\n"</span><span class="keyword">;<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">Reset</span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />{<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        </span><span class="default">$ta</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />}<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">Finish</span><span class="keyword">();<br />echo </span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">GetDiff</span><span class="keyword">();<br /><br />echo </span><span class="string">"\n\nAdding 100k elements to array with array_push 10 per iteration\n\n"</span><span class="keyword">;<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">Reset</span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />{<br />        </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$ta</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">);<br />}<br /></span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">Finish</span><span class="keyword">();<br />echo </span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">GetDiff</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Output<br /><br />$ php5 arraypush.php<br />X-Powered-By: PHP/5.2.5<br />Content-type: text/html<br /><br />Adding 100k elements to array with []<br /><br />0.044686794281006<br /><br />Adding 100k elements to array with array_push<br /><br />0.072616100311279<br /><br />Adding 100k elements to array with [] 10 per iteration<br /><br />0.034690141677856<br /><br />Adding 100k elements to array with array_push 10 per iteration<br /><br />0.023932933807373</span></code></div>
  </div>
 </div>
  <div class="note" id="122915">  <div class="votes">
    <div id="Vu122915">
    <a href="/manual/vote-note.php?id=122915&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122915">
    <a href="/manual/vote-note.php?id=122915&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122915" title="61% like this...">
    23
    </div>
  </div>
  <a href="#122915" class="name">
  <strong class="user"><em>yhusky at qq dot com</em></strong></a><a class="genanchor" href="#122915"> &para;</a><div class="date" title="2018-07-06 05:52"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122915">
<div class="phpcode"><code><span class="html">There is a mistake in the note by egingell at sisna dot com 12 years ago. The tow dimensional array will output "d,e,f", not "a,b,c".<br /><br /><span class="default">&lt;?php<br />$stack </span><span class="keyword">= array(</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">);<br /></span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">, array(</span><span class="string">'d'</span><span class="keyword">, </span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'f'</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The above will output this:<br />Array (<br />  [0] =&gt; a<br />  [1] =&gt; b<br />  [2] =&gt; c<br />  [3] =&gt; Array (<br />     [0] =&gt; d<br />     [1] =&gt; e<br />     [2] =&gt; f<br />  )<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="119229">  <div class="votes">
    <div id="Vu119229">
    <a href="/manual/vote-note.php?id=119229&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119229">
    <a href="/manual/vote-note.php?id=119229&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119229" title="60% like this...">
    6
    </div>
  </div>
  <a href="#119229" class="name">
  <strong class="user"><em>raat1979 at gmail dot com</em></strong></a><a class="genanchor" href="#119229"> &para;</a><div class="date" title="2016-04-23 02:39"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119229">
<div class="phpcode"><code><span class="html">Unfortunately array_push returns the new number of items in the array<br />It does not give you the key of the item you just added, in numeric arrays you could do -1, you do however need to be sure that no associative key exists as that would break the assumption<br /><br />It would have been better if array_push would have returned the key of the item just added like the below function<br />(perhaps a native variant would be a good idea...)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'array_add'</span><span class="keyword">)){<br />    function </span><span class="default">array_add</span><span class="keyword">(array &amp;</span><span class="default">$array</span><span class="keyword">,</span><span class="default">$value </span><span class="comment">/*[, $...]*/</span><span class="keyword">){<br />        </span><span class="default">$values </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();     </span><span class="comment">//get all values<br />        </span><span class="default">$values</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]= &amp;</span><span class="default">$array</span><span class="keyword">;        </span><span class="comment">//REFERENCE!<br />        </span><span class="default">$org</span><span class="keyword">=</span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);              </span><span class="comment">//where are we?<br />        </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="string">'array_push'</span><span class="keyword">,</span><span class="default">$values</span><span class="keyword">);<br />        </span><span class="default">end</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);                 </span><span class="comment">// move to the last item<br />        </span><span class="default">$key </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);         </span><span class="comment">//get the key of the last item<br />        </span><span class="keyword">if(</span><span class="default">$org</span><span class="keyword">===</span><span class="default">null</span><span class="keyword">){<br />            </span><span class="comment">//was at eof, added something, move to it<br />            </span><span class="keyword">return </span><span class="default">$key</span><span class="keyword">;<br />        }elseif(</span><span class="default">$org</span><span class="keyword">&lt;(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">)){ </span><span class="comment">//somewhere in the middle +/- is fine<br />            </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />            while (</span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) !== </span><span class="default">$org</span><span class="keyword">) </span><span class="default">next</span><span class="keyword">(</span><span class="default">$List</span><span class="keyword">);<br />        }else{<br />            while (</span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) !== </span><span class="default">$org</span><span class="keyword">) </span><span class="default">prev</span><span class="keyword">(</span><span class="default">$List</span><span class="keyword">);<br />        }<br />        return </span><span class="default">$key</span><span class="keyword">;<br />    }<br />}<br />echo </span><span class="string">"&lt;pre&gt;\n"</span><span class="keyword">;<br /></span><span class="default">$pr </span><span class="keyword">= array(</span><span class="string">'foo'</span><span class="keyword">=&gt;</span><span class="string">'bar'</span><span class="keyword">,</span><span class="string">'bar'</span><span class="keyword">=&gt;</span><span class="string">'foo'</span><span class="keyword">);<br />echo </span><span class="string">"Taken array;"</span><span class="keyword">; <br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$pr</span><span class="keyword">);<br /><br />echo </span><span class="string">"\npush 1 returns "</span><span class="keyword">.</span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$pr</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"------------------------------------\n"</span><span class="keyword">;<br /></span><span class="default">$pr </span><span class="keyword">= array(</span><span class="string">'foo'</span><span class="keyword">=&gt;</span><span class="string">'bar'</span><span class="keyword">,</span><span class="string">'bar'</span><span class="keyword">=&gt;</span><span class="string">'foo'</span><span class="keyword">);<br />echo </span><span class="string">"\npush 2 returns "</span><span class="keyword">.</span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$pr</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"------------------------------------\n"</span><span class="keyword">;<br /></span><span class="default">$pr </span><span class="keyword">= array(</span><span class="string">'foo'</span><span class="keyword">=&gt;</span><span class="string">'bar'</span><span class="keyword">,</span><span class="string">'bar'</span><span class="keyword">=&gt;</span><span class="string">'foo'</span><span class="keyword">);<br />echo </span><span class="string">"\n add 1 returns "</span><span class="keyword">.</span><span class="default">array_add</span><span class="keyword">(</span><span class="default">$pr</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">).</span><span class="string">"\n\n"</span><span class="keyword">;<br />echo </span><span class="string">"------------------------------------\n"</span><span class="keyword">;<br /></span><span class="default">$pr </span><span class="keyword">= array(</span><span class="string">'foo'</span><span class="keyword">=&gt;</span><span class="string">'bar'</span><span class="keyword">,</span><span class="string">'bar'</span><span class="keyword">=&gt;</span><span class="string">'foo'</span><span class="keyword">);<br />echo </span><span class="string">"\n add 2 returns "</span><span class="keyword">.</span><span class="default">array_add</span><span class="keyword">(</span><span class="default">$pr</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">).</span><span class="string">"\n\n"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;pre/&gt;\n\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Outputs:<br />Taken array;Array<br />(<br />    [foo] =&gt; bar<br />    [bar] =&gt; foo<br />)<br /><br />push 1 returns 3<br />------------------------------------<br /><br />push 2 returns 4<br />------------------------------------<br /><br /> add 1 returns 0<br /><br />------------------------------------<br /><br /> add 2 returns 1</span></code></div>
  </div>
 </div>
  <div class="note" id="61217">  <div class="votes">
    <div id="Vu61217">
    <a href="/manual/vote-note.php?id=61217&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61217">
    <a href="/manual/vote-note.php?id=61217&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61217" title="60% like this...">
    52
    </div>
  </div>
  <a href="#61217" class="name">
  <strong class="user"><em>egingell at sisna dot com</em></strong></a><a class="genanchor" href="#61217"> &para;</a><div class="date" title="2006-01-28 06:06"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61217">
<div class="phpcode"><code><span class="html">If you push an array onto the stack, PHP will add the whole array to the next element instead of adding the keys and values to the array. If this is not what you want, you're better off using array_merge() or traverse the array you're pushing on and add each element with $stack[$key] = $value.<br /><br /><span class="default">&lt;?php<br /><br />$stack </span><span class="keyword">= array(</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">);<br /></span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">, array(</span><span class="string">'d'</span><span class="keyword">, </span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'f'</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>The above will output this:<br />Array (<br />  [0] =&gt; a<br />  [1] =&gt; b<br />  [2] =&gt; c<br />  [3] =&gt; Array (<br />     [0] =&gt; a<br />     [1] =&gt; b<br />     [2] =&gt; c<br />  )<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="120495">  <div class="votes">
    <div id="Vu120495">
    <a href="/manual/vote-note.php?id=120495&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120495">
    <a href="/manual/vote-note.php?id=120495&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120495" title="55% like this...">
    3
    </div>
  </div>
  <a href="#120495" class="name">
  <strong class="user"><em>gfuente at garrahan dot gov dot ar</em></strong></a><a class="genanchor" href="#120495"> &para;</a><div class="date" title="2017-01-20 07:33"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120495">
<div class="phpcode"><code><span class="html">If the element to be pushed onto the end of array is an array you will receive the following error message: <br /><br />Unknown Error, value: [8] Array to string conversion<br /><br />I tried both: (and works, but with the warning message)<br /><br />            $aRol = array( $row[0], $row[1], $row[2] );<br />            $aRoles[] = $aRol;<br /><br />and <br />            array_push( $aRoles, $aRol);<br /><br />The correct way:<br /><br />            $cUnRol = implode("(",array( $row[0], $row[1], $row[2] ) ); <br />            array_push( $aRoles, $cUnRol ); <br /><br />thanks.</span></code></div>
  </div>
 </div>
  <div class="note" id="88172">  <div class="votes">
    <div id="Vu88172">
    <a href="/manual/vote-note.php?id=88172&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88172">
    <a href="/manual/vote-note.php?id=88172&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88172" title="56% like this...">
    5
    </div>
  </div>
  <a href="#88172" class="name">
  <strong class="user"><em>helpmepro1 at gmail dot com</em></strong></a><a class="genanchor" href="#88172"> &para;</a><div class="date" title="2009-01-13 01:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88172">
<div class="phpcode"><code><span class="html">elegant php array combinations algorithm<br /><br />&lt;?<br /><br />//by Shimon Dookin<br /><br />function get_combinations(&amp;$lists,&amp;$result,$stack=array(),$pos=0)<br />{<br /> $list=$lists[$pos];<br /> if(is_array($list))<br />  foreach($list as $word)<br />  {<br />   array_push($stack,$word);<br />   if(count($lists)==count($stack))<br />    $result[]=$stack;<br />   else<br />    get_combinations($lists,$result,$stack,$pos+1);<br />   array_pop($stack);<br />  }<br />}<br /><br />$wordlists= array( array("shimon","doodkin") , array("php programmer","sql programmer","mql metatrader programmer") );<br /><br />get_combinations($wordlists,$combinations);<br /><br />echo '&lt;xmp&gt;';<br />print_r($combinations);<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="58705">  <div class="votes">
    <div id="Vu58705">
    <a href="/manual/vote-note.php?id=58705&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58705">
    <a href="/manual/vote-note.php?id=58705&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58705" title="57% like this...">
    4
    </div>
  </div>
  <a href="#58705" class="name">
  <strong class="user"><em>steve at webthoughts d\ot ca</em></strong></a><a class="genanchor" href="#58705"> &para;</a><div class="date" title="2005-11-12 04:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58705">
<div class="phpcode"><code><span class="html">Further Modification on the array_push_associative function<br />1.  removes seemingly useless array_unshift function that generates php warning<br />2.  adds support for non-array arguments<br /><br />&lt;?<br />// Append associative array elements<br />function array_push_associative(&amp;$arr) {<br />   $args = func_get_args();<br />   foreach ($args as $arg) {<br />       if (is_array($arg)) {<br />           foreach ($arg as $key =&gt; $value) {<br />               $arr[$key] = $value;<br />               $ret++;<br />           }<br />       }else{<br />           $arr[$arg] = "";<br />       }<br />   }<br />   return $ret;<br />}<br /><br />$items = array("here" =&gt; "now");<br />$moreitems = array("this" =&gt; "that");<br /><br />$theArray = array("where" =&gt; "do we go", "here" =&gt; "we are today");<br />echo array_push_associative($theArray, $items, $moreitems, "five") . ' is the size of $theArray.&lt;br /&gt;';<br />    <br />echo "&lt;pre&gt;";<br />print_r($theArray);<br />echo "&lt;/pre&gt;";<br /><br />?&gt;<br /><br />Yields: <br /><br />4 is the size of $theArray.<br />Array<br />(<br />    [where] =&gt; do we go<br />    [here] =&gt; now<br />    [this] =&gt; that<br />    [five] =&gt; <br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="49609">  <div class="votes">
    <div id="Vu49609">
    <a href="/manual/vote-note.php?id=49609&amp;page=function.array-push&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49609">
    <a href="/manual/vote-note.php?id=49609&amp;page=function.array-push&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49609" title="56% like this...">
    5
    </div>
  </div>
  <a href="#49609" class="name">
  <strong class="user"><em>andrew at cgipro dot com</em></strong></a><a class="genanchor" href="#49609"> &para;</a><div class="date" title="2005-02-02 03:18"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49609">
<div class="phpcode"><code><span class="html">Need a real one-liner for adding an element onto a new array name?<br /><br />$emp_list_bic = $emp_list + array(c=&gt;"ANY CLIENT");<br /><br />CONTEXT...<br />drewdeal: this turns out to be better and easier than array_push()<br />patelbhadresh: great!... so u discover new idea...<br />drewdeal: because you can't do:   $emp_list_bic = array_push($emp_list, c=&gt;"ANY CLIENT");<br />drewdeal: array_push returns a count and affects current array.. and does not support set keys!<br />drewdeal: yeah. My one-liner makes a new array as a derivative of the prior array</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-push&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-push.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
