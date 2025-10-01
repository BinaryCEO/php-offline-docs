<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: reset - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.reset.php">
 <link rel="shorturl" href="https://www.php.net/reset">
 <link rel="alternate" href="https://www.php.net/reset" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.range.php">
 <link rel="next" href="https://www.php.net/manual/en/function.rsort.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.reset.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.reset.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.reset.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.reset.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.reset.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.reset.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.reset.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.reset.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.reset.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.reset.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.reset.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set the internal pointer of an array to its first element" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: reset - Manual" />
<meta name="twitter:description" content="Set the internal pointer of an array to its first element" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: reset - Manual" />
<meta itemprop="description" content="Set the internal pointer of an array to its first element" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set the internal pointer of an array to its first element" />

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
        <a href="function.rsort.php">
          rsort &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.range.php">
          &laquo; range        </a>
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
            <option value='en/function.reset.php' selected="selected">English</option>
            <option value='de/function.reset.php'>German</option>
            <option value='es/function.reset.php'>Spanish</option>
            <option value='fr/function.reset.php'>French</option>
            <option value='it/function.reset.php'>Italian</option>
            <option value='ja/function.reset.php'>Japanese</option>
            <option value='pt_BR/function.reset.php'>Brazilian Portuguese</option>
            <option value='ru/function.reset.php'>Russian</option>
            <option value='tr/function.reset.php'>Turkish</option>
            <option value='uk/function.reset.php'>Ukrainian</option>
            <option value='zh/function.reset.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.reset" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">reset</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">reset</span> &mdash; <span class="dc-title">Set the internal pointer of an array to its first element</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.reset-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>reset</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter reference">&$array</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>reset()</strong></span> rewinds <code class="parameter">array</code>&#039;s internal
   pointer to the first element and returns the value of the first array
   element.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.reset-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.reset-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the value of the first array element, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the array is
   empty.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.reset-changelog">
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
 <td>8.1.0</td>
 <td>
  Calling this function on <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s is deprecated.
  Either convert the <span class="type"><a href="language.types.object.php" class="type object">object</a></span> to an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> using <span class="function"><a href="function.get-mangled-object-vars.php" class="function">get_mangled_object_vars()</a></span> first, or use the methods
  provided by a class that implements <span class="interfacename"><a href="class.iterator.php" class="interfacename">Iterator</a></span>, such as <span class="classname"><a href="class.arrayiterator.php" class="classname">ArrayIterator</a></span>, instead.
 </td>
</tr>

<tr>
 <td>7.4.0</td>
 <td>
  Instances of <a href="book.spl.php" class="link">SPL</a> classes are now treated like empty objects that have no properties instead of calling the <span class="interfacename"><a href="class.iterator.php" class="interfacename">Iterator</a></span> method with the same name as this function.
 </td>
</tr>


    </tbody>
   
  </table>

 </div>

 
 <div class="refsect1 examples" id="refsect1-function.reset-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5324">
    <p><strong>Example #1 <span class="function"><strong>reset()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$array </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'step one'</span><span style="color: #007700">, </span><span style="color: #DD0000">'step two'</span><span style="color: #007700">, </span><span style="color: #DD0000">'step three'</span><span style="color: #007700">, </span><span style="color: #DD0000">'step four'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// by default, the pointer is on the first element<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// "step one"<br /><br />// skip two steps<br /></span><span style="color: #0000BB">next</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">next</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// "step three"<br /><br />// reset pointer, start again on step one<br /></span><span style="color: #0000BB">reset</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// "step one"<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.reset-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    The return value for an empty array is indistinguishable from 
    the return value in case of an array which has a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> 
    first element. To properly check the value of the first element of an array
    which may contain <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> elements, first check the <span class="function"><a href="function.count.php" class="function">count()</a></span>
    of the array, or check that <span class="function"><a href="function.key.php" class="function">key()</a></span> is not
    <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, after calling <span class="function"><strong>reset()</strong></span>.
   </span>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.reset-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.current.php" class="function" rel="rdfs-seeAlso">current()</a> - Return the current element in an array</span></li>
    <li><span class="function"><a href="function.each.php" class="function" rel="rdfs-seeAlso">each()</a> - Return the current key and value pair from an array and advance the array cursor</span></li>
    <li><span class="function"><a href="function.end.php" class="function" rel="rdfs-seeAlso">end()</a> - Set the internal pointer of an array to its last element</span></li>
    <li><span class="function"><a href="function.next.php" class="function" rel="rdfs-seeAlso">next()</a> - Advance the internal pointer of an array</span></li>
    <li><span class="function"><a href="function.prev.php" class="function" rel="rdfs-seeAlso">prev()</a> - Rewind the internal array pointer</span></li>
    <li><span class="function"><a href="function.array-key-first.php" class="function" rel="rdfs-seeAlso">array_key_first()</a> - Gets the first key of an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/reset.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.reset%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.reset&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.reset.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108165">  <div class="votes">
    <div id="Vu108165">
    <a href="/manual/vote-note.php?id=108165&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108165">
    <a href="/manual/vote-note.php?id=108165&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108165" title="71% like this...">
    57
    </div>
  </div>
  <a href="#108165" class="name">
  <strong class="user"><em>milo at mdlwebsolutions dot com</em></strong></a><a class="genanchor" href="#108165"> &para;</a><div class="date" title="2012-04-03 10:22"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108165">
