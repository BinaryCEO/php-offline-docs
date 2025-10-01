<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: current - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.current.php">
 <link rel="shorturl" href="https://www.php.net/current">
 <link rel="alternate" href="https://www.php.net/current" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.count.php">
 <link rel="next" href="https://www.php.net/manual/en/function.each.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.current.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.current.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.current.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.current.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.current.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.current.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.current.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.current.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.current.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.current.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.current.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return the current element in an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: current - Manual" />
<meta name="twitter:description" content="Return the current element in an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: current - Manual" />
<meta itemprop="description" content="Return the current element in an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return the current element in an array" />

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
        <a href="function.each.php">
          each &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.count.php">
          &laquo; count        </a>
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
            <option value='en/function.current.php' selected="selected">English</option>
            <option value='de/function.current.php'>German</option>
            <option value='es/function.current.php'>Spanish</option>
            <option value='fr/function.current.php'>French</option>
            <option value='it/function.current.php'>Italian</option>
            <option value='ja/function.current.php'>Japanese</option>
            <option value='pt_BR/function.current.php'>Brazilian Portuguese</option>
            <option value='ru/function.current.php'>Russian</option>
            <option value='tr/function.current.php'>Turkish</option>
            <option value='uk/function.current.php'>Ukrainian</option>
            <option value='zh/function.current.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.current" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">current</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">current</span> &mdash; <span class="dc-title">Return the current element in an array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.current-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>current</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter">$array</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   Every array has an internal pointer to its &quot;current&quot; element,
   which is initialized to the first element inserted into the
   array.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.current-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The array.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.current-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The <span class="function"><strong>current()</strong></span> function simply returns the
   value of the array element that&#039;s currently being pointed to by the
   internal pointer.  It does not move the pointer in any way.  If the
   internal pointer points beyond the end of the elements list or the array is 
   empty, <span class="function"><strong>current()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.current-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.current-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5301">
    <p><strong>Example #1 Example use of <span class="function"><strong>current()</strong></span> and friends</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$transport </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bike'</span><span style="color: #007700">, </span><span style="color: #DD0000">'car'</span><span style="color: #007700">, </span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// $mode = 'foot';<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">next</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;    </span><span style="color: #FF8000">// $mode = 'bike';<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// $mode = 'bike';<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">prev</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;    </span><span style="color: #FF8000">// $mode = 'foot';<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">end</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;     </span><span style="color: #FF8000">// $mode = 'plane';<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// $mode = 'plane';<br /><br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= array();<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$arr</span><span style="color: #007700">)); </span><span style="color: #FF8000">// bool(false)<br /><br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= array(array());<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$arr</span><span style="color: #007700">)); </span><span style="color: #FF8000">// array(0) { }<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-function.current-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    The results of calling <span class="function"><strong>current()</strong></span> on an empty array
    and on an array, whose internal pointer points beyond the end of the elements,
    are indistinguishable from a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> element. 
    To properly traverse an array which may contain <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> elements, see the 
    <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> control structure.
   </span>
   <span class="simpara">
    To still use <span class="function"><strong>current()</strong></span> and properly check if the value 
    is really an element of the array, the <span class="function"><a href="function.key.php" class="function">key()</a></span> 
    of the <span class="function"><strong>current()</strong></span> element should be checked to be strictly 
    different from <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
   </span>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.current-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.end.php" class="function" rel="rdfs-seeAlso">end()</a> - Set the internal pointer of an array to its last element</span></li>
    <li><span class="function"><a href="function.key.php" class="function" rel="rdfs-seeAlso">key()</a> - Fetch a key from an array</span></li>
    <li><span class="function"><a href="function.each.php" class="function" rel="rdfs-seeAlso">each()</a> - Return the current key and value pair from an array and advance the array cursor</span></li>
    <li><span class="function"><a href="function.prev.php" class="function" rel="rdfs-seeAlso">prev()</a> - Rewind the internal array pointer</span></li>
    <li><span class="function"><a href="function.reset.php" class="function" rel="rdfs-seeAlso">reset()</a> - Set the internal pointer of an array to its first element</span></li>
    <li><span class="function"><a href="function.next.php" class="function" rel="rdfs-seeAlso">next()</a> - Advance the internal pointer of an array</span></li>
    <li><a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/current.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.current%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.current&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.current.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107147">  <div class="votes">
    <div id="Vu107147">
    <a href="/manual/vote-note.php?id=107147&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107147">
    <a href="/manual/vote-note.php?id=107147&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107147" title="61% like this...">
    19
    </div>
  </div>
  <a href="#107147" class="name">
  <strong class="user"><em>michael at squiloople dot com</em></strong></a><a class="genanchor" href="#107147"> &para;</a><div class="date" title="2012-01-10 07:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107147">
