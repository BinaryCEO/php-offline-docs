<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_diff_assoc - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-diff-assoc.php">
 <link rel="shorturl" href="https://www.php.net/array-diff-assoc">
 <link rel="alternate" href="https://www.php.net/array-diff-assoc" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-diff.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-diff-key.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-diff-assoc.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-diff-assoc.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-diff-assoc.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-diff-assoc.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-diff-assoc.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-diff-assoc.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-diff-assoc.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-diff-assoc.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-diff-assoc.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-diff-assoc.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-diff-assoc.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Computes the difference of arrays with additional index check" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_diff_assoc - Manual" />
<meta name="twitter:description" content="Computes the difference of arrays with additional index check" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_diff_assoc - Manual" />
<meta itemprop="description" content="Computes the difference of arrays with additional index check" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Computes the difference of arrays with additional index check" />

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
        <a href="function.array-diff-key.php">
          array_diff_key &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-diff.php">
          &laquo; array_diff        </a>
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
            <option value='en/function.array-diff-assoc.php' selected="selected">English</option>
            <option value='de/function.array-diff-assoc.php'>German</option>
            <option value='es/function.array-diff-assoc.php'>Spanish</option>
            <option value='fr/function.array-diff-assoc.php'>French</option>
            <option value='it/function.array-diff-assoc.php'>Italian</option>
            <option value='ja/function.array-diff-assoc.php'>Japanese</option>
            <option value='pt_BR/function.array-diff-assoc.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-diff-assoc.php'>Russian</option>
            <option value='tr/function.array-diff-assoc.php'>Turkish</option>
            <option value='uk/function.array-diff-assoc.php'>Ukrainian</option>
            <option value='zh/function.array-diff-assoc.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-diff-assoc" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_diff_assoc</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_diff_assoc</span> &mdash; <span class="dc-title">Computes the difference of arrays with additional index check</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.array-diff-assoc-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_diff_assoc</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">...$arrays</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Compares <code class="parameter">array</code> against <code class="parameter">arrays</code> and
   returns the difference. Unlike <span class="function"><a href="function.array-diff.php" class="function">array_diff()</a></span> the array
   keys are also used in the comparison.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-diff-assoc-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>

    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The array to compare from
      </p>
     </dd>
    

    
     <dt><code class="parameter">arrays</code></dt>
     <dd>
      <p class="para">
       Arrays to compare against
      </p>
     </dd>
    

   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-diff-assoc-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> containing all the values from
   <code class="parameter">array</code> that are not present in any of the other arrays.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-diff-assoc-changelog">
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
  <td>8.0.0</td>
  <td>
  This function can now be called with only one parameter.
  Formerly, at least two parameters have been required.
  </td>
