<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: next - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.next.php">
 <link rel="shorturl" href="https://www.php.net/next">
 <link rel="alternate" href="https://www.php.net/next" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.natsort.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pos.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.next.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.next.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.next.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.next.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.next.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.next.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.next.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.next.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.next.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.next.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.next.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Advance the internal pointer of an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: next - Manual" />
<meta name="twitter:description" content="Advance the internal pointer of an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: next - Manual" />
<meta itemprop="description" content="Advance the internal pointer of an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Advance the internal pointer of an array" />

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
        <a href="function.pos.php">
          pos &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.natsort.php">
          &laquo; natsort        </a>
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
            <option value='en/function.next.php' selected="selected">English</option>
            <option value='de/function.next.php'>German</option>
            <option value='es/function.next.php'>Spanish</option>
            <option value='fr/function.next.php'>French</option>
            <option value='it/function.next.php'>Italian</option>
            <option value='ja/function.next.php'>Japanese</option>
            <option value='pt_BR/function.next.php'>Brazilian Portuguese</option>
            <option value='ru/function.next.php'>Russian</option>
            <option value='tr/function.next.php'>Turkish</option>
            <option value='uk/function.next.php'>Ukrainian</option>
            <option value='zh/function.next.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.next" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">next</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">next</span> &mdash; <span class="dc-title">Advance the internal pointer of an array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.next-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>next</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.object.php" class="type object">object</a></span></span> <code class="parameter reference">&$array</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>next()</strong></span> behaves like
   <span class="function"><a href="function.current.php" class="function">current()</a></span>, with one difference.  It advances
   the internal array pointer one place forward before returning the
   element value.  That means it returns the next array value and
   advances the internal array pointer by one.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.next-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.array.php" class="type array">array</a></span> being affected.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.next-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the array value in the next place that&#039;s pointed to by the
   internal array pointer, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if there are no more elements.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.next-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.next-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5321">
    <p><strong>Example #1 Example use of <span class="function"><strong>next()</strong></span> and friends</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$transport </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'foot'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bike'</span><span style="color: #007700">, </span><span style="color: #DD0000">'car'</span><span style="color: #007700">, </span><span style="color: #DD0000">'plane'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// $mode = 'foot';<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">next</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;    </span><span style="color: #FF8000">// $mode = 'bike';<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">next</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;    </span><span style="color: #FF8000">// $mode = 'car';<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">prev</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;    </span><span style="color: #FF8000">// $mode = 'bike';<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$mode </span><span style="color: #007700">= </span><span style="color: #0000BB">end</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;     </span><span style="color: #FF8000">// $mode = 'plane';<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.next-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    The end of an array is indistinguishable from a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> element. 
    To properly traverse an array which may contain <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> elements, see the
    <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> function.
   </span>
   <span class="simpara">
    To still use <span class="function"><strong>next()</strong></span> and properly check if the end of the array 
    has been reached, verify that the <span class="function"><a href="function.key.php" class="function">key()</a></span> is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.next-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.current.php" class="function" rel="rdfs-seeAlso">current()</a> - Return the current element in an array</span></li>
    <li><span class="function"><a href="function.end.php" class="function" rel="rdfs-seeAlso">end()</a> - Set the internal pointer of an array to its last element</span></li>
    <li><span class="function"><a href="function.prev.php" class="function" rel="rdfs-seeAlso">prev()</a> - Rewind the internal array pointer</span></li>
    <li><span class="function"><a href="function.reset.php" class="function" rel="rdfs-seeAlso">reset()</a> - Set the internal pointer of an array to its first element</span></li>
    <li><span class="function"><a href="function.each.php" class="function" rel="rdfs-seeAlso">each()</a> - Return the current key and value pair from an array and advance the array cursor</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/next.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.next%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.next&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.next.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121563">  <div class="votes">
    <div id="Vu121563">
    <a href="/manual/vote-note.php?id=121563&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121563">
    <a href="/manual/vote-note.php?id=121563&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121563" title="65% like this...">
    19
    </div>
  </div>
  <a href="#121563" class="name">
  <strong class="user"><em>JumpIfBelow</em></strong></a><a class="genanchor" href="#121563"> &para;</a><div class="date" title="2017-08-24 11:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121563">