<div class="phpcode"><code><span class="html">current() also works on objects:
<br />
<br /><span class="default">&lt;?php
<br />
<br />  </span><span class="keyword">echo </span><span class="default">current</span><span class="keyword">((object) array(</span><span class="string">'one'</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">)); </span><span class="comment">// Outputs: one
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126515">  <div class="votes">
    <div id="Vu126515">
    <a href="/manual/vote-note.php?id=126515&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126515">
    <a href="/manual/vote-note.php?id=126515&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126515" title="75% like this...">
    6
    </div>
  </div>
  <a href="#126515" class="name">
  <strong class="user"><em>sergey dot karavay at gmail dot com</em></strong></a><a class="genanchor" href="#126515"> &para;</a><div class="date" title="2021-10-19 10:45"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126515">
<div class="phpcode"><code><span class="html">It looks like `current()` is deprectated for calling on objects since PHP 7.4. <br /><br />Consider this code<br /><br />```<br />$a = new ArrayIterator([1,2,3]);<br /><br />var_dump(current($a), $a-&gt;current());<br />```<br /><br />It returns <br />```<br />int(1)<br />int(1)<br />```<br /><br />In PHP 7.3, but in PHP7.4 you get:<br />```<br />bool(false)<br />int(1)<br />```<br /><br />And in PHP8:<br />```<br />Deprecated: current(): Calling current() on an object is deprecated in /in/fdrNR on line 5<br />bool(false)<br />int(1)<br />```</span></code></div>
  </div>
 </div>
  <div class="note" id="77064">  <div class="votes">
    <div id="Vu77064">
    <a href="/manual/vote-note.php?id=77064&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77064">
    <a href="/manual/vote-note.php?id=77064&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77064" title="60% like this...">
    10
    </div>
  </div>
  <a href="#77064" class="name">
  <strong class="user"><em>vaclav dot sir at gmail dot com</em></strong></a><a class="genanchor" href="#77064"> &para;</a><div class="date" title="2007-08-13 09:23"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77064">
<div class="phpcode"><code><span class="html">To that "note": You won't be able to distinguish the end of an array from a boolean FALSE element, BUT you can distinguish the end from a NULL value of the key() function.<br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) === </span><span class="default">null</span><span class="keyword">) {<br />    echo </span><span class="string">"You are in the end of the array."</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">"Current element: " </span><span class="keyword">. </span><span class="default">current</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113561">  <div class="votes">
    <div id="Vu113561">
    <a href="/manual/vote-note.php?id=113561&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113561">
    <a href="/manual/vote-note.php?id=113561&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113561" title="61% like this...">
    7
    </div>
  </div>
  <a href="#113561" class="name">
  <strong class="user"><em>strate at yandex dot com</em></strong></a><a class="genanchor" href="#113561"> &para;</a><div class="date" title="2013-10-30 07:11"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113561">
<div class="phpcode"><code><span class="html">Note, that you can pass array by expression, not only by reference (as described in doc).<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">( </span><span class="default">current</span><span class="keyword">( array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) ) ); </span><span class="comment">// (int) 1<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="29950">  <div class="votes">
    <div id="Vu29950">
    <a href="/manual/vote-note.php?id=29950&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29950">
    <a href="/manual/vote-note.php?id=29950&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29950" title="58% like this...">
    8
    </div>
  </div>
  <a href="#29950" class="name">
  <strong class="user"><em>retestro_REMOVE at SPAM_esperanto dot org dot il</em></strong></a><a class="genanchor" href="#29950"> &para;</a><div class="date" title="2003-03-01 06:31"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29950">
<div class="phpcode"><code><span class="html">The docs do not specify this, but adding to the array using the brackets syntax:
<br />     <span class="default">&lt;?php $my_array</span><span class="keyword">[] = </span><span class="default">$new_value</span><span class="keyword">; </span><span class="default">?&gt;
<br /></span>will not advance the internal pointer of the array. therefore, you cannot use current() to get the last value added or key() to get the key of the most recently added element.
<br />
<br />You should do an end($my_array) to advance the internal pointer to the end ( as stated in one of the notes on end() ), then
<br />
<br />    <span class="default">&lt;?php
<br />     $last_key </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$my_array</span><span class="keyword">);  </span><span class="comment">// will return the key
<br />     </span><span class="default">$last_value </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$my_array</span><span class="keyword">);  </span><span class="comment">// will return the value
<br />    </span><span class="default">?&gt;
<br /></span>
<br />If you have no need in the key, $last_value = end($my_array) will also do the job.
<br />
<br />- Sergey.</span></code></div>
  </div>
 </div>
  <div class="note" id="41864">  <div class="votes">
    <div id="Vu41864">
    <a href="/manual/vote-note.php?id=41864&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41864">
    <a href="/manual/vote-note.php?id=41864&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41864" title="57% like this...">
    6
    </div>
  </div>
  <a href="#41864" class="name">
  <strong class="user"><em>mdeng at kabenresearch dot com</em></strong></a><a class="genanchor" href="#41864"> &para;</a><div class="date" title="2004-04-23 11:04"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41864">