<div class="phpcode"><code><span class="html">GOTCHA: If your first element is false, you don't know whether it was empty or not.<br /><br /><span class="default">&lt;?php<br /><br />$a </span><span class="keyword">= array();<br /></span><span class="default">$b </span><span class="keyword">= array(</span><span class="default">false</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">reset</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) === </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)); </span><span class="comment">//bool(true)<br /><br /></span><span class="default">?&gt;<br /></span><br />So don't count on a false return being an empty array.</span></code></div>
  </div>
 </div>
  <div class="note" id="126158">  <div class="votes">
    <div id="Vu126158">
    <a href="/manual/vote-note.php?id=126158&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126158">
    <a href="/manual/vote-note.php?id=126158&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126158" title="100% like this...">
    6
    </div>
  </div>
  <a href="#126158" class="name">
  <strong class="user"><em>turabgarip at gmail dot com</em></strong></a><a class="genanchor" href="#126158"> &para;</a><div class="date" title="2021-06-09 02:32"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126158">
<div class="phpcode"><code><span class="html">Since reset() returns the first "value" of the array beside resetting its internal pointer; it will return different results when it is combined with key() or used separately. Like;<br /><br /><span class="default">&lt;?php<br /><br />$products </span><span class="keyword">= array(<br />    </span><span class="string">'biscuits' </span><span class="keyword">=&gt; array(</span><span class="string">'biscuit1' </span><span class="keyword">=&gt; </span><span class="string">'cobis'</span><span class="keyword">, </span><span class="string">'biscuit2' </span><span class="keyword">=&gt; </span><span class="string">'probis'</span><span class="keyword">),<br />    </span><span class="string">'chocolates' </span><span class="keyword">=&gt; array(</span><span class="string">'coco1' </span><span class="keyword">=&gt; </span><span class="string">'cococ'</span><span class="keyword">, </span><span class="string">'coco2' </span><span class="keyword">=&gt; </span><span class="string">'prococ'</span><span class="keyword">),<br /> );<br /><br />echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">reset</span><span class="keyword">(</span><span class="default">$products</span><span class="keyword">[</span><span class="string">'biscuits'</span><span class="keyword">])); </span><span class="comment">// Fatal error<br /><br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$products</span><span class="keyword">[</span><span class="string">'biscuits'</span><span class="keyword">]);<br />echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$products</span><span class="keyword">[</span><span class="string">'biscuits'</span><span class="keyword">]); </span><span class="comment">// Will print 'biscuit1'<br /><br /></span><span class="default">?&gt;<br /></span><br />This is perfectly normal because in the first method, reset() returned the first "value" of the 'biscuits' element which is to be "cbosi". So key(string) will cause a fatal error. While in the second method you just reset the array and didn't use a returning value; instead you reset the pointer and than extracted the first key of an array.<br /><br />If your array has more dimensions, it won't probably cause a fatal error but you will get different results when you combine reset() and key() or use them consecutively.</span></code></div>
  </div>
 </div>
  <div class="note" id="119806">  <div class="votes">
    <div id="Vu119806">
    <a href="/manual/vote-note.php?id=119806&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119806">
    <a href="/manual/vote-note.php?id=119806&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119806" title="63% like this...">
    10
    </div>
  </div>
  <a href="#119806" class="name">
  <strong class="user"><em>Bartek Ferek</em></strong></a><a class="genanchor" href="#119806"> &para;</a><div class="date" title="2016-08-30 11:16"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119806">