</tr>

     </tbody>
    
   </table>

  </p>
 </div>




 <div class="refsect1 examples" id="refsect1-function.array-diff-assoc-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5220">
    <p><strong>Example #1 <span class="function"><strong>array_diff_assoc()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     In this example the <code class="literal">&quot;a&quot; =&gt; &quot;green&quot;</code>
     pair is present in both arrays and thus it is not in the output from the
     function. Unlike this, the pair <code class="literal">0 =&gt; &quot;red&quot;</code>
     is in the output because the key of <code class="literal">&quot;red&quot;</code> is
     automatically assigned to <code class="literal">0</code> in the first array,
     whereas it is assigned to <code class="literal">1</code> in the second array as the
     key <code class="literal">0</code> is already taken by <code class="literal">yellow</code>.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array1 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"b" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"brown"</span><span style="color: #007700">, </span><span style="color: #DD0000">"c" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"blue"</span><span style="color: #007700">, </span><span style="color: #DD0000">"red"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$array2 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"yellow"</span><span style="color: #007700">, </span><span style="color: #DD0000">"red"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">array_diff_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">$array1</span><span style="color: #007700">, </span><span style="color: #0000BB">$array2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [b] =&gt; brown
    [c] =&gt; blue
    [0] =&gt; red
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5221">
    <p><strong>Example #2 <span class="function"><strong>array_diff_assoc()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     Two values from <em>key =&gt; value</em> pairs are
     considered equal only if <code class="literal">(string) $elem1 === (string)
     $elem2 </code>. In other words a strict check takes place so
     the string representations must be the same.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array1 </span><span style="color: #007700">= array(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$array2 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"00"</span><span style="color: #007700">, </span><span style="color: #DD0000">"01"</span><span style="color: #007700">, </span><span style="color: #DD0000">"2"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">array_diff_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">$array1</span><span style="color: #007700">, </span><span style="color: #0000BB">$array2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; 0
    [1] =&gt; 1
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.array-diff-assoc-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    This function only checks one dimension of an n-dimensional
    array. It is possible to check deeper dimensions by using, for example,
    <code class="literal">array_diff_assoc($array1[0], $array2[0]);</code>.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Ensure arguments are passed in the correct order when comparing similar
    arrays with more keys. The new array should be the first in the list.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-diff-assoc-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-diff.php" class="function" rel="rdfs-seeAlso">array_diff()</a> - Computes the difference of arrays</span></li>
    <li><span class="function"><a href="function.array-diff-uassoc.php" class="function" rel="rdfs-seeAlso">array_diff_uassoc()</a> - Computes the difference of arrays with additional index check which is performed by a user supplied callback function</span></li>
    <li><span class="function"><a href="function.array-udiff-assoc.php" class="function" rel="rdfs-seeAlso">array_udiff_assoc()</a> - Computes the difference of arrays with additional index check, compares data by a callback function</span></li>
    <li><span class="function"><a href="function.array-udiff-uassoc.php" class="function" rel="rdfs-seeAlso">array_udiff_uassoc()</a> - Computes the difference of arrays with additional index check, compares data and indexes by a callback function</span></li>
    <li><span class="function"><a href="function.array-intersect.php" class="function" rel="rdfs-seeAlso">array_intersect()</a> - Computes the intersection of arrays</span></li>
    <li><span class="function"><a href="function.array-intersect-assoc.php" class="function" rel="rdfs-seeAlso">array_intersect_assoc()</a> - Computes the intersection of arrays with additional index check</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-diff-assoc.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-diff-assoc%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-diff-assoc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-diff-assoc.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">21 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111675">  <div class="votes">
    <div id="Vu111675">
    <a href="/manual/vote-note.php?id=111675&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111675">
    <a href="/manual/vote-note.php?id=111675&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111675" title="77% like this...">
    64
    </div>
  </div>
  <a href="#111675" class="name">
  <strong class="user"><em>Giosh</em></strong></a><a class="genanchor" href="#111675"> &para;</a><div class="date" title="2013-03-15 11:15"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111675">
<div class="phpcode"><code><span class="html">The array_diff_assoc_array from "chinello at gmail dot com" (and others) will not work for arrays with null values. That's because !isset is true when an array key doesn't exists or is set to null.<br /><br />(sorry for the changed indent-style)<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_diff_assoc_recursive</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">) {<br />    </span><span class="default">$difference</span><span class="keyword">=array();<br />    foreach(</span><span class="default">$array1 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        if( </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ) {<br />            if( !isset(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) || !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) ) {<br />                </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$new_diff </span><span class="keyword">= </span><span class="default">array_diff_assoc_recursive</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />                if( !empty(</span><span class="default">$new_diff</span><span class="keyword">) )<br />                    </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$new_diff</span><span class="keyword">;<br />            }<br />        } else if( !</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$array2</span><span class="keyword">) || </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] !== </span><span class="default">$value </span><span class="keyword">) {<br />            </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">$difference</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />And here an example (note index 'b' in the output):<br /><span class="default">&lt;?php<br />$a1</span><span class="keyword">=array( </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">, </span><span class="string">'c' </span><span class="keyword">=&gt; array( </span><span class="string">'d' </span><span class="keyword">=&gt; </span><span class="default">null </span><span class="keyword">) );<br /></span><span class="default">$a2</span><span class="keyword">=array( </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">null </span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">array_diff_assoc_recursive</span><span class="keyword">( </span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$a2 </span><span class="keyword">) );<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">chinello_array_diff_assoc_recursive</span><span class="keyword">( </span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$a2 </span><span class="keyword">) );<br /></span><span class="default">?&gt;<br /></span>array(1) {<br />  ["c"]=&gt;<br />  array(1) {<br />    ["d"]=&gt;<br />    NULL<br />  }<br />}<br /><br />array(2) {<br />  ["b"]=&gt;<br />  NULL<br />  ["c"]=&gt;<br />  array(1) {<br />    ["d"]=&gt;<br />    NULL<br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="114297">  <div class="votes">
    <div id="Vu114297">
    <a href="/manual/vote-note.php?id=114297&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114297">
    <a href="/manual/vote-note.php?id=114297&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114297" title="77% like this...">
    5
    </div>
  </div>
  <a href="#114297" class="name">
  <strong class="user"><em>telefoontoestel at hotmail dot com</em></strong></a><a class="genanchor" href="#114297"> &para;</a><div class="date" title="2014-02-04 09:11"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114297">
<div class="phpcode"><code><span class="html">an earlier post for recursive array_diff_assoc failed because isset returned false on an array element containing a null value. I updated the code so it compares null values too.<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">array_diff_assoc_recursive</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">) <br />{ <br />    foreach(</span><span class="default">$array1 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) <br />    { <br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) <br />        { <br />              if(!isset(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) <br />              { <br />                  </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">; <br />              } <br />              elseif(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) <br />              { <br />                  </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">; <br />              } <br />              else <br />              { <br />                  </span><span class="default">$new_diff </span><span class="keyword">= </span><span class="default">array_diff_assoc_recursive</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]); <br />                  if(</span><span class="default">$new_diff </span><span class="keyword">!= </span><span class="default">FALSE</span><span class="keyword">) <br />                  { <br />                        </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$new_diff</span><span class="keyword">; <br />                  } <br />              } <br />          } <br />          elseif(!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">) || </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] != </span><span class="default">$value</span><span class="keyword">) <br />          { <br />              </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">; <br />          } <br />    } <br />    return !isset(</span><span class="default">$difference</span><span class="keyword">) ? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">$difference</span><span class="keyword">; <br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112105">  <div class="votes">
    <div id="Vu112105">
    <a href="/manual/vote-note.php?id=112105&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112105">
    <a href="/manual/vote-note.php?id=112105&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112105" title="68% like this...">
    18
    </div>
  </div>
  <a href="#112105" class="name">
  <strong class="user"><em>Michael Richey</em></strong></a><a class="genanchor" href="#112105"> &para;</a><div class="date" title="2013-05-04 01:43"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112105">
<div class="phpcode"><code><span class="html">If you're looking for a true array_diff_assoc, comparing arrays to determine the difference between two, finding missing values from both, you can use this along with array_merge.<br /><br />$a = array('a'=&gt;1,'b'=&gt;2,'c'=&gt;3);<br />$b = array('a'=&gt;1,'b'=&gt;2,'d'=&gt;4);<br />print_r(array_diff_assoc($a,$b));<br />// returns:<br />array<br />(<br />    [c] =&gt; 3<br />)<br /><br />print_r(array_diff_assoc($b,$a));<br />// returns <br />array<br />(<br />    [d] =&gt; 4<br />)<br /><br />print_r(array_merge(array_diff_assoc($a,$b),array_diff_assoc($b,$a)));<br />// returns<br />array<br />(<br />    [c] =&gt; 3<br />    [d] =&gt; 4<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="74428">  <div class="votes">
    <div id="Vu74428">
    <a href="/manual/vote-note.php?id=74428&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74428">
    <a href="/manual/vote-note.php?id=74428&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74428" title="71% like this...">
    12
    </div>
  </div>
  <a href="#74428" class="name">
  <strong class="user"><em>contact at pascalopitz dot com</em></strong></a><a class="genanchor" href="#74428"> &para;</a><div class="date" title="2007-04-11 04:14"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74428">
<div class="phpcode"><code><span class="html">The direction of the arguments does actually make a difference:
<br />
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= array(
<br />    </span><span class="string">'x' </span><span class="keyword">=&gt; </span><span class="string">'x'</span><span class="keyword">,
<br />    </span><span class="string">'y' </span><span class="keyword">=&gt; </span><span class="string">'y'</span><span class="keyword">,
<br />    </span><span class="string">'z' </span><span class="keyword">=&gt; </span><span class="string">'z'</span><span class="keyword">,
<br />    </span><span class="string">'t' </span><span class="keyword">=&gt; </span><span class="string">'t'</span><span class="keyword">,
<br />);
<br />
<br /></span><span class="default">$b </span><span class="keyword">= array(
<br />    </span><span class="string">'x' </span><span class="keyword">=&gt; </span><span class="string">'x'</span><span class="keyword">,
<br />    </span><span class="string">'y' </span><span class="keyword">=&gt; </span><span class="string">'y'</span><span class="keyword">,
<br />    </span><span class="string">'z' </span><span class="keyword">=&gt; </span><span class="string">'z'</span><span class="keyword">,
<br />    </span><span class="string">'t' </span><span class="keyword">=&gt; </span><span class="string">'t'</span><span class="keyword">,
<br />    </span><span class="string">'g' </span><span class="keyword">=&gt; </span><span class="string">'g'</span><span class="keyword">,
<br />);
<br />
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_diff_assoc</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">));
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_diff_assoc</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />echoes:
<br />
<br />Array
<br />(
<br />)
<br />Array
<br />(
<br />    [g] =&gt; g
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="73972">  <div class="votes">
    <div id="Vu73972">
    <a href="/manual/vote-note.php?id=73972&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73972">
    <a href="/manual/vote-note.php?id=73972&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73972" title="68% like this...">
    11
    </div>
  </div>
  <a href="#73972" class="name">
  <strong class="user"><em>chinello at gmail dot com</em></strong></a><a class="genanchor" href="#73972"> &para;</a><div class="date" title="2007-03-18 10:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73972">
<div class="phpcode"><code><span class="html">The following will recursively do an array_diff_assoc, which will calculate differences on a multi-dimensional level.  This not display any notices if a key don't exist and if error_reporting is set to E_ALL:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array_diff_assoc_recursive</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">)
<br />{
<br />    foreach(</span><span class="default">$array1 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)
<br />    {
<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))
<br />        {
<br />              if(!isset(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))
<br />              {
<br />                  </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />              }
<br />              elseif(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))
<br />              {
<br />                  </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />              }
<br />              else
<br />              {
<br />                  </span><span class="default">$new_diff </span><span class="keyword">= </span><span class="default">array_diff_assoc_recursive</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);
<br />                  if(</span><span class="default">$new_diff </span><span class="keyword">!= </span><span class="default">FALSE</span><span class="keyword">)
<br />                  {
<br />                        </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$new_diff</span><span class="keyword">;
<br />                  }
<br />              }
<br />          }
<br />          elseif(!isset(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) || </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] != </span><span class="default">$value</span><span class="keyword">)
<br />          {
<br />              </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />          }
<br />    }
<br />    return !isset(</span><span class="default">$difference</span><span class="keyword">) ? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">$difference</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />[NOTE BY danbrown AT php DOT net: This is a combination of efforts from previous notes deleted.  Contributors included (Michael Johnson), (jochem AT iamjochem DAWT com), (sc1n AT yahoo DOT com), and (anders DOT carlsson AT mds DOT mdh DOT se).]</span></code></div>
  </div>
 </div>
  <div class="note" id="114839">  <div class="votes">
    <div id="Vu114839">
    <a href="/manual/vote-note.php?id=114839&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114839">
    <a href="/manual/vote-note.php?id=114839&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114839" title="69% like this...">
    5
    </div>
  </div>
  <a href="#114839" class="name">
  <strong class="user"><em>dev5er6 at gmail dot com</em></strong></a><a class="genanchor" href="#114839"> &para;</a><div class="date" title="2014-04-13 04:01"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114839">
