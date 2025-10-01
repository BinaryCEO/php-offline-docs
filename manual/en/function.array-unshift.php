<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_unshift - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-unshift.php">
 <link rel="shorturl" href="https://www.php.net/array-unshift">
 <link rel="alternate" href="https://www.php.net/array-unshift" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-unique.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-values.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-unshift.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-unshift.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-unshift.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-unshift.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-unshift.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-unshift.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-unshift.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-unshift.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-unshift.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-unshift.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-unshift.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prepend one or more elements to the beginning of an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_unshift - Manual" />
<meta name="twitter:description" content="Prepend one or more elements to the beginning of an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_unshift - Manual" />
<meta itemprop="description" content="Prepend one or more elements to the beginning of an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prepend one or more elements to the beginning of an array" />

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
        <a href="function.array-values.php">
          array_values &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-unique.php">
          &laquo; array_unique        </a>
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
            <option value='en/function.array-unshift.php' selected="selected">English</option>
            <option value='de/function.array-unshift.php'>German</option>
            <option value='es/function.array-unshift.php'>Spanish</option>
            <option value='fr/function.array-unshift.php'>French</option>
            <option value='it/function.array-unshift.php'>Italian</option>
            <option value='ja/function.array-unshift.php'>Japanese</option>
            <option value='pt_BR/function.array-unshift.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-unshift.php'>Russian</option>
            <option value='tr/function.array-unshift.php'>Turkish</option>
            <option value='uk/function.array-unshift.php'>Ukrainian</option>
            <option value='zh/function.array-unshift.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-unshift" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_unshift</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_unshift</span> &mdash; <span class="dc-title">Prepend one or more elements to the beginning of an array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-unshift-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_unshift</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$values</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_unshift()</strong></span> prepends passed elements to the front
   of the <code class="parameter">array</code>. Note that the list of elements is
   prepended as a whole, so that the prepended elements stay in the same
   order.  All numerical array keys will be modified to start counting from
   zero while literal keys won&#039;t be changed.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
 <p class="para">
    Resets array&#039;s internal pointer to the first element.
 </p>
</p></blockquote>

 </div>

 <div class="refsect1 parameters" id="refsect1-function.array-unshift-parameters">
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
       The values to prepend.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.array-unshift-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the new number of elements in the <code class="parameter">array</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-unshift-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.array-unshift-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5288">
    <p><strong>Example #1 <span class="function"><strong>array_unshift()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$queue </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">"orange"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"banana"<br /></span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB">array_unshift</span><span style="color: #007700">(</span><span style="color: #0000BB">$queue</span><span style="color: #007700">, </span><span style="color: #DD0000">"apple"</span><span style="color: #007700">, </span><span style="color: #DD0000">"raspberry"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$queue</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(4) {
  [0] =&gt;
  string(5) &quot;apple&quot;
  [1] =&gt;
  string(9) &quot;raspberry&quot;
  [2] =&gt;
  string(6) &quot;orange&quot;
  [3] =&gt;
  string(6) &quot;banana&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5289">
    <p><strong>Example #2 Usage with associative arrays</strong></p>
    <div class="example-contents"><p>
     If one associative array is prepended to another associative array,
     the prepended array is numerically indexed into the former array.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$foods </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">'apples' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'McIntosh' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'red'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'Granny Smith' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'green'</span><span style="color: #007700">,<br />    ],<br />    </span><span style="color: #DD0000">'oranges' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'Navel' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'Valencia' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />    ],<br />];<br /><br /></span><span style="color: #0000BB">$vegetables </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">'lettuce' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'Iceberg' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'green'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'Butterhead' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'green'</span><span style="color: #007700">,<br />    ],<br />    </span><span style="color: #DD0000">'carrots' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'Deep Purple Hybrid' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'purple'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'Imperator' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'orange'</span><span style="color: #007700">,<br />    ],<br />    </span><span style="color: #DD0000">'cucumber' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'Kirby' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'green'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'Gherkin' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'green'</span><span style="color: #007700">,<br />    ],<br />];<br /><br /></span><span style="color: #0000BB">array_unshift</span><span style="color: #007700">(</span><span style="color: #0000BB">$foods</span><span style="color: #007700">, </span><span style="color: #0000BB">$vegetables</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$foods</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(3) {
  [0]=&gt;
  array(3) {
    [&quot;lettuce&quot;]=&gt;
    array(2) {
      [&quot;Iceberg&quot;]=&gt;
      string(5) &quot;green&quot;
      [&quot;Butterhead&quot;]=&gt;
      string(5) &quot;green&quot;
    }
    [&quot;carrots&quot;]=&gt;
    array(2) {
      [&quot;Deep Purple Hybrid&quot;]=&gt;
      string(6) &quot;purple&quot;
      [&quot;Imperator&quot;]=&gt;
      string(6) &quot;orange&quot;
    }
    [&quot;cucumber&quot;]=&gt;
    array(2) {
      [&quot;Kirby&quot;]=&gt;
      string(5) &quot;green&quot;
      [&quot;Gherkin&quot;]=&gt;
      string(5) &quot;green&quot;
    }
  }
  [&quot;apples&quot;]=&gt;
  array(2) {
    [&quot;McIntosh&quot;]=&gt;
    string(3) &quot;red&quot;
    [&quot;Granny Smith&quot;]=&gt;
    string(5) &quot;green&quot;
  }
  [&quot;oranges&quot;]=&gt;
  array(2) {
    [&quot;Navel&quot;]=&gt;
    string(6) &quot;orange&quot;
    [&quot;Valencia&quot;]=&gt;
    string(6) &quot;orange&quot;
  }
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.array-unshift-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-merge.php" class="function" rel="rdfs-seeAlso">array_merge()</a> - Merge one or more arrays</span></li>
    <li><span class="function"><a href="function.array-shift.php" class="function" rel="rdfs-seeAlso">array_shift()</a> - Shift an element off the beginning of array</span></li>
    <li><span class="function"><a href="function.array-push.php" class="function" rel="rdfs-seeAlso">array_push()</a> - Push one or more elements onto the end of array</span></li>
    <li><span class="function"><a href="function.array-pop.php" class="function" rel="rdfs-seeAlso">array_pop()</a> - Pop the element off the end of array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-unshift.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-unshift%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-unshift&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-unshift.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="78238">  <div class="votes">
    <div id="Vu78238">
    <a href="/manual/vote-note.php?id=78238&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78238">
    <a href="/manual/vote-note.php?id=78238&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78238" title="80% like this...">
    210
    </div>
  </div>
  <a href="#78238" class="name">
  <strong class="user"><em>sergei at gmx dot net</em></strong></a><a class="genanchor" href="#78238"> &para;</a><div class="date" title="2007-10-03 08:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78238">