<div class="phpcode"><code><span class="html">For large array(my sample was 80000+ elements), if you want to traverse the array in sequence, using array index $a[$i] could be very inefficient(very slow). I had to switch to use current($a).</span></code></div>
  </div>
 </div>
  <div class="note" id="122924">  <div class="votes">
    <div id="Vu122924">
    <a href="/manual/vote-note.php?id=122924&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122924">
    <a href="/manual/vote-note.php?id=122924&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122924" title="62% like this...">
    2
    </div>
  </div>
  <a href="#122924" class="name">
  <strong class="user"><em>xedin dot unknown at gmail dot com</em></strong></a><a class="genanchor" href="#122924"> &para;</a><div class="date" title="2018-07-10 01:28"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122924">
<div class="phpcode"><code><span class="html">Array functions, such as `current()` and `rewind()` will work on `Traversable` as well, PHP 5.0 - 7.3, but not in HHVM:<br /><br /><span class="default">&lt;?php<br /><br />$queue </span><span class="keyword">= new </span><span class="default">ArrayIterator</span><span class="keyword">(array(</span><span class="string">'adasdasd'</span><span class="keyword">));<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$queue</span><span class="keyword">);<br /></span><span class="default">$current </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$queue</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />See <a href="https://3v4l.org/VjCHR" rel="nofollow" target="_blank">https://3v4l.org/VjCHR</a></span></code></div>
  </div>
 </div>
  <div class="note" id="116128">  <div class="votes">
    <div id="Vu116128">
    <a href="/manual/vote-note.php?id=116128&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116128">
    <a href="/manual/vote-note.php?id=116128&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116128" title="55% like this...">
    5
    </div>
  </div>
  <a href="#116128" class="name">
  <strong class="user"><em>Vasily Yudin (st-2 at mail dot ru)</em></strong></a><a class="genanchor" href="#116128"> &para;</a><div class="date" title="2014-11-12 08:51"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116128">