<div class="phpcode"><code><span class="html">Now from PHP 7.2, the function "each" is deprecated, so the has_next I've posted is no longer a good idea. There is another to keep it simple and fast:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">has_next</span><span class="keyword">(array </span><span class="default">$_array</span><span class="keyword">)<br />{<br />  return </span><span class="default">next</span><span class="keyword">(</span><span class="default">$_array</span><span class="keyword">) !== </span><span class="default">false </span><span class="keyword">?: </span><span class="default">key</span><span class="keyword">(</span><span class="default">$_array</span><span class="keyword">) !== </span><span class="default">null</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72989">  <div class="votes">
    <div id="Vu72989">
    <a href="/manual/vote-note.php?id=72989&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72989">
    <a href="/manual/vote-note.php?id=72989&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72989" title="61% like this...">
    9
    </div>
  </div>
  <a href="#72989" class="name">
  <strong class="user"><em>gg2005 at gmail dot com</em></strong></a><a class="genanchor" href="#72989"> &para;</a><div class="date" title="2007-02-06 01:32"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72989">
<div class="phpcode"><code><span class="html">Don't confuse next with continue!<br /><br />If you're a Perl developer starting with PHP, you might try to use "next" inside a loop to skip to the next iteration...   <br /><br />i.e., <br /><br />foreach ($things as $thing) {<br />  if (something I don't like about $thing) {<br />   next;<br />  }<br />  blah....<br />}<br /><br />The php compiler will take next... but it's not going to work.<br /><br />Do this instead:<br />foreach ($things as $thing) {<br />  if (something I don't like about $thing) {<br />   continue;<br />  }<br />  blah....<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="42545">  <div class="votes">
    <div id="Vu42545">
    <a href="/manual/vote-note.php?id=42545&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42545">
    <a href="/manual/vote-note.php?id=42545&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42545" title="59% like this...">
    5
    </div>
  </div>
  <a href="#42545" class="name">
  <strong class="user"><em>court shrock</em></strong></a><a class="genanchor" href="#42545"> &para;</a><div class="date" title="2004-05-20 04:36"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42545">
<div class="phpcode"><code><span class="html">This code returns neighbors of the specified key.  The result will be empty if it doesn't have any neighbors.  My approach was to use the order of keys to determine neighbors, which is differnet from just getting the next/previous element in an array.  Feel free to point out stupidities :)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_neighbor</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">)<br />{<br />    </span><span class="default">krsort</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />    </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />    </span><span class="default">$keyIndexes </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">);<br />    <br />    </span><span class="default">$return </span><span class="keyword">= array();<br />    if (isset(</span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$keyIndexes</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]-</span><span class="default">1</span><span class="keyword">]))<br />        </span><span class="default">$return</span><span class="keyword">[] = </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$keyIndexes</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]-</span><span class="default">1</span><span class="keyword">];<br />    if (isset(</span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$keyIndexes</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]+</span><span class="default">1</span><span class="keyword">]))<br />        </span><span class="default">$return</span><span class="keyword">[] = </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$keyIndexes</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]+</span><span class="default">1</span><span class="keyword">];<br /><br />    return </span><span class="default">$return</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122216">  <div class="votes">
    <div id="Vu122216">
    <a href="/manual/vote-note.php?id=122216&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122216">
    <a href="/manual/vote-note.php?id=122216&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122216" title="62% like this...">
    2
    </div>
  </div>
  <a href="#122216" class="name">
  <strong class="user"><em>nigra</em></strong></a><a class="genanchor" href="#122216"> &para;</a><div class="date" title="2018-01-02 08:01"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122216">
<div class="phpcode"><code><span class="html">This function will return the previous,next neighbors of an array entry within an associative array. If the specified $key points to the last or first element of the array, the first or last keys of the array will be returned consecutively. This is an improved version of the same function posted earlier.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_neighbor</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">, </span><span class="default">$key </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$arRelated </span><span class="keyword">= array(), </span><span class="default">$cntRelated </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">)<br />{    <br />    if(</span><span class="default">$count </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; isset(</span><span class="default">$key</span><span class="keyword">))<br />    {        <br />        </span><span class="default">$keyL </span><span class="keyword">= </span><span class="default">$count </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">; <br />        </span><span class="default">$keyR </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />        </span><span class="default">$arResult </span><span class="keyword">= array();<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$cntRelated</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        {<br />            if(</span><span class="default">$key </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">)<br />            {<br />                if((</span><span class="default">$i </span><span class="keyword">% </span><span class="default">2</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$curKey </span><span class="keyword">= </span><span class="default">$count </span><span class="keyword">- </span><span class="default">$keyL</span><span class="keyword">;<br />                    </span><span class="default">$keyL</span><span class="keyword">--;<br />                }<br />                else<br />                {<br />                    </span><span class="default">$curKey </span><span class="keyword">= </span><span class="default">$count </span><span class="keyword">- </span><span class="default">$keyR</span><span class="keyword">;<br />                    </span><span class="default">$keyR</span><span class="keyword">++;<br />                }<br />            }<br />            else<br />            {<br />                if(</span><span class="default">$arRelated</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] &gt;= </span><span class="default">$count </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$curKey </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                }<br />                else<br />                {<br />                    </span><span class="default">$curKey </span><span class="keyword">= </span><span class="default">$arRelated</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">;<br />                }<br />            }<br />            </span><span class="default">$arResult</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$curKey</span><span class="keyword">;    <br />        }<br />        return </span><span class="default">$arResult</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$arr </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)<br />{<br />    if(</span><span class="default">$arRelated </span><span class="keyword">= </span><span class="default">array_neighbor</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$arRelated</span><span class="keyword">))<br />    {<br />        </span><span class="default">$arHeighbor</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'RELATED'</span><span class="keyword">] = </span><span class="default">$arRelated</span><span class="keyword">;<br />    }<br />}<br /><br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$arHeighbor</span><span class="keyword">); echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [RELATED] =&gt; Array<br />                (<br />                    [1] =&gt; 4<br />                    [2] =&gt; 1<br />                )<br /><br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [RELATED] =&gt; Array<br />                (<br />                    [1] =&gt; 0<br />                    [2] =&gt; 2<br />                )<br /><br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [RELATED] =&gt; Array<br />                (<br />                    [1] =&gt; 1<br />                    [2] =&gt; 3<br />                )<br /><br />        )<br /><br />    [3] =&gt; Array<br />        (<br />            [RELATED] =&gt; Array<br />                (<br />                    [1] =&gt; 2<br />                    [2] =&gt; 4<br />                )<br /><br />        )<br /><br />    [4] =&gt; Array<br />        (<br />            [RELATED] =&gt; Array<br />                (<br />                    [1] =&gt; 3<br />                    [2] =&gt; 0<br />                )<br /><br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="95010">  <div class="votes">
    <div id="Vu95010">
    <a href="/manual/vote-note.php?id=95010&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95010">
    <a href="/manual/vote-note.php?id=95010&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95010" title="57% like this...">
    2
    </div>
  </div>
  <a href="#95010" class="name">
  <strong class="user"><em>double at dumpit dot de</em></strong></a><a class="genanchor" href="#95010"> &para;</a><div class="date" title="2009-12-08 01:19"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95010">
<div class="phpcode"><code><span class="html">PHP: 5.2.10-2ubuntu6.3 (default apt-get installation on actual, see Date, jaunty 9.10 Ubuntu Distro - G33kWoRDs)<br /><br />Have a look at your array pointer if you copy an array - the pointer will be copied, too.<br /><br />For example if you got this construct:<br /><span class="default">&lt;?php<br />    $array </span><span class="keyword">= array(</span><span class="string">'zero'</span><span class="keyword">,</span><span class="string">'one'</span><span class="keyword">,</span><span class="string">'two'</span><span class="keyword">,</span><span class="string">'three'</span><span class="keyword">,</span><span class="string">'four'</span><span class="keyword">,</span><span class="string">'five'</span><span class="keyword">,</span><span class="string">'six'</span><span class="keyword">,</span><span class="string">'seven'</span><span class="keyword">);<br />    </span><span class="default">$array2 </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">;<br />    </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">);<br /><br />    </span><span class="comment">// will output:<br />    // 1<br />    // 0<br /></span><span class="default">?&gt;<br /></span><br />But if you copy the array after you've setted the pointer, the pointer will be copied, too:<br /><span class="default">&lt;?php<br />    $array </span><span class="keyword">= array(</span><span class="string">'zero'</span><span class="keyword">,</span><span class="string">'one'</span><span class="keyword">,</span><span class="string">'two'</span><span class="keyword">,</span><span class="string">'three'</span><span class="keyword">,</span><span class="string">'four'</span><span class="keyword">,</span><span class="string">'five'</span><span class="keyword">,</span><span class="string">'six'</span><span class="keyword">,</span><span class="string">'seven'</span><span class="keyword">);<br />    </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    </span><span class="default">$array2 </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">;<br />    echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">);<br />   <br />    </span><span class="comment">// will output:<br />    // 1 <br />    // 1<br /></span><span class="default">?&gt;<br /></span><br />What's more is, that foreach not resetting the pointer after walk through:<br /><span class="default">&lt;?php<br /><br />    $array </span><span class="keyword">= array(</span><span class="string">'zero'</span><span class="keyword">,</span><span class="string">'one'</span><span class="keyword">,</span><span class="string">'two'</span><span class="keyword">,</span><span class="string">'three'</span><span class="keyword">,</span><span class="string">'four'</span><span class="keyword">,</span><span class="string">'five'</span><span class="keyword">,</span><span class="string">'six'</span><span class="keyword">,</span><span class="string">'seven'</span><span class="keyword">);<br />    </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    </span><span class="default">$array2 </span><span class="keyword">= array();<br />    foreach(</span><span class="default">$array </span><span class="keyword">AS </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){<br />        echo </span><span class="default">$key</span><span class="keyword">;<br />        </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />    }<br />    echo </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">));<br />    echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">);<br /><br />    </span><span class="comment">// will output for foreach:<br />    // 0 1 2 3 4 5 6 7<br />    // and for the keys<br />    // NULL<br />    // 0<br /></span><span class="default">?&gt;<br /></span><br />The php-functions seems to reset the pointer on the given position after walk through (i don't know the internal handling - there could be used a copy of the array, too):<br /><span class="default">&lt;?php<br /><br />    $array </span><span class="keyword">= array(</span><span class="string">'zero'</span><span class="keyword">,</span><span class="string">'one'</span><span class="keyword">,</span><span class="string">'two'</span><span class="keyword">,</span><span class="string">'three'</span><span class="keyword">,</span><span class="string">'four'</span><span class="keyword">,</span><span class="string">'five'</span><span class="keyword">,</span><span class="string">'six'</span><span class="keyword">,</span><span class="string">'seven'</span><span class="keyword">);<br />    </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    </span><span class="default">$array2 </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">);<br /><br />    </span><span class="comment">// will output:<br />    // 1<br />    // 0<br /></span><span class="default">?&gt;<br /></span><br />There are a lot Methods like array_merge($array) that will neither reset the pointer of $array nor copy the pointer to $array2. Have a look on this.<br />I Hope this was a little helpfull.</span></code></div>
  </div>
 </div>
  <div class="note" id="52362">  <div class="votes">
    <div id="Vu52362">
    <a href="/manual/vote-note.php?id=52362&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52362">
    <a href="/manual/vote-note.php?id=52362&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52362" title="53% like this...">
    3
    </div>
  </div>
  <a href="#52362" class="name">
  <strong class="user"><em>brentimus</em></strong></a><a class="genanchor" href="#52362"> &para;</a><div class="date" title="2005-04-28 10:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52362">
<div class="phpcode"><code><span class="html">Papipo's function below is usefull in concept but does not work. <br /><br />"Since you do not pass the array by reference, its pointer is only moved inside the function."<br /><br />This is true, but the array you are manipulating in your has_next() function will have it's pointer set to the first element, not the same position as the original array. What you want to do is pass the array to the has_next() function via reference. While in the has_next() function, make a copy of the array to work on. Find out the current pointer position of the original array and set the pointer on the working copy of the array to the same element. Then you may test to see if the array has a "next" element.<br /><br />Try the followig insetad:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">has_next</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">) <br />{<br />    </span><span class="default">$A_work</span><span class="keyword">=</span><span class="default">$array</span><span class="keyword">;  </span><span class="comment">//$A_work is a copy of $array but with its internal pointer set to the first element.<br />    </span><span class="default">$PTR</span><span class="keyword">=</span><span class="default">current</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); <br />    </span><span class="default">array_set_pointer</span><span class="keyword">(</span><span class="default">$A_work</span><span class="keyword">, </span><span class="default">$PTR</span><span class="keyword">);<br /><br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$A_work</span><span class="keyword">)) <br />    {<br />        if(</span><span class="default">next</span><span class="keyword">(</span><span class="default">$A_work</span><span class="keyword">)===</span><span class="default">false</span><span class="keyword">) <br />            return </span><span class="default">false</span><span class="keyword">;<br />        else<br />            return </span><span class="default">true</span><span class="keyword">;<br />    } <br />    else <br />        return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">array_set_pointer</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)<br />{<br />    </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    while(</span><span class="default">$val</span><span class="keyword">=</span><span class="default">current</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">))<br />    {<br />        if(</span><span class="default">$val</span><span class="keyword">==</span><span class="default">$value</span><span class="keyword">) <br />            break;<br /><br />        </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="41622">  <div class="votes">
    <div id="Vu41622">
    <a href="/manual/vote-note.php?id=41622&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41622">
    <a href="/manual/vote-note.php?id=41622&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41622" title="52% like this...">
    1
    </div>
  </div>
  <a href="#41622" class="name">
  <strong class="user"><em>bm at ANTISPAM dot solidwave dot com</em></strong></a><a class="genanchor" href="#41622"> &para;</a><div class="date" title="2004-04-16 09:49"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41622">
<div class="phpcode"><code><span class="html">Take care when replacing code using reset()/next() with code using foreach as foreach does not update the array's internal pointer.  This means you cannot, say, use next() to skip an element in foreach loop, or use current() within a function to get a reference to the current element.  You probably have code depending on this internal pointer and replacing it will be more work than you anticipated.<br /><br />See <a href="http://www.php.net/foreach" rel="nofollow" target="_blank">http://www.php.net/foreach</a></span></code></div>
  </div>
 </div>
  <div class="note" id="129722">  <div class="votes">
    <div id="Vu129722">
    <a href="/manual/vote-note.php?id=129722&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129722">
    <a href="/manual/vote-note.php?id=129722&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129722" title="no votes...">
    0
    </div>
  </div>
  <a href="#129722" class="name">
  <strong class="user"><em>jbeauwalker at gmail dot com</em></strong></a><a class="genanchor" href="#129722"> &para;</a><div class="date" title="2024-08-27 01:07"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129722">
<div class="phpcode"><code><span class="html">I suggest that a WARNING that next() should not be used within a foreach loop should be included in the main body of the documentation at the top. At one time, it seems to have been there, but I spent hours trying to solve the bizarre problems that result from this combination, only to stumble on a clue to it on another site, that seem to suggest that it was originally clearly identified.  If you look hard, this problem is referenced in some notes, but one doesn't expect to look there for something so basic.</span></code></div>
  </div>
 </div>
  <div class="note" id="46493">  <div class="votes">
    <div id="Vu46493">
    <a href="/manual/vote-note.php?id=46493&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46493">
    <a href="/manual/vote-note.php?id=46493&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46493" title="50% like this...">
    1
    </div>
  </div>
  <a href="#46493" class="name">
  <strong class="user"><em>papipo&#039;s gmail account</em></strong></a><a class="genanchor" href="#46493"> &para;</a><div class="date" title="2004-10-13 01:47"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46493">
<div class="phpcode"><code><span class="html">I need to know if an array has more items, but without moving array's internail pointer. Thats is, a has_next() function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">has_next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) {<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) {<br />        if (</span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        } else {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br />    } else {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$array </span><span class="keyword">= array(</span><span class="string">'fruit'</span><span class="keyword">, </span><span class="string">'melon'</span><span class="keyword">);<br />if (</span><span class="default">has_next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) {<br />    echo </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// prints 'melon'<br /></span><span class="default">?&gt;<br /></span><br />Since you do not pass the array by reference, its pointer is only moved inside the function.<br />Hope that helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="122694">  <div class="votes">
    <div id="Vu122694">
    <a href="/manual/vote-note.php?id=122694&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122694">
    <a href="/manual/vote-note.php?id=122694&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122694" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122694" class="name">
  <strong class="user"><em>notImportant</em></strong></a><a class="genanchor" href="#122694"> &para;</a><div class="date" title="2018-05-03 01:11"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122694">
<div class="phpcode"><code><span class="html">a more readable version of papipo's has_next function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">has_next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) {<br />    </span><span class="default">$has_next </span><span class="keyword">= </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) &amp;&amp; </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">;<br /><br />    return </span><span class="default">$has_next</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />OR<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">has_next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) {<br />    </span><span class="default">$has_next </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) {<br />        </span><span class="default">$has_next </span><span class="keyword">= </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">$has_next</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129042">  <div class="votes">
    <div id="Vu129042">
    <a href="/manual/vote-note.php?id=129042&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129042">
    <a href="/manual/vote-note.php?id=129042&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129042" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129042" class="name">
  <strong class="user"><em>tecdoc at ukr dot net</em></strong></a><a class="genanchor" href="#129042"> &para;</a><div class="date" title="2023-11-13 10:10"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129042">
<div class="phpcode"><code><span class="html">It is good example how to loop array by current() and next() functions from php key() manual. In my opinion, this particular example would be better placed in current() and next() than key() manuals. <br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array(<br />    </span><span class="string">'fruit1' </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">,<br />    </span><span class="string">'fruit2' </span><span class="keyword">=&gt; </span><span class="string">'orange'</span><span class="keyword">,<br />    </span><span class="string">'fruit3' </span><span class="keyword">=&gt; </span><span class="string">'grape'</span><span class="keyword">,<br />    </span><span class="string">'fruit4' </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">,<br />    </span><span class="string">'fruit5' </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">);<br /><br /></span><span class="comment">// this cycle echoes all associative array<br />// key where value equals "apple"<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// prepare array for cycle <br /></span><span class="keyword">while (</span><span class="default">$fruit_name </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) {<br />    if (</span><span class="default">$fruit_name </span><span class="keyword">== </span><span class="string">'apple'</span><span class="keyword">) {<br />        echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />    </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129041">  <div class="votes">
    <div id="Vu129041">
    <a href="/manual/vote-note.php?id=129041&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129041">
    <a href="/manual/vote-note.php?id=129041&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129041" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129041" class="name">
  <strong class="user"><em>tecdoc at ukr dot net</em></strong></a><a class="genanchor" href="#129041"> &para;</a><div class="date" title="2023-11-13 09:53"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129041">
<div class="phpcode"><code><span class="html">Be attentive! It is possibility to lose the array pointer with next() and prev();<br /><span class="default">&lt;?php<br /></span><span class="comment">// example<br /></span><span class="default">$array </span><span class="keyword">= array(<br />    </span><span class="string">'fruit1' </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">,<br />    </span><span class="string">'fruit2' </span><span class="keyword">=&gt; </span><span class="string">'orange'</span><span class="keyword">,<br />    </span><span class="string">'fruit3' </span><span class="keyword">=&gt; </span><span class="string">'grape'</span><span class="keyword">,<br />    </span><span class="string">'fruit4' </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">,<br />    </span><span class="string">'fruit5' </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">);<br /><br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// prepare array<br /><br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">); </span><span class="comment">// 'apple'<br /><br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">prev</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">); </span><span class="comment">// false. The array pointer is lossed!<br /><br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// it is not possible to return to the previous (first/last element)!<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="44869">  <div class="votes">
    <div id="Vu44869">
    <a href="/manual/vote-note.php?id=44869&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44869">
    <a href="/manual/vote-note.php?id=44869&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44869" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#44869" class="name">
  <strong class="user"><em>lukasz at karapuda dot com</em></strong></a><a class="genanchor" href="#44869"> &para;</a><div class="date" title="2004-08-18 10:06"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44869">
<div class="phpcode"><code><span class="html">This function will return the previous,next neighbors of an array entry within an associative array. If the specified $key points to the last or first element of the array, the first or last keys of the array will be returned consecutively. This is an improved version of the same function posted earlier.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_neighbor</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">)<br />{<br />   </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />   </span><span class="default">$keyIndexes </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">);<br />  <br />   </span><span class="default">$return </span><span class="keyword">= array();<br />   if (isset(</span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$keyIndexes</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]-</span><span class="default">1</span><span class="keyword">])) {<br />       </span><span class="default">$return</span><span class="keyword">[] = </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$keyIndexes</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]-</span><span class="default">1</span><span class="keyword">];<br />   }<br />   else {<br />       </span><span class="default">$return</span><span class="keyword">[] = </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">];<br />   }<br />   <br />   if (isset(</span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$keyIndexes</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]+</span><span class="default">1</span><span class="keyword">])) {<br />       </span><span class="default">$return</span><span class="keyword">[] = </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$keyIndexes</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]+</span><span class="default">1</span><span class="keyword">];<br />   }<br />   else {<br />       </span><span class="default">$return</span><span class="keyword">[] = </span><span class="default">$keys</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />   }<br />   <br />   return </span><span class="default">$return</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124173">  <div class="votes">
    <div id="Vu124173">
    <a href="/manual/vote-note.php?id=124173&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124173">
    <a href="/manual/vote-note.php?id=124173&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124173" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#124173" class="name">
  <strong class="user"><em>Mikhail</em></strong></a><a class="genanchor" href="#124173"> &para;</a><div class="date" title="2019-09-05 02:47"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124173">
<div class="phpcode"><code><span class="html">This function returns next element in array after your key or false if it last or key doesn't exists in array.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">nextElement</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">, </span><span class="default">$currentKey</span><span class="keyword">)<br />{<br />    if (!isset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$currentKey</span><span class="keyword">])) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    </span><span class="default">$nextElement </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$item</span><span class="keyword">) {<br />        </span><span class="default">$nextElement </span><span class="keyword">= </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />        if (</span><span class="default">$key </span><span class="keyword">== </span><span class="default">$currentKey</span><span class="keyword">) {<br />            break;<br />        }<br />    }<br /><br />    return </span><span class="default">$nextElement</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79750">  <div class="votes">
    <div id="Vu79750">
    <a href="/manual/vote-note.php?id=79750&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79750">
    <a href="/manual/vote-note.php?id=79750&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79750" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#79750" class="name">
  <strong class="user"><em>darkside at i dot ua</em></strong></a><a class="genanchor" href="#79750"> &para;</a><div class="date" title="2007-12-11 03:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79750">
<div class="phpcode"><code><span class="html">This class implements simple operations with array<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Steps </span><span class="keyword">{<br />    <br />    private </span><span class="default">$all</span><span class="keyword">;<br />    private </span><span class="default">$count</span><span class="keyword">;<br />    private </span><span class="default">$curr</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct </span><span class="keyword">() {<br />      <br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />      <br />    }<br />    <br />    public function </span><span class="default">add </span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">) {<br />      <br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">count</span><span class="keyword">++;<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">all</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">count</span><span class="keyword">] = </span><span class="default">$step</span><span class="keyword">;<br />      <br />    }<br />    <br />    public function </span><span class="default">setCurrent </span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">) {<br />      <br />      </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">all</span><span class="keyword">);<br />      for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">all</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]==</span><span class="default">$step</span><span class="keyword">) break;<br />        </span><span class="default">next</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">all</span><span class="keyword">);<br />      }<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">curr </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">all</span><span class="keyword">);<br />      <br />    }<br />    <br />    public function </span><span class="default">getCurrent </span><span class="keyword">() {<br />      <br />      return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">curr</span><span class="keyword">;<br />      <br />    }<br />    <br />    public function </span><span class="default">getNext </span><span class="keyword">() {<br />      <br />      </span><span class="default">self</span><span class="keyword">::</span><span class="default">setCurrent</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">curr</span><span class="keyword">);<br />      return </span><span class="default">next</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">all</span><span class="keyword">);<br />      <br />    }<br />        <br />  }<br /></span><span class="default">?&gt;<br /></span><br />usage example:<br /><br /><span class="default">&lt;?php<br />   $steps </span><span class="keyword">= new </span><span class="default">Steps</span><span class="keyword">();<br />   </span><span class="default">$steps</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="string">'one'</span><span class="keyword">);<br />   </span><span class="default">$steps</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="string">'two'</span><span class="keyword">);<br />   </span><span class="default">$steps</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="string">'three'</span><span class="keyword">);<br />   </span><span class="default">$steps</span><span class="keyword">-&gt;</span><span class="default">setCurrent</span><span class="keyword">(</span><span class="string">'one'</span><span class="keyword">);<br />   echo </span><span class="default">$steps</span><span class="keyword">-&gt;</span><span class="default">getCurrent</span><span class="keyword">().</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />   echo </span><span class="default">$steps</span><span class="keyword">-&gt;</span><span class="default">getNext</span><span class="keyword">().</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />   </span><span class="default">$steps</span><span class="keyword">-&gt;</span><span class="default">setCurrent</span><span class="keyword">(</span><span class="string">'two'</span><span class="keyword">);<br />   echo </span><span class="default">$steps</span><span class="keyword">-&gt;</span><span class="default">getCurrent</span><span class="keyword">().</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />   echo </span><span class="default">$steps</span><span class="keyword">-&gt;</span><span class="default">getNext</span><span class="keyword">().</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85505">  <div class="votes">
    <div id="Vu85505">
    <a href="/manual/vote-note.php?id=85505&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85505">
    <a href="/manual/vote-note.php?id=85505&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85505" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#85505" class="name">
  <strong class="user"><em>ThinkMedical at Gmail dot com</em></strong></a><a class="genanchor" href="#85505"> &para;</a><div class="date" title="2008-09-02 03:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85505">