<div class="phpcode"><code><span class="html">Works more like the original function:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_diff_assoc_recursive </span><span class="keyword">( )<br />{<br />    </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args </span><span class="keyword">( );<br />    </span><span class="default">$diff </span><span class="keyword">= array ( );<br />    foreach ( </span><span class="default">array_shift </span><span class="keyword">( </span><span class="default">$args </span><span class="keyword">) as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val </span><span class="keyword">)<br />    {<br />        for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$tmp </span><span class="keyword">= array ( </span><span class="default">$val </span><span class="keyword">) , </span><span class="default">$count </span><span class="keyword">= </span><span class="default">count </span><span class="keyword">( </span><span class="default">$args </span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ )<br />            if ( </span><span class="default">is_array </span><span class="keyword">( </span><span class="default">$val </span><span class="keyword">) )<br />                if ( !isset ( </span><span class="default">$args</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] ) || !</span><span class="default">is_array </span><span class="keyword">( </span><span class="default">$args</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] ) || empty( </span><span class="default">$args</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] ) )<br />                    </span><span class="default">$j</span><span class="keyword">++;<br />                else<br />                    </span><span class="default">$tmp</span><span class="keyword">[] = </span><span class="default">$args</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">];<br />            elseif ( ! </span><span class="default">array_key_exists </span><span class="keyword">( </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] ) || </span><span class="default">$args</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] !== </span><span class="default">$val </span><span class="keyword">)<br />                </span><span class="default">$j</span><span class="keyword">++;<br />        if ( </span><span class="default">is_array </span><span class="keyword">( </span><span class="default">$val </span><span class="keyword">) )<br />        {<br />            </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">call_user_func_array </span><span class="keyword">( </span><span class="default">__FUNCTION__</span><span class="keyword">, </span><span class="default">$tmp </span><span class="keyword">);<br />            if ( ! empty ( </span><span class="default">$tmp </span><span class="keyword">) ) </span><span class="default">$diff</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$tmp</span><span class="keyword">;<br />            elseif ( </span><span class="default">$j </span><span class="keyword">== </span><span class="default">$count </span><span class="keyword">) </span><span class="default">$diff</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;<br />        }<br />        elseif ( </span><span class="default">$j </span><span class="keyword">== </span><span class="default">$count </span><span class="keyword">&amp;&amp; </span><span class="default">$count </span><span class="keyword">) </span><span class="default">$diff</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">$diff</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="48924">  <div class="votes">
    <div id="Vu48924">
    <a href="/manual/vote-note.php?id=48924&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48924">
    <a href="/manual/vote-note.php?id=48924&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48924" title="68% like this...">
    6
    </div>
  </div>
  <a href="#48924" class="name">
  <strong class="user"><em>benjamin at moonfactory dot co dot jp</em></strong></a><a class="genanchor" href="#48924"> &para;</a><div class="date" title="2005-01-11 09:56"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48924">