<div class="phpcode"><code><span class="html">If you do current() after using uset() on foreach statement, you can get FALSE in PHP version 5.2.4 and above.<br />There is example:<br /><span class="default">&lt;?php<br />$prices </span><span class="keyword">= array(<br />    </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'1300990'</span><span class="keyword">,<br />    </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'500'</span><span class="keyword">,<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'600'<br /></span><span class="keyword">);<br />foreach(</span><span class="default">$prices </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$price</span><span class="keyword">){<br />    if(</span><span class="default">$price </span><span class="keyword">&lt; </span><span class="default">1000</span><span class="keyword">){<br />        unset(</span><span class="default">$prices</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$prices</span><span class="keyword">)); </span><span class="comment">// bool(false)<br /></span><span class="default">?&gt;<br /></span>If you do unset() without foreach? all will be fine.<br /><span class="default">&lt;?php<br />$prices </span><span class="keyword">= array(<br />    </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'1300990'</span><span class="keyword">,<br />    </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'500'</span><span class="keyword">,<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'600'<br /></span><span class="keyword">);<br />unset(</span><span class="default">$prices</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />unset(</span><span class="default">$prices</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$prices</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37917">  <div class="votes">
    <div id="Vu37917">
    <a href="/manual/vote-note.php?id=37917&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37917">
    <a href="/manual/vote-note.php?id=37917&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37917" title="52% like this...">
    2
    </div>
  </div>
  <a href="#37917" class="name">
  <strong class="user"><em>vitalib at 012 dot net dot il</em></strong></a><a class="genanchor" href="#37917"> &para;</a><div class="date" title="2003-12-02 02:10"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37917">
<div class="phpcode"><code><span class="html">Note that by copying an array its internal pointer is lost:<br /><br /><span class="default">&lt;?php<br />$myarray </span><span class="keyword">= array(</span><span class="default">0</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">=&gt;</span><span class="string">'b'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">=&gt;</span><span class="string">'c'</span><span class="keyword">);<br /></span><span class="default">next</span><span class="keyword">(</span><span class="default">$myarray</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$myarray</span><span class="keyword">));<br />echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">$myarray</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Would output 'b' and then 'a' since the internal pointer wasn't copied. You can cope with that problem using references instead, like that:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">=&amp; </span><span class="default">$myarray</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124228">  <div class="votes">
    <div id="Vu124228">
    <a href="/manual/vote-note.php?id=124228&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124228">
    <a href="/manual/vote-note.php?id=124228&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124228" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124228" class="name">
  <strong class="user"><em>leozmm at outlook dot com</em></strong></a><a class="genanchor" href="#124228"> &para;</a><div class="date" title="2019-09-24 08:02"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124228">
<div class="phpcode"><code><span class="html">Array can be passed by both REFERENCE and EXPRESSION on `current`, because current doesn't move array's internal pointer,<br />this is not true for other functions like: `end`, `next`, `prev` etc.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">() {return array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);}<br />    echo </span><span class="default">current</span><span class="keyword">(</span><span class="default">foo</span><span class="keyword">());  </span><span class="comment">// this print '1'<br />    </span><span class="keyword">echo </span><span class="default">end</span><span class="keyword">(</span><span class="default">foo</span><span class="keyword">());      </span><span class="comment">// this print error: Only variables should be passed by reference<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121483">  <div class="votes">
    <div id="Vu121483">
    <a href="/manual/vote-note.php?id=121483&amp;page=function.current&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121483">
    <a href="/manual/vote-note.php?id=121483&amp;page=function.current&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121483" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121483" class="name">
  <strong class="user"><em>pdarmis at gmail dot com</em></strong></a><a class="genanchor" href="#121483"> &para;</a><div class="date" title="2017-08-06 06:22"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121483">
<div class="phpcode"><code><span class="html">Based on this example <a href="http://php.net/manual/en/function.current.php#116128" rel="nofollow" target="_blank">http://php.net/manual/en/function.current.php#116128</a> i would like to add the following.  As Vasily points out in his example <br /><span class="default">&lt;?php<br />$prices </span><span class="keyword">= array(<br />    </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'1300990'</span><span class="keyword">,<br />    </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'500'</span><span class="keyword">,<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'600'<br /></span><span class="keyword">);<br />foreach(</span><span class="default">$prices </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$price</span><span class="keyword">){<br />    if(</span><span class="default">$price </span><span class="keyword">&lt; </span><span class="default">1000</span><span class="keyword">){<br />        unset(</span><span class="default">$prices</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$prices</span><span class="keyword">)); </span><span class="comment">// bool(false)<br /></span><span class="default">?&gt;<br /></span>The above example will not work and return false for version of PHP between 5.2.4 and 5.6.29. The issue is not present on PHP versions &gt;= 7.0.1<br />A different workaround (at least from Vasily's example) would be to use reset() before using current() in order to reset the array pointer to start.<br /><span class="default">&lt;?php<br />$prices </span><span class="keyword">= array(<br />    </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'1300990'</span><span class="keyword">,<br />    </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'500'</span><span class="keyword">,<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'600'<br /></span><span class="keyword">);<br />foreach(</span><span class="default">$prices </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$price</span><span class="keyword">){<br />    if(</span><span class="default">$price </span><span class="keyword">&lt; </span><span class="default">1000</span><span class="keyword">){<br />        unset(</span><span class="default">$prices</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }<br />}<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$prices</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$prices</span><span class="keyword">)); </span><span class="comment">// string(7) "1300990"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.current&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.current.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