<div class="phpcode"><code><span class="html">You can preserve keys and unshift an array with numerical indexes in a really simple way if you'll do the following:
<br />
<br /><span class="default">&lt;?php
<br />$someArray</span><span class="keyword">=array(</span><span class="default">224</span><span class="keyword">=&gt;</span><span class="string">'someword1'</span><span class="keyword">, </span><span class="default">228</span><span class="keyword">=&gt;</span><span class="string">'someword2'</span><span class="keyword">, </span><span class="default">102</span><span class="keyword">=&gt;</span><span class="string">'someword3'</span><span class="keyword">, </span><span class="default">544</span><span class="keyword">=&gt;</span><span class="string">'someword3'</span><span class="keyword">,</span><span class="default">95</span><span class="keyword">=&gt;</span><span class="string">'someword4'</span><span class="keyword">);
<br />
<br /></span><span class="default">$someArray</span><span class="keyword">=array(</span><span class="default">100</span><span class="keyword">=&gt;</span><span class="string">'Test Element 1 '</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">=&gt;</span><span class="string">'Test Element 2'</span><span class="keyword">)+</span><span class="default">$someArray</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />now the array looks as follows:
<br />
<br />array(
<br />100=&gt;'Test Element 1 ',
<br />255=&gt;'Test Element 2'
<br />224=&gt;'someword1',
<br />228=&gt;'someword2',
<br />102=&gt;'someword3',
<br />544=&gt;'someword3',
<br />95=&gt;'someword4'
<br />);</span></code></div>
  </div>
 </div>
  <div class="note" id="23882">  <div class="votes">
    <div id="Vu23882">
    <a href="/manual/vote-note.php?id=23882&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23882">
    <a href="/manual/vote-note.php?id=23882&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23882" title="72% like this...">
    37
    </div>
  </div>
  <a href="#23882" class="name">
  <strong class="user"><em>rsmith_NOSPAM_ at _NOSPAM_unitec dot ac dot nz</em></strong></a><a class="genanchor" href="#23882"> &para;</a><div class="date" title="2002-07-30 07:00"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23882">
<div class="phpcode"><code><span class="html">array_merge() will also reindex (see array_merge() manual entry), but the '+' operator won't, so...
<br />
<br /><span class="default">&lt;?php
<br />$arrayone</span><span class="keyword">=array(</span><span class="string">"newkey"</span><span class="keyword">=&gt;</span><span class="string">"newvalue"</span><span class="keyword">) + </span><span class="default">$arrayone</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />does the job.</span></code></div>
  </div>
 </div>
  <div class="note" id="106570">  <div class="votes">
    <div id="Vu106570">
    <a href="/manual/vote-note.php?id=106570&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106570">
    <a href="/manual/vote-note.php?id=106570&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106570" title="63% like this...">
    35
    </div>
  </div>
  <a href="#106570" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#106570"> &para;</a><div class="date" title="2011-11-19 09:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106570">
<div class="phpcode"><code><span class="html">Sahn's example almost works but has a small error. Try it like this if you need to prepend something to the array without the keys being reindexed and/or need to prepend a key value pair, you can use this short function: <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">array_unshift_assoc</span><span class="keyword">(&amp;</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) <br />{ <br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); <br />    </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">; <br />    return = </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); <br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117119">  <div class="votes">
    <div id="Vu117119">
    <a href="/manual/vote-note.php?id=117119&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117119">
    <a href="/manual/vote-note.php?id=117119&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117119" title="63% like this...">
    10
    </div>
  </div>
  <a href="#117119" class="name">
  <strong class="user"><em>daniel at smallboxcms dot com</em></strong></a><a class="genanchor" href="#117119"> &para;</a><div class="date" title="2015-04-17 08:18"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117119">
<div class="phpcode"><code><span class="html">Anonymous' associative version wasn't working for me, but it did with this small tweak:<br /><br />function array_unshift_assoc(&amp;$arr, $key, $val) <br />{ <br />    $arr = array_reverse($arr, true); <br />    $arr[$key] = $val; <br />    $arr = array_reverse($arr, true); <br />    return $arr;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="74129">  <div class="votes">
    <div id="Vu74129">
    <a href="/manual/vote-note.php?id=74129&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74129">
    <a href="/manual/vote-note.php?id=74129&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74129" title="54% like this...">
    2
    </div>
  </div>
  <a href="#74129" class="name">
  <strong class="user"><em>amschroeder at gmail dot com</em></strong></a><a class="genanchor" href="#74129"> &para;</a><div class="date" title="2007-03-26 09:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74129">
<div class="phpcode"><code><span class="html">This becomes a nice little problem if you index your arrays out of order (while manually sorting).  For example:
<br />
<br /><span class="default">&lt;?php
<br />$recordMonths</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="string">'8/%/2006'</span><span class="keyword">;
<br /></span><span class="default">$recordMonths</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] = </span><span class="string">'7/%/2004'</span><span class="keyword">;
<br /></span><span class="default">$recordMonths</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">'3/%/2007'</span><span class="keyword">;
<br /></span><span class="default">$recordMonths</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="string">'2/%/2007'</span><span class="keyword">;
<br /></span><span class="default">$recordMonths</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] = </span><span class="string">'12/%/2000'</span><span class="keyword">;
<br /></span><span class="default">$recordMonths</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] = </span><span class="string">'11/%/2000'</span><span class="keyword">;
<br /></span><span class="default">$recordMonths</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] = </span><span class="string">'10/%/2000'</span><span class="keyword">;
<br /></span><span class="default">$recordMonths</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="string">'1/%/2007'</span><span class="keyword">;
<br />
<br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$recordMonths</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)
<br />{
<br />    </span><span class="default">$singleMonth </span><span class="keyword">= </span><span class="default">$recordMonths</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />    echo </span><span class="string">"singleMonth: </span><span class="default">$singleMonth</span><span class="string"> &lt;br /&gt;"</span><span class="keyword">;
<br />}
<br /></span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$recordMonths</span><span class="keyword">,</span><span class="string">'%'</span><span class="keyword">);
<br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$recordMonths</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)
<br />{
<br />    </span><span class="default">$singleMonth </span><span class="keyword">= </span><span class="default">$recordMonths</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />    echo </span><span class="string">"singleMonth: </span><span class="default">$singleMonth</span><span class="string"> &lt;br /&gt;"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Produces:
<br />
<br />singleMonth: 3/%/2007
<br />singleMonth: 2/%/2007
<br />singleMonth: 1/%/2007
<br />singleMonth: 8/%/2006
<br />singleMonth: 7/%/2004
<br />singleMonth: 12/%/2000
<br />singleMonth: 11/%/2000
<br />singleMonth: 10/%/2000
<br />singleMonth: %
<br />singleMonth: 8/%/2006
<br />singleMonth: 7/%/2004
<br />singleMonth: 3/%/2007
<br />singleMonth: 2/%/2007
<br />singleMonth: 12/%/2000
<br />singleMonth: 11/%/2000
<br />singleMonth: 10/%/2000
<br />singleMonth: 1/%/2007 
<br />
<br />It reindexes them based on the order they were created.  It seems like if an array has all numeric indexes, then it should reindex them based on the order of their index.  Just my opinion...</span></code></div>
  </div>
 </div>
  <div class="note" id="40270">  <div class="votes">
    <div id="Vu40270">
    <a href="/manual/vote-note.php?id=40270&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40270">
    <a href="/manual/vote-note.php?id=40270&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40270" title="55% like this...">
    2
    </div>
  </div>
  <a href="#40270" class="name">
  <strong class="user"><em>php at electricsurfer dot com</em></strong></a><a class="genanchor" href="#40270"> &para;</a><div class="date" title="2004-02-26 06:20"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40270">
<div class="phpcode"><code><span class="html">even simpler unshifting of a reference !<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @return int<br /> * @param $array array<br /> * @param $value mixed<br /> * @desc Prepend a reference to an element to the beginning of an array. Renumbers numeric keys, so $value is always inserted to $array[0]<br /> */<br /></span><span class="keyword">function </span><span class="default">array_unshift_ref</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, &amp;</span><span class="default">$value</span><span class="keyword">)<br />{<br />   </span><span class="default">$return </span><span class="keyword">= </span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">);<br />   </span><span class="default">$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] =&amp; </span><span class="default">$value</span><span class="keyword">;<br />   return </span><span class="default">$return</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="18847">  <div class="votes">
    <div id="Vu18847">
    <a href="/manual/vote-note.php?id=18847&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18847">
    <a href="/manual/vote-note.php?id=18847&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18847" title="53% like this...">
    2
    </div>
  </div>
  <a href="#18847" class="name">
  <strong class="user"><em>robert dot wills at fuzzbrain dot uklinux dot net</em></strong></a><a class="genanchor" href="#18847"> &para;</a><div class="date" title="2002-02-07 06:02"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18847">
<div class="phpcode"><code><span class="html">Actually this problem with the keys getting reindexed only happens when the keys are numerical:<br /><br /><span class="default">&lt;?php<br /><br />$a </span><span class="keyword">= array(</span><span class="string">"f"</span><span class="keyword">=&gt;</span><span class="string">"five"</span><span class="keyword">, </span><span class="string">"s" </span><span class="keyword">=&gt;</span><span class="string">"six"</span><span class="keyword">, </span><span class="string">"t" </span><span class="keyword">=&gt;<br />        </span><span class="string">"twenty"</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br />foreach(</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)<br />{<br />    echo </span><span class="string">"k: </span><span class="default">$key</span><span class="string"> v: </span><span class="default">$val</span><span class="string"> \n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="string">"zero"</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br />foreach(</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)<br />{<br />    echo </span><span class="string">"k: </span><span class="default">$key</span><span class="string"> v: </span><span class="default">$val</span><span class="string"> \n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Array<br />(<br />    [f] =&gt; five<br />    [s] =&gt; six<br />    [t] =&gt; twenty<br />)<br /><br />k: f v: five<br />k: s v: six<br />k: t v: twenty<br />Array<br />(<br />    [0] =&gt; zero<br />    [f] =&gt; five<br />    [s] =&gt; six<br />    [t] =&gt; twenty<br />)<br /><br />k: 0 v: zero<br />k: f v: five<br />k: s v: six<br />k: t v: twenty</span></code></div>
  </div>
 </div>
  <div class="note" id="129005">  <div class="votes">
    <div id="Vu129005">
    <a href="/manual/vote-note.php?id=129005&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129005">
    <a href="/manual/vote-note.php?id=129005&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129005" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129005" class="name">
  <strong class="user"><em>eliasritter168667 at gmail dot com</em></strong></a><a class="genanchor" href="#129005"> &para;</a><div class="date" title="2023-11-06 08:52"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129005">
<div class="phpcode"><code><span class="html">This function helps if you want to prepend a key and value pair to the beginning of an array:<br /><br />function array_kunshift(array $array, string|int $key, mixed $value): array {<br />        return array_merge([$key =&gt; $value], $array);<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="119009">  <div class="votes">
    <div id="Vu119009">
    <a href="/manual/vote-note.php?id=119009&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119009">
    <a href="/manual/vote-note.php?id=119009&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119009" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119009" class="name">
  <strong class="user"><em>Richard Akindele</em></strong></a><a class="genanchor" href="#119009"> &para;</a><div class="date" title="2016-03-16 06:31"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119009">
<div class="phpcode"><code><span class="html">Another way to tack something to the beginning of an array is with array_merge().<br /><br />$plans = array('AARP'=&gt;'Senior', 'AAA'=&gt;'Automobile Club');<br /><br />$plans = array_merge(array("BAR"=&gt;"Best Available Rate"),  $plans);</span></code></div>
  </div>
 </div>
  <div class="note" id="34308">  <div class="votes">
    <div id="Vu34308">
    <a href="/manual/vote-note.php?id=34308&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34308">
    <a href="/manual/vote-note.php?id=34308&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34308" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#34308" class="name">
  <strong class="user"><em>chris dot NoThxSpam dot given at hp dot com</em></strong></a><a class="genanchor" href="#34308"> &para;</a><div class="date" title="2003-07-23 12:17"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34308">
<div class="phpcode"><code><span class="html">If you need to change the name of a key without changing its position in the array this function may be useful.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array_key_change</span><span class="keyword">(</span><span class="default">$Old</span><span class="keyword">, </span><span class="default">$New</span><span class="keyword">, </span><span class="default">$In</span><span class="keyword">, </span><span class="default">$NewVal</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">) {
<br />        </span><span class="default">$Temp </span><span class="keyword">= array();
<br />        while(isset(</span><span class="default">$Temp</span><span class="keyword">[</span><span class="default">$Old</span><span class="keyword">]) == </span><span class="default">false</span><span class="keyword">) {
<br />                list(</span><span class="default">$k</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$In</span><span class="keyword">);
<br />                </span><span class="default">$Temp</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;
<br />                unset(</span><span class="default">$In</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);
<br />        }
<br />        if(</span><span class="default">$NewVal </span><span class="keyword">== </span><span class="default">NULL</span><span class="keyword">) {
<br />                </span><span class="default">$NewVal </span><span class="keyword">= </span><span class="default">$Temp</span><span class="keyword">[</span><span class="default">$Old</span><span class="keyword">];
<br />        }
<br />        unset(</span><span class="default">$Temp</span><span class="keyword">[</span><span class="default">$Old</span><span class="keyword">]);
<br />        </span><span class="default">$Temp </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$Temp</span><span class="keyword">);
<br />        </span><span class="default">$In </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(array(</span><span class="default">$New</span><span class="keyword">=&gt;</span><span class="default">$NewVal</span><span class="keyword">), </span><span class="default">$In</span><span class="keyword">);
<br />        while(list(</span><span class="default">$k</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$Temp</span><span class="keyword">)) {
<br />                </span><span class="default">$In </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(array(</span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">), </span><span class="default">$In</span><span class="keyword">);
<br />        }
<br />        return(</span><span class="default">$In</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="14358">  <div class="votes">
    <div id="Vu14358">
    <a href="/manual/vote-note.php?id=14358&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14358">
    <a href="/manual/vote-note.php?id=14358&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14358" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#14358" class="name">
  <strong class="user"><em>sahn at hmc dot edu</em></strong></a><a class="genanchor" href="#14358"> &para;</a><div class="date" title="2001-07-27 12:21"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14358">
<div class="phpcode"><code><span class="html">If you need to prepend something to the array without the keys being reindexed and/or need to prepend a key value pair, you can use this short function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array_unshift_assoc</span><span class="keyword">(&amp;</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />    </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;
<br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />    return </span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="67085">  <div class="votes">
    <div id="Vu67085">
    <a href="/manual/vote-note.php?id=67085&amp;page=function.array-unshift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67085">
    <a href="/manual/vote-note.php?id=67085&amp;page=function.array-unshift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67085" title="40% like this...">
    -5
    </div>
  </div>
  <a href="#67085" class="name">
  <strong class="user"><em>John Brooking</em></strong></a><a class="genanchor" href="#67085"> &para;</a><div class="date" title="2006-06-02 06:54"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67085">
<div class="phpcode"><code><span class="html">I had a need tonight to convert a numeric array from 1-based to 0-based, and found that the following worked just fine due to the "side effect" of renumbering:
<br />
<br /><span class="default">&lt;?php
<br />   array_unshift</span><span class="keyword">( </span><span class="default">$myArray</span><span class="keyword">, </span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$myArray </span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-unshift&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-unshift.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