<div class="phpcode"><code><span class="html">As for taking first key of an array, it's much more efficient to RESET and then KEY, rather then RESET result of ARRAY_KEYS (as sugested by gardnerjohng at gmail dot com).<br /><br /><span class="default">&lt;?php<br />reset</span><span class="keyword">(</span><span class="default">$someArray</span><span class="keyword">);<br />echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$someArray</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will give the same result but is much much faster. Larger arrays, better performance. Tested on 100-elements long array with 16 times faster results.</span></code></div>
  </div>
 </div>
  <div class="note" id="112198">  <div class="votes">
    <div id="Vu112198">
    <a href="/manual/vote-note.php?id=112198&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112198">
    <a href="/manual/vote-note.php?id=112198&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112198" title="56% like this...">
    6
    </div>
  </div>
  <a href="#112198" class="name">
  <strong class="user"><em>Mladen Janjetovic</em></strong></a><a class="genanchor" href="#112198"> &para;</a><div class="date" title="2013-05-16 10:07"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112198">
<div class="phpcode"><code><span class="html">Note that you can't use pointer here. It will reset the iteration counter in this case.<br />foreach($array as $key=&gt;&amp;$value) {...} <br /> <br /><br />Use standard foreach instead <br />foreach($array as $key=&gt;$value) {...}</span></code></div>
  </div>
 </div>
  <div class="note" id="58881">  <div class="votes">
    <div id="Vu58881">
    <a href="/manual/vote-note.php?id=58881&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58881">
    <a href="/manual/vote-note.php?id=58881&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58881" title="56% like this...">
    6
    </div>
  </div>
  <a href="#58881" class="name">
  <strong class="user"><em>Alexandre Koriakine</em></strong></a><a class="genanchor" href="#58881"> &para;</a><div class="date" title="2005-11-18 02:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58881">
<div class="phpcode"><code><span class="html">Also it's good to reset this way the multidimentional arrays:<br /><br />reset($voo2['moder']);<br />while (list($key, $value) = each ($voo2['moder'])) {<br /><br />reset($voo2['moder'][$key]);<br />while (list($key1, $value1) = each ($voo2['moder'][$key])) {<br />#do what u want<br />}<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="46614">  <div class="votes">
    <div id="Vu46614">
    <a href="/manual/vote-note.php?id=46614&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46614">
    <a href="/manual/vote-note.php?id=46614&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46614" title="57% like this...">
    5
    </div>
  </div>
  <a href="#46614" class="name">
  <strong class="user"><em>leaetherstrip at inbox dot NOSPAMru</em></strong></a><a class="genanchor" href="#46614"> &para;</a><div class="date" title="2004-10-17 06:54"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46614">