<div class="phpcode"><code><span class="html">Hi all,
<br />For php versions &lt; 4.3...
<br />
<br /><span class="default">&lt;?php 
<br /></span><span class="comment">/**
<br /> * array_diff_assoc for version &lt; 4.3
<br /> **/
<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'array_diff_assoc'</span><span class="keyword">))
<br />{
<br />    function </span><span class="default">array_diff_assoc</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">, </span><span class="default">$a2</span><span class="keyword">)
<br />    {
<br />        foreach(</span><span class="default">$a1 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)
<br />        {
<br />            if(isset(</span><span class="default">$a2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))
<br />            {
<br />                if((string) </span><span class="default">$value </span><span class="keyword">!== (string) </span><span class="default">$a2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])
<br />                {
<br />                     </span><span class="default">$r</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />                }
<br />            }else
<br />            {
<br />                </span><span class="default">$r</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />            }
<br />        }
<br />        return </span><span class="default">$r </span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121745">  <div class="votes">
    <div id="Vu121745">
    <a href="/manual/vote-note.php?id=121745&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121745">
    <a href="/manual/vote-note.php?id=121745&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121745" title="66% like this...">
    4
    </div>
  </div>
  <a href="#121745" class="name">
  <strong class="user"><em>tero dot lahtinen at iki dot fi</em></strong></a><a class="genanchor" href="#121745"> &para;</a><div class="date" title="2017-10-10 03:23"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121745">
<div class="phpcode"><code><span class="html">array_diff_assoc will fail, if a value is something that can not be converted to a string.</span></code></div>
  </div>
 </div>
  <div class="note" id="66837">  <div class="votes">
    <div id="Vu66837">
    <a href="/manual/vote-note.php?id=66837&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66837">
    <a href="/manual/vote-note.php?id=66837&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66837" title="63% like this...">
    6
    </div>
  </div>
  <a href="#66837" class="name">
  <strong class="user"><em>Alexander Podgorny</em></strong></a><a class="genanchor" href="#66837"> &para;</a><div class="date" title="2006-05-30 02:30"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66837">
<div class="phpcode"><code><span class="html">NOTE: the diff_array also removes all the duplicate values that match to the values in the second array:
<br />
<br /><span class="default">&lt;?php
<br />    $array1 </span><span class="keyword">= array(</span><span class="string">"a"</span><span class="keyword">,</span><span class="string">"b"</span><span class="keyword">,</span><span class="string">"c"</span><span class="keyword">,</span><span class="string">"a"</span><span class="keyword">,</span><span class="string">"a"</span><span class="keyword">);
<br />    </span><span class="default">$array2 </span><span class="keyword">= array(</span><span class="string">"a"</span><span class="keyword">);
<br />
<br />    </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">,</span><span class="default">$array2</span><span class="keyword">);
<br />
<br />    </span><span class="comment">// yields: array("b","c") the duplicate "a" values are removed 
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="31926">  <div class="votes">
    <div id="Vu31926">
    <a href="/manual/vote-note.php?id=31926&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31926">
    <a href="/manual/vote-note.php?id=31926&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31926" title="60% like this...">
    3
    </div>
  </div>
  <a href="#31926" class="name">
  <strong class="user"><em>carl at thep dot lu dot se</em></strong></a><a class="genanchor" href="#31926"> &para;</a><div class="date" title="2003-05-09 02:55"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31926">
<div class="phpcode"><code><span class="html">To unset elements in an array if you know the keys but not the values, you can do:
<br />
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= array(</span><span class="string">"foo"</span><span class="keyword">, </span><span class="string">"bar"</span><span class="keyword">, </span><span class="string">"baz"</span><span class="keyword">, </span><span class="string">"quux"</span><span class="keyword">);
<br /></span><span class="default">$b </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">); </span><span class="comment">// Elements to get rid of
<br />
<br /></span><span class="keyword">foreach(</span><span class="default">$b </span><span class="keyword">as </span><span class="default">$e</span><span class="keyword">)
<br />  unset(</span><span class="default">$a</span><span class="keyword">[</span><span class="default">$e</span><span class="keyword">]);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Of course this makes most sense if $b has many elements or is dynamically generated.</span></code></div>
  </div>
 </div>
  <div class="note" id="104860">  <div class="votes">
    <div id="Vu104860">
    <a href="/manual/vote-note.php?id=104860&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104860">
    <a href="/manual/vote-note.php?id=104860&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104860" title="57% like this...">
    1
    </div>
  </div>
  <a href="#104860" class="name">
  <strong class="user"><em>news_yodpeirs at thoftware dot de</em></strong></a><a class="genanchor" href="#104860"> &para;</a><div class="date" title="2011-07-12 04:25"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104860">
<div class="phpcode"><code><span class="html">A quite simple (yet not very efficient) way to compare the first level of arrays which have values that are not strings:<br />array_map('unserialize',array_diff_assoc(array_map('serialize',$arr1),array_map('serialize',$arr2)))<br />Might be useful for debugging (that's what I use it for).</span></code></div>
  </div>
 </div>
  <div class="note" id="86607">  <div class="votes">
    <div id="Vu86607">
    <a href="/manual/vote-note.php?id=86607&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86607">
    <a href="/manual/vote-note.php?id=86607&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86607" title="57% like this...">
    1
    </div>
  </div>
  <a href="#86607" class="name">
  <strong class="user"><em>jrajpu10 at gmail dot com</em></strong></a><a class="genanchor" href="#86607"> &para;</a><div class="date" title="2008-10-25 12:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86607">
<div class="phpcode"><code><span class="html">array_diff_assoc can also be used to find the duplicates in an array
<br />
<br /><span class="default">&lt;?php
<br />$arr </span><span class="keyword">= array(</span><span class="string">'1'</span><span class="keyword">,</span><span class="string">'2'</span><span class="keyword">,</span><span class="string">'3'</span><span class="keyword">,</span><span class="string">'4'</span><span class="keyword">,</span><span class="string">'3'</span><span class="keyword">,</span><span class="string">'2'</span><span class="keyword">,</span><span class="string">'5'</span><span class="keyword">);
<br /></span><span class="default">$uniques </span><span class="keyword">= </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);
<br /></span><span class="comment">// array_diff will not work here, array_diff_assoc works as it takes the key // in account.
<br /></span><span class="default">$dups </span><span class="keyword">= </span><span class="default">array_diff_assoc</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$uniques</span><span class="keyword">);
<br />
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$dups</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note: The index of the $dups is not in strict sequential order as expected by C programmer.</span></code></div>
  </div>
 </div>
  <div class="note" id="75269">  <div class="votes">
    <div id="Vu75269">
    <a href="/manual/vote-note.php?id=75269&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75269">
    <a href="/manual/vote-note.php?id=75269&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75269" title="56% like this...">
    2
    </div>
  </div>
  <a href="#75269" class="name">
  <strong class="user"><em>cedric at daneel dot net</em></strong></a><a class="genanchor" href="#75269"> &para;</a><div class="date" title="2007-05-21 06:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75269">