<div class="phpcode"><code><span class="html">regarding references with foreach, you can use them directly. Obviating various posts which provide many lines of 'work arounds'.<br /><br />$array = array(1,2,3,4,5);<br /><br />foreach($array as &amp;$value)<br /><br />or use $key<br /><br />foreach($array as $key =&gt; $value)<br />{<br />    $array[$key] = '...';<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="117734">  <div class="votes">
    <div id="Vu117734">
    <a href="/manual/vote-note.php?id=117734&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117734">
    <a href="/manual/vote-note.php?id=117734&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117734" title="45% like this...">
    -4
    </div>
  </div>
  <a href="#117734" class="name">
  <strong class="user"><em>JumpIfBelow</em></strong></a><a class="genanchor" href="#117734"> &para;</a><div class="date" title="2015-07-30 12:45"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117734">
<div class="phpcode"><code><span class="html">After dealing with the fact that next() will either returns FALSE when there is no further element in the array or if the element itself is FALSE, I finally find a way to do a has_next() method, which will never fails. You can ignore and/or downvote my last comment, this it will be deleted.<br />Here is the code that work :<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">has_next</span><span class="keyword">(array </span><span class="default">$a</span><span class="keyword">){<br />        return </span><span class="default">next</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) !== </span><span class="default">false </span><span class="keyword">?: </span><span class="default">each</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127018">  <div class="votes">
    <div id="Vu127018">
    <a href="/manual/vote-note.php?id=127018&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127018">
    <a href="/manual/vote-note.php?id=127018&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127018" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#127018" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#127018"> &para;</a><div class="date" title="2022-04-28 09:28"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127018">
<div class="phpcode"><code><span class="html">This is the best example of using next in a loop<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array(<br />    </span><span class="string">'fruit1' </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">,<br />    </span><span class="string">'fruit2' </span><span class="keyword">=&gt; </span><span class="string">'orange'</span><span class="keyword">,<br />    </span><span class="string">'fruit3' </span><span class="keyword">=&gt; </span><span class="string">'grape'</span><span class="keyword">,<br />    </span><span class="string">'fruit4' </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">,<br />    </span><span class="string">'fruit5' </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">);<br /><br /></span><span class="comment">// this cycle echoes all associative array<br />// key where value equals "apple"<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// prepare array for cycle <br /></span><span class="keyword">while (</span><span class="default">$fruit_name </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) {<br />    if (</span><span class="default">$fruit_name </span><span class="keyword">== </span><span class="string">'apple'</span><span class="keyword">) {<br />        echo </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />    </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />}<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123200">  <div class="votes">
    <div id="Vu123200">
    <a href="/manual/vote-note.php?id=123200&amp;page=function.next&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123200">
    <a href="/manual/vote-note.php?id=123200&amp;page=function.next&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123200" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#123200" class="name">
  <strong class="user"><em>andy at andysdrawings dot co dot uk</em></strong></a><a class="genanchor" href="#123200"> &para;</a><div class="date" title="2018-10-05 01:58"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123200">
<div class="phpcode"><code><span class="html">brentimus' array_set_pointer function will only work if the array value is unique in the array, and none of the array values are FALSE. It would be more reliable to use key() instead of current(). For similar reasons it's better to check key() after calling next() to determine whether the next() element "exists". Simply checking the value returned by next() will produce a false negative when looking at, for example, the first element of the array: ['one', 0, 'three']<br /><br />However, it also turns out that the copied array retains the original array's pointer, so array_set_pointer is not actually required here. The following should work:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">has_next</span><span class="keyword">(array &amp;</span><span class="default">$array</span><span class="keyword">) {<br />    </span><span class="default">$A_work </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">;  </span><span class="comment">// $A_work is a copy of $array including its internal pointer.<br />    </span><span class="default">next</span><span class="keyword">(</span><span class="default">$A_work</span><span class="keyword">);<br />    if (</span><span class="default">key</span><span class="keyword">(</span><span class="default">$A_work</span><span class="keyword">) === </span><span class="default">NULL</span><span class="keyword">)<br />        return </span><span class="default">false</span><span class="keyword">;<br />    else<br />        return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.next&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.next.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