<div class="phpcode"><code><span class="html">Note that reset() will not affect sub-arrays of multidimensional array.<br /><br />For example,<br /><br /><span class="default">&lt;?php<br />    $arr </span><span class="keyword">= array(<br />        </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">),<br />        </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="default">6</span><span class="keyword">,</span><span class="default">7</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">)<br />    );<br />    <br />    while(list(</span><span class="default">$i</span><span class="keyword">,) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">))<br />    {<br />        echo </span><span class="string">"IN \$arr[</span><span class="default">$i</span><span class="string">]&lt;br&gt;"</span><span class="keyword">;<br />        <br />        while(list(</span><span class="default">$sub_i</span><span class="keyword">,</span><span class="default">$entry</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]))<br />        {<br />            echo </span><span class="string">"\$arr[</span><span class="default">$i</span><span class="string">][</span><span class="default">$sub_i</span><span class="string">] = </span><span class="default">$entry</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br />        }<br />    }<br />    <br />    </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /><br />    </span><span class="comment">// Do the same again<br />    </span><span class="keyword">while(list(</span><span class="default">$i</span><span class="keyword">,) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">))<br />    {<br />        echo </span><span class="string">"IN \$arr[</span><span class="default">$i</span><span class="string">]&lt;br&gt;"</span><span class="keyword">;<br />        <br />        while(list(</span><span class="default">$sub_i</span><span class="keyword">,</span><span class="default">$entry</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]))<br />        {<br />            echo </span><span class="string">"\$arr[</span><span class="default">$i</span><span class="string">][</span><span class="default">$sub_i</span><span class="string">] = </span><span class="default">$entry</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br />        }<br />    }<br /></span><span class="default">?&gt;<br /></span><br />will print<br /><br />IN $arr[1]<br />$arr[1][0] = 2<br />$arr[1][1] = 3<br />$arr[1][2] = 4<br />$arr[1][3] = 5<br />$arr[1][4] = 6<br />IN $arr[2]<br />$arr[2][0] = 6<br />$arr[2][1] = 7<br />$arr[2][2] = 8<br />$arr[2][3] = 9<br />$arr[2][4] = 10<br />IN $arr[1]<br />IN $arr[2]</span></code></div>
  </div>
 </div>
  <div class="note" id="118086">  <div class="votes">
    <div id="Vu118086">
    <a href="/manual/vote-note.php?id=118086&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118086">
    <a href="/manual/vote-note.php?id=118086&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118086" title="56% like this...">
    2
    </div>
  </div>
  <a href="#118086" class="name">
  <strong class="user"><em>arne dot slabbinck at duo dot be</em></strong></a><a class="genanchor" href="#118086"> &para;</a><div class="date" title="2015-10-01 03:43"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118086">
<div class="phpcode"><code><span class="html">Info:<br /><br />Following code gives a strict warning in 5.4.45<br /><br />      return reset(array_keys($result['node']));<br /><br />"Strict warning: Only variables should be passed by reference"<br /><br />So should be:<br /><br />      $keys = array_keys($result['node']);<br />      return reset($keys);</span></code></div>
  </div>
 </div>
  <div class="note" id="118013">  <div class="votes">
    <div id="Vu118013">
    <a href="/manual/vote-note.php?id=118013&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118013">
    <a href="/manual/vote-note.php?id=118013&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118013" title="55% like this...">
    2
    </div>
  </div>
  <a href="#118013" class="name">
  <strong class="user"><em>arne dot ludwig at posteo dot de</em></strong></a><a class="genanchor" href="#118013"> &para;</a><div class="date" title="2015-09-18 09:22"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118013">
<div class="phpcode"><code><span class="html">In response to gardnerjohng's note to retrieve the first _key_ of an array:<br /><br />To retrieve the first _key_ of an array you can use the combination of reset() and key().<br /><br /><span class="default">&lt;?php<br />    $properties </span><span class="keyword">= array(<br />        </span><span class="string">'colour'   </span><span class="keyword">=&gt; </span><span class="string">'grey'</span><span class="keyword">,<br />        </span><span class="string">'flavour'  </span><span class="keyword">=&gt; </span><span class="string">'rubber'</span><span class="keyword">,<br />        </span><span class="string">'name'     </span><span class="keyword">=&gt; </span><span class="string">'Mouse Ball'</span><span class="keyword">,<br />        </span><span class="string">'texture'  </span><span class="keyword">=&gt; </span><span class="string">'rubbery'<br />    </span><span class="keyword">);<br /><br />    </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$properties</span><span class="keyword">);<br />    echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$properties</span><span class="keyword">); </span><span class="comment">// =&gt; 'colour'<br /></span><span class="default">?&gt;<br /></span><br />I prefer this solution as you don't have to create the keys array. This should (not measured) improve performance on large arrays.</span></code></div>
  </div>
 </div>
  <div class="note" id="96090">  <div class="votes">
    <div id="Vu96090">
    <a href="/manual/vote-note.php?id=96090&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96090">
    <a href="/manual/vote-note.php?id=96090&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96090" title="51% like this...">
    2
    </div>
  </div>
  <a href="#96090" class="name">
  <strong class="user"><em>kendsnyder at gmail dot com</em></strong></a><a class="genanchor" href="#96090"> &para;</a><div class="date" title="2010-02-08 08:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96090">