<div class="phpcode"><code><span class="html">To diff between n-dimensional array, juste use this : 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array_diff_values</span><span class="keyword">(</span><span class="default">$tab1</span><span class="keyword">, </span><span class="default">$tab2</span><span class="keyword">)
<br />    {
<br />    </span><span class="default">$result </span><span class="keyword">= array();
<br />    foreach(</span><span class="default">$tab1 </span><span class="keyword">as </span><span class="default">$values</span><span class="keyword">) if(! </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">, </span><span class="default">$tab2</span><span class="keyword">)) </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$values</span><span class="keyword">;
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122580">  <div class="votes">
    <div id="Vu122580">
    <a href="/manual/vote-note.php?id=122580&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122580">
    <a href="/manual/vote-note.php?id=122580&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122580" title="100% like this...">
    2
    </div>
  </div>
  <a href="#122580" class="name">
  <strong class="user"><em>spark dot crz at gmail dot com</em></strong></a><a class="genanchor" href="#122580"> &para;</a><div class="date" title="2018-04-02 04:56"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122580">
<div class="phpcode"><code><span class="html">Recursive implementation accepting multiple n-level-arrays as parameters:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">recursiveDiff</span><span class="keyword">() {<br />    </span><span class="default">$arrs </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    </span><span class="default">$first </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$arrs</span><span class="keyword">);<br />    </span><span class="default">$diff </span><span class="keyword">= [];<br /><br />    foreach(</span><span class="default">$first </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$values </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(function(</span><span class="default">$arr</span><span class="keyword">) use(</span><span class="default">$key</span><span class="keyword">){<br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">) &amp;&amp; !</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">))<br />                return </span><span class="default">null</span><span class="keyword">;<br /><br />            return </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />        }, </span><span class="default">$arrs</span><span class="keyword">);<br /><br />        if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">))<br />            continue;<br /><br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />            </span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />            </span><span class="default">$diff</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">__FUNCTION__</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">);<br />            continue;<br />        }<br /><br />        </span><span class="default">$diff</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$first</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />    }<br /><br />    return </span><span class="default">$diff</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The other attempt was cleaner but didn't work for all cases.</span></code></div>
  </div>
 </div>
  <div class="note" id="125968">  <div class="votes">
    <div id="Vu125968">
    <a href="/manual/vote-note.php?id=125968&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125968">
    <a href="/manual/vote-note.php?id=125968&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125968" title="100% like this...">
    1
    </div>
  </div>
  <a href="#125968" class="name">
  <strong class="user"><em>angujomondi at gmail dot com</em></strong></a><a class="genanchor" href="#125968"> &para;</a><div class="date" title="2021-03-28 07:49"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125968">