<div class="phpcode"><code><span class="html">Don't use `reset()` to get the first value of an associative array. It works great for true arrays but works unexpectedly on Iterator objects. <a href="http://bugs.php.net/bug.php?id=38478" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=38478</a></span></code></div>
  </div>
 </div>
  <div class="note" id="68605">  <div class="votes">
    <div id="Vu68605">
    <a href="/manual/vote-note.php?id=68605&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68605">
    <a href="/manual/vote-note.php?id=68605&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68605" title="52% like this...">
    1
    </div>
  </div>
  <a href="#68605" class="name">
  <strong class="user"><em>m dot lebkowski+php at gmail dot com</em></strong></a><a class="genanchor" href="#68605"> &para;</a><div class="date" title="2006-08-03 01:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68605">
<div class="phpcode"><code><span class="html">Colin, there`s a better (IMO) way to solve your problem.<br />&lt;?  <br />  // ...<br />  foreach($a as $k =&gt; &amp;$d){}   // notice the "&amp;"<br />  // ...<br />?&gt;<br />It`s a new feature in PHP5 to use references in foreach loop. This way PHP isn`t making a copy of the array, so the internal pointer won`t be reset.</span></code></div>
  </div>
 </div>
  <div class="note" id="67264">  <div class="votes">
    <div id="Vu67264">
    <a href="/manual/vote-note.php?id=67264&amp;page=function.reset&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67264">
    <a href="/manual/vote-note.php?id=67264&amp;page=function.reset&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67264" title="50% like this...">
    0
    </div>
  </div>
  <a href="#67264" class="name">
  <strong class="user"><em>Colin</em></strong></a><a class="genanchor" href="#67264"> &para;</a><div class="date" title="2006-06-06 08:11"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67264">
<div class="phpcode"><code><span class="html">I had a problem with PHP 5.0.5 somehow resetting a sub-array of an array with no apparent reason.  The problem was in doing a foreach() on the parent array PHP was making a copy of the subarrays and in doing so it was resetting the internal pointers of the original array.<br /><br />The following code demonstrates the resetting of a subarray:<br /><br />&lt;?<br />$a = array(<br />    'a' =&gt; array(<br />        'A', 'B', 'C', 'D',<br />    ),<br />    'b' =&gt; array(<br />        'AA', 'BB', 'CC', 'DD',<br />    ),<br />);<br /><br />// Set the pointer of $a to 'b' and the pointer of 'b' to 'CC'<br />reset($a);<br />next($a);<br />next($a['b']);<br />next($a['b']);<br />next($a['b']);<br /><br />var_dump(key($a['b']));<br />foreach($a as $k =&gt; $d)<br />{<br />}<br />var_dump(key($a['b']));<br />?&gt;<br /><br />The result of the two var dumps are 3 and 0, respectively.  Clearly the internal pointer of $a['b'] was reset by doing the foreach loop over $a.<br /><br />Each time the foreach loop iterated over the 'a' and 'b' keys of $a it made a copy of $a['a'] and $a['b'] into $d which resetted the internal pointers of $a['a'] and $a['b'] despite making no obvious changes.<br /><br />The solution is instead to iterate over the keys of $a.<br /><br />&lt;?<br />foreach(array_keys($a) as $k)<br />{<br />}<br />?&gt;<br /><br />and using $a[$k] (or creating an alias of $a[$k] as $d and dealing with the consequences of using aliases).<br /><br />For the curious, I was implementing the Iterator interface on a dummy object and calling a global object to do the actual iteration (also to cope with PHP's lack of C-style pointers which when doing a $a = $b on objects would cause the data in $a to be inconsistent with the data in $b when modified).  Being that I had many dummy objects representing different data sets I chose to store each data set as a subarray contained within the global object.  To make this work each dummy object has to store a key (which can freely be duplicated without problems) that it passes to the global object when rewind, key, current, next, and valid were called on the dummy object.<br /><br />Unfortunately for me, my key required to be more than just a simple string or number (if it was then it could be used to directly index the subarray of data for that object and problem avoided) but was an array of strings.  Instead, I had to iterate over (with a foreach loop) each subarray and compare the key to a variable stored within the subarray.<br /><br />So by using a foreach loop in this manner and with PHP resetting the pointer of subarrays it ended up causing an infinite loop.<br /><br />Really, this could be solved by PHP maintaining internal pointers on arrays even after copying.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.reset&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.reset.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