<div class="phpcode"><code><span class="html">For recursive diff of multiple arrays, exending solution provided by Gosh.<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="keyword">function </span><span class="default">array_diff_assoc_recursive</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">, array ...</span><span class="default">$arrays</span><span class="keyword">)<br />    {<br />        </span><span class="default">$func  </span><span class="keyword">= function(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">) use (&amp;</span><span class="default">$func</span><span class="keyword">){<br />            </span><span class="default">$difference </span><span class="keyword">= [];<br />            foreach (</span><span class="default">$array1 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />                    if (!isset(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) || !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />                        </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    } else {<br />                        </span><span class="default">$new_diff </span><span class="keyword">= </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />                        if (!empty(</span><span class="default">$new_diff</span><span class="keyword">)) {<br />                            </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$new_diff</span><span class="keyword">;<br />                        }<br />                    }<br />                } else {<br />                    if (!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">) || </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] !== </span><span class="default">$value</span><span class="keyword">) {<br />                        </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    }<br />                }<br />            }<br />            return </span><span class="default">$difference</span><span class="keyword">;<br />        };<br />        </span><span class="default">$diffs </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">;<br />        foreach (</span><span class="default">$arrays </span><span class="keyword">as </span><span class="default">$_array</span><span class="keyword">) {<br />            </span><span class="default">$diffs </span><span class="keyword">= </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$diffs</span><span class="keyword">, </span><span class="default">$_array</span><span class="keyword">);<br />        }<br />        return </span><span class="default">$diffs</span><span class="keyword">;<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129262">  <div class="votes">
    <div id="Vu129262">
    <a href="/manual/vote-note.php?id=129262&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129262">
    <a href="/manual/vote-note.php?id=129262&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129262" title="no votes...">
    0
    </div>
  </div>
  <a href="#129262" class="name">
  <strong class="user"><em>Henry</em></strong></a><a class="genanchor" href="#129262"> &para;</a><div class="date" title="2024-02-20 10:17"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129262">
<div class="phpcode"><code><span class="html">function array_diff_assoc_recursive($array1, $array2)<br />    {<br />        $array1Array = [];<br /><br />        foreach ($array1 as $key =&gt; $value) {<br />            if (!is_array($value)) {<br />                continue;<br />            }<br />            $array1Array[$key] = $value;<br />            unset($array1[$key]);<br />        }<br /><br />        $array2Array = [];<br /><br />        foreach ($array2 as $key =&gt; $value) {<br />            if (!is_array($value)) {<br />                continue;<br />            }<br />            $array2Array[$key] = $value;<br />            unset($array2[$key]);<br />        }<br /><br />        $diff = is_int(array_key_first($array1)) ? array_values(array_diff($array1, $array2)) : array_diff_assoc($array1, $array2);<br /><br />        foreach ($array1Array as $key =&gt; $value) {<br />            if (isset($array2Array[$key])) {<br />                $subDiff = array_diff_assoc_recursive($value, $array2Array[$key]);<br />                if (count($subDiff) !== 0) {<br />                    $diff = array_merge($diff, is_int($key) ? [$subDiff] : [$key =&gt; $subDiff]);<br />                }<br />            } else {<br />                $diff = array_merge($diff, is_int($key) ? [$value] : [$key =&gt; $value]);<br />            }<br />        }<br /><br />        return $diff;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="127005">  <div class="votes">
    <div id="Vu127005">
    <a href="/manual/vote-note.php?id=127005&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127005">
    <a href="/manual/vote-note.php?id=127005&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127005" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127005" class="name">
  <strong class="user"><em>folurinyinka at gmail dot com</em></strong></a><a class="genanchor" href="#127005"> &para;</a><div class="date" title="2022-04-23 08:38"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127005">
<div class="phpcode"><code><span class="html">Recursive implementation accepting multiple n-level-arrays as parameters:<br /><br />```php<br />function recursiveDiff(...$arrays)<br />{<br />    $first = array_shift($arrays);<br />    $diff = [];<br /><br />    foreach ($first as $key =&gt; $value) {<br />        $values = array_map(function ($arr) use ($key) {<br />            if (is_array($arr) &amp;&amp; !array_key_exists($key, $arr)) {<br />                return null;<br />            }<br /><br />            return isset($arr[$key]) ? $arr[$key] : null;<br />        }, $arrs);<br /><br />        if (in_array($value, $values)) {<br />            continue;<br />        }<br /><br />        if (is_array($value)) {<br />            array_unshift($values, $value);<br />            $diff[$key] = call_user_func_array(__FUNCTION__, $values);<br />            continue;<br />        }<br /><br />        $diff[$key] = $first[$key];<br />    }<br /><br />    return $diff;<br />}<br />```</span></code></div>
  </div>
 </div>
  <div class="note" id="127305">  <div class="votes">
    <div id="Vu127305">
    <a href="/manual/vote-note.php?id=127305&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127305">
    <a href="/manual/vote-note.php?id=127305&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127305" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#127305" class="name">
  <strong class="user"><em>nekto</em></strong></a><a class="genanchor" href="#127305"> &para;</a><div class="date" title="2022-07-19 01:53"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127305">
<div class="phpcode"><code><span class="html">PHP associative keys are case-sensitive, key "a" is different from key "A":<br /><br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= [</span><span class="string">"A" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">];<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="string">"a"</span><span class="keyword">]);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="string">"A"</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span><br />produces:<br />NULL<br />int(666)<br /><br />And in the same way, array_diff_assoc treats keys case-sensitively, and key "A" is not equal to key "a" and will be diffed:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// in arrays below value of "a" and "A" are the same, but keys are different<br />// values of "b" are different<br />// values of "c" are the same<br /></span><span class="default">$compareWhat </span><span class="keyword">= [</span><span class="string">"a" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">, </span><span class="string">"b" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">, </span><span class="string">"c" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">, ];<br /></span><span class="default">$compareWith </span><span class="keyword">= [</span><span class="string">"A" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">, </span><span class="string">"b" </span><span class="keyword">=&gt; </span><span class="default">667</span><span class="keyword">, </span><span class="string">"c" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">, ];<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_diff_assoc</span><span class="keyword">(</span><span class="default">$compareWhat</span><span class="keyword">, </span><span class="default">$compareWith</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />produces:<br />array(2) {<br />["a"]=&gt; int(666)<br />["b"]=&gt; int(666)<br />}<br /><br />And if the order of values in array is different, the order of the result will be different, although essentially the result stays the same:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// the same as above, but "b" comes before "a" in $compareWhat <br /></span><span class="default">$compareWhat </span><span class="keyword">= [</span><span class="string">"b" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">, </span><span class="string">"a" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">, </span><span class="string">"c" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">, ];<br /></span><span class="default">$compareWith </span><span class="keyword">= [</span><span class="string">"A" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">, </span><span class="string">"b" </span><span class="keyword">=&gt; </span><span class="default">667</span><span class="keyword">, </span><span class="string">"c" </span><span class="keyword">=&gt; </span><span class="default">666</span><span class="keyword">, ];<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_diff_assoc</span><span class="keyword">(</span><span class="default">$compareWhat</span><span class="keyword">, </span><span class="default">$compareWith</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />produces:<br />array(2) {<br />["b"]=&gt; int(666)<br />["a"]=&gt; int(666)<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="115196">  <div class="votes">
    <div id="Vu115196">
    <a href="/manual/vote-note.php?id=115196&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115196">
    <a href="/manual/vote-note.php?id=115196&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115196" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115196" class="name">
  <strong class="user"><em>shadow_games at abv dot bg</em></strong></a><a class="genanchor" href="#115196"> &para;</a><div class="date" title="2014-06-11 03:45"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115196">
<div class="phpcode"><code><span class="html">there is a functiont that i searched long enough now i have created it so someone else to find it if he need it ;]<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">compare_two_object_recursive</span><span class="keyword">(</span><span class="default">$object_1</span><span class="keyword">, </span><span class="default">$object_2</span><span class="keyword">, </span><span class="default">$object_1_Identifier </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$object_2_Identifier </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">){<br />        </span><span class="default">$object1 </span><span class="keyword">= (array)</span><span class="default">$object_1</span><span class="keyword">;<br />        </span><span class="default">$object2 </span><span class="keyword">= (array)</span><span class="default">$object_2</span><span class="keyword">;<br />        </span><span class="default">$object3 </span><span class="keyword">= array();<br /><br />        </span><span class="default">$o1i </span><span class="keyword">= </span><span class="default">$object_1_Identifier </span><span class="keyword">? </span><span class="default">$object_1_Identifier </span><span class="keyword">: </span><span class="default">1</span><span class="keyword">;<br />        </span><span class="default">$o2i </span><span class="keyword">= </span><span class="default">$object_2_Identifier </span><span class="keyword">? </span><span class="default">$object_2_Identifier </span><span class="keyword">: </span><span class="default">2</span><span class="keyword">;<br /><br />        foreach(</span><span class="default">$object1 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){<br />            if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$object1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])){<br />                </span><span class="default">$object1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = (array)</span><span class="default">$object1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />                </span><span class="default">$object2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = (array)</span><span class="default">$object2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />                </span><span class="default">$object3</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = (object)</span><span class="default">compare_two_object_recursive</span><span class="keyword">(</span><span class="default">$object1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$object2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$o1i</span><span class="keyword">, </span><span class="default">$o2i</span><span class="keyword">);<br />            }elseif(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$object1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])){<br />                </span><span class="default">$object3</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">compare_two_object_recursive</span><span class="keyword">(</span><span class="default">$object1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$object2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$o1i</span><span class="keyword">, </span><span class="default">$o2i</span><span class="keyword">);<br />            }else{<br />                if(</span><span class="default">$object1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] == </span><span class="default">$object2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]){<br />                    </span><span class="default">$object3</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'comparison_status'</span><span class="keyword">] = </span><span class="string">"SAME"</span><span class="keyword">;<br />                }else{<br />                    </span><span class="default">$object3</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'comparison_status'</span><span class="keyword">] = </span><span class="string">"NOT THE SAME"</span><span class="keyword">;<br />                    </span><span class="default">$object3</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">$o1i</span><span class="keyword">] = </span><span class="default">$object1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />                    </span><span class="default">$object3</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">$o2i</span><span class="keyword">] = </span><span class="default">$object2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />                }<br />            }<br />        }<br />        return </span><span class="default">$object3</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115634">  <div class="votes">
    <div id="Vu115634">
    <a href="/manual/vote-note.php?id=115634&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115634">
    <a href="/manual/vote-note.php?id=115634&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115634" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#115634" class="name">
  <strong class="user"><em>francois-php at ceonizme dot fr</em></strong></a><a class="genanchor" href="#115634"> &para;</a><div class="date" title="2014-08-28 06:27"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115634">
<div class="phpcode"><code><span class="html">to chinello at gmail dot com<br />I've had to use your function but it showed that the use of isset can't differentiate the NULL values from not setted values.<br /><br />Here's a version that takes care of this subtility.<br /> <br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_diff_assoc_recursive</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">)<br />{<br />    </span><span class="default">$difference </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />    foreach(</span><span class="default">$array1 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />        {<br />            if(!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">))<br />            {<br />                </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />            elseif(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))<br />            {<br />                </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />            else<br />            {<br />                </span><span class="default">$new_diff </span><span class="keyword">= </span><span class="default">array_diff_assoc_recursive</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />                if(</span><span class="default">$new_diff </span><span class="keyword">!= </span><span class="default">FALSE</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$new_diff</span><span class="keyword">;<br />                }<br />            }<br />        }<br />        elseif(!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">) || </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] != </span><span class="default">$value</span><span class="keyword">)<br />        {<br />            </span><span class="default">$difference</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br />    }<br />    return !isset(</span><span class="default">$difference</span><span class="keyword">) ? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">$difference</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Hope that helps<br />François</span></code></div>
  </div>
 </div>
  <div class="note" id="122579">  <div class="votes">
    <div id="Vu122579">
    <a href="/manual/vote-note.php?id=122579&amp;page=function.array-diff-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122579">
    <a href="/manual/vote-note.php?id=122579&amp;page=function.array-diff-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122579" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#122579" class="name">
  <strong class="user"><em>spark dot crz at gmail dot com</em></strong></a><a class="genanchor" href="#122579"> &para;</a><div class="date" title="2018-04-02 03:29"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122579">
<div class="phpcode"><code><span class="html">Yet another recursive implementation, without if-else hell and with multiple parameters just like the original.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">recursiveDiff</span><span class="keyword">() {<br />    </span><span class="default">$arrs </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="string">'array_diff_assoc'</span><span class="keyword">, </span><span class="default">$arrs</span><span class="keyword">);<br /><br />    foreach(</span><span class="default">$diff </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />            continue;<br /><br />        </span><span class="default">$children </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(function(</span><span class="default">$arr</span><span class="keyword">) use(</span><span class="default">$key</span><span class="keyword">){<br />            return </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />        }, </span><span class="default">$arrs</span><span class="keyword">);<br /><br />        </span><span class="default">$diff</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">__FUNCTION__</span><span class="keyword">, </span><span class="default">$children</span><span class="keyword">);<br />    }<br /><br />    return </span><span class="default">$diff</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-diff-assoc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-diff-assoc.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
