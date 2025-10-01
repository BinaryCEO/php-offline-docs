<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strncmp - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strncmp.php">
 <link rel="shorturl" href="https://www.php.net/strncmp">
 <link rel="alternate" href="https://www.php.net/strncmp" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strncasecmp.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strpbrk.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strncmp.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strncmp.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strncmp.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strncmp.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strncmp.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strncmp.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strncmp.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strncmp.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strncmp.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strncmp.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strncmp.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binary safe string comparison of the first n characters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strncmp - Manual" />
<meta name="twitter:description" content="Binary safe string comparison of the first n characters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strncmp - Manual" />
<meta itemprop="description" content="Binary safe string comparison of the first n characters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binary safe string comparison of the first n characters" />

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
        <a href="function.strpbrk.php">
          strpbrk &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strncasecmp.php">
          &laquo; strncasecmp        </a>
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
            <option value='en/function.strncmp.php' selected="selected">English</option>
            <option value='de/function.strncmp.php'>German</option>
            <option value='es/function.strncmp.php'>Spanish</option>
            <option value='fr/function.strncmp.php'>French</option>
            <option value='it/function.strncmp.php'>Italian</option>
            <option value='ja/function.strncmp.php'>Japanese</option>
            <option value='pt_BR/function.strncmp.php'>Brazilian Portuguese</option>
            <option value='ru/function.strncmp.php'>Russian</option>
            <option value='tr/function.strncmp.php'>Turkish</option>
            <option value='uk/function.strncmp.php'>Ukrainian</option>
            <option value='zh/function.strncmp.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strncmp" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strncmp</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strncmp</span> &mdash; <span class="dc-title">Binary safe string comparison of the first n characters</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.strncmp-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strncmp</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string2</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   This function is similar to <span class="function"><a href="function.strcmp.php" class="function">strcmp()</a></span>, with the
   difference that you can specify the (upper limit of the) number of
   characters from each string to be used in the comparison.
  </p>
  <p class="para">
   Note that this comparison is case sensitive.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strncmp-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string1</code></dt>
     <dd>
      <p class="para">
       The first string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">string2</code></dt>
     <dd>
      <p class="para">
       The second string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       Number of characters to use in the comparison.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.strncmp-returnvalues">
  <h3 class="title">Return Values</h3>
  
  <p class="simpara">
   Returns a value less than 0 if <code class="parameter">string1</code>
   is less than <code class="parameter">string2</code>; a value greater
   than 0 if <code class="parameter">string1</code> is greater than
   <code class="parameter">string2</code>, and <code class="literal">0</code> if they
   are equal.
   No particular meaning can be reliably inferred from the value aside
   from its sign.
  </p>

 </div>


 <div class="refsect1 changelog" id="refsect1-function.strncmp-changelog">
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
 <td>8.2.0</td>
 <td>
  This function is no longer guaranteed to return
  <code class="code">strlen($string1) - strlen($string2)</code> when string lengths
  are not equal, but may now return <code class="literal">-1</code> or
  <code class="literal">1</code> instead.
 </td>
</tr>


    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.strncmp-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5161">
    <p><strong>Example #1 <span class="function"><strong>strncmp()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$var1 </span><span style="color: #007700">= </span><span style="color: #DD0000">'Hello John'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$var2 </span><span style="color: #007700">= </span><span style="color: #DD0000">'Hello Doe'</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">strncmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$var1</span><span style="color: #007700">, </span><span style="color: #0000BB">$var2</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">) === </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'First 5 characters of $var1 and $var2 are equal in a case-sensitive string comparison'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strncmp-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.strncasecmp.php" class="function" rel="rdfs-seeAlso">strncasecmp()</a> - Binary safe case-insensitive string comparison of the first n characters</span></li>
    <li><span class="function"><a href="function.preg-match.php" class="function" rel="rdfs-seeAlso">preg_match()</a> - Perform a regular expression match</span></li>
    <li><span class="function"><a href="function.substr-compare.php" class="function" rel="rdfs-seeAlso">substr_compare()</a> - Binary safe comparison of two strings from an offset, up to length characters</span></li>
    <li><span class="function"><a href="function.strcmp.php" class="function" rel="rdfs-seeAlso">strcmp()</a> - Binary safe string comparison</span></li>
    <li><span class="function"><a href="function.strstr.php" class="function" rel="rdfs-seeAlso">strstr()</a> - Find the first occurrence of a string</span></li>
    <li><span class="function"><a href="function.substr.php" class="function" rel="rdfs-seeAlso">substr()</a> - Return part of a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/strncmp.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strncmp%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strncmp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strncmp.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119992">  <div class="votes">
    <div id="Vu119992">
    <a href="/manual/vote-note.php?id=119992&amp;page=function.strncmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119992">
    <a href="/manual/vote-note.php?id=119992&amp;page=function.strncmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119992" title="72% like this...">
    10
    </div>
  </div>
  <a href="#119992" class="name">
  <strong class="user"><em>salehrezq at gmail dot com</em></strong></a><a class="genanchor" href="#119992"> &para;</a><div class="date" title="2016-10-06 03:42"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom119992">
<div class="phpcode"><code><span class="html">A note not included in the documentation:<br /><br />int strcmp ( string $str1 , string $str2 )<br /><br />Returns &lt; 0 if str1 is less than str2; &gt; 0 if str1 is greater than str2, and 0 if they are equal.<br /><br />My addendum:<br />If str1 and str2 are not equal, and str1 is a sub-string of str2 or vise versa. The returned int value will be negative or positive indicating how many characters the difference is between the two strings in absolute terms.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br />$str1 </span><span class="keyword">= </span><span class="string">"phpaaa"</span><span class="keyword">;<br /></span><span class="default">$str2 </span><span class="keyword">= </span><span class="string">"php"</span><span class="keyword">;<br /><br />echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">); </span><span class="comment">// 3<br /></span><span class="default">?&gt;<br /></span><br />since str2 = "php" is a sub-string of str1 = "phpaaa" and "phpaaa" is greater than "php" the returned value is positive and is 3 indicating how many characters the difference is between the two strings.<br /><br />If you replace the value of str1 with str2 the result will be -3 (negative) but still indicates the absolute difference which is 3</span></code></div>
  </div>
 </div>
  <div class="note" id="80603">  <div class="votes">
    <div id="Vu80603">
    <a href="/manual/vote-note.php?id=80603&amp;page=function.strncmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80603">
    <a href="/manual/vote-note.php?id=80603&amp;page=function.strncmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80603" title="66% like this...">
    9
    </div>
  </div>
  <a href="#80603" class="name">
  <strong class="user"><em>codeguru at crazyprogrammer dot cba dot pl</em></strong></a><a class="genanchor" href="#80603"> &para;</a><div class="date" title="2008-01-24 11:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80603">
<div class="phpcode"><code><span class="html">I ran the following experiment to compare arrays.<br /><br />1 st - using (substr($key,0,5 == "HTTP_") &amp; 2 nd - using (!strncmp($key, 'HTTP_', 5))<br /><br />I wanted to work out the fastest way to get the first few characters from a array<br /><br />BENCHMARK ITERATION RESULT IS:<br />if (substr($key,0,5 == "HTTP_").... -   0,000481s<br />if (!strncmp($key, 'HTTP_', 5)).... -     0,000405s<br /><br />strncmp() is 20% faster than substr() :D<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// SAMPLE FUNCTION<br /></span><span class="keyword">function </span><span class="default">strncmp_match</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">)<br />{<br />foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)<br />    {<br />    </span><span class="comment">//if (substr($key,0,5 == "HTTP_")<br />    </span><span class="keyword">if (!</span><span class="default">strncmp</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="string">'HTTP_'</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">))    <br />        {<br />    </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;<br />        }<br />    }<br />return </span><span class="default">$out</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// EXAMPLE USE<br /></span><span class="default">?&gt;</span>&lt;pre&gt;<span class="default">&lt;?php<br />print_r</span><span class="keyword">(</span><span class="default">strncmp_match</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">));<br /></span><span class="default">?&gt;</span>&lt;/pre&gt;<br /><br />will display code like this:<br /><br />Array<br />(<br />    [HTTP_ACCEPT] =&gt; XXX<br />    [HTTP_ACCEPT_LANGUAGE] =&gt; pl<br />    [HTTP_UA_CPU] =&gt; x64<br />    [HTTP_ACCEPT_ENCODING] =&gt; gzip, deflate<br />    [HTTP_USER_AGENT] =&gt; Mozilla/4.0 <br />                                    (compatible; MSIE 7.0;<br />                                     Windows NT 5.1;<br />                                    .NET CLR 1.1.4322;<br />                                    .NET CLR 2.0.50727)<br />    [HTTP_HOST] =&gt; XXX.XXX.XXX.XXX<br />    [HTTP_CONNECTION] =&gt; Keep-Alive<br />    [HTTP_COOKIE] =&gt; __utma=XX;__utmz=XX.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="121036">  <div class="votes">
    <div id="Vu121036">
    <a href="/manual/vote-note.php?id=121036&amp;page=function.strncmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121036">
    <a href="/manual/vote-note.php?id=121036&amp;page=function.strncmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121036" title="59% like this...">
    4
    </div>
  </div>
  <a href="#121036" class="name">
  <strong class="user"><em>samy</em></strong></a><a class="genanchor" href="#121036"> &para;</a><div class="date" title="2017-05-01 01:40"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121036">
<div class="phpcode"><code><span class="html">I just want to highlight that (at least on php7), when testing for the existence of a string in the beginning of another string you should consider using substr  or strpos (if performances is an issue).<br /><br />Here is a small benchmark (for what it's worth):<br /><span class="default">&lt;?php<br />$n </span><span class="keyword">= </span><span class="string">'abcd'</span><span class="keyword">;<br /></span><span class="default">$l </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">);<br /></span><span class="default">$haystack0 </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">random_bytes</span><span class="keyword">(</span><span class="default">128</span><span class="keyword">));<br /><br /></span><span class="comment">//heat<br /></span><span class="default">$r </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">100000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    </span><span class="default">$r </span><span class="keyword">+= </span><span class="default">$r </span><span class="keyword">* </span><span class="default">$r </span><span class="keyword">% </span><span class="default">10000</span><span class="keyword">;<br /><br /></span><span class="comment">//tests<br /></span><span class="default">$k </span><span class="keyword">= </span><span class="default">30000000</span><span class="keyword">;<br /></span><span class="default">$res </span><span class="keyword">= array();<br />foreach (array(</span><span class="string">'found' </span><span class="keyword">=&gt; </span><span class="default">$n </span><span class="keyword">. </span><span class="default">$haystack0</span><span class="keyword">, </span><span class="string">'not-found' </span><span class="keyword">=&gt; </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">) . </span><span class="default">$haystack0</span><span class="keyword">) as </span><span class="default">$f </span><span class="keyword">=&gt; </span><span class="default">$haystack</span><span class="keyword">) {<br />    </span><span class="default">$m </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$k</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        !</span><span class="default">strncmp</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">, </span><span class="default">$l</span><span class="keyword">) &amp;&amp; </span><span class="default">$r</span><span class="keyword">++;<br />    </span><span class="default">$res</span><span class="keyword">[</span><span class="string">"strncmp-</span><span class="default">$f</span><span class="string">"</span><span class="keyword">] = -</span><span class="default">$m </span><span class="keyword">+ (</span><span class="default">$m </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">));<br /><br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$k</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) &amp;&amp; </span><span class="default">$r</span><span class="keyword">++;<br />    </span><span class="default">$res</span><span class="keyword">[</span><span class="string">"strpos-</span><span class="default">$f</span><span class="string">"</span><span class="keyword">] = -</span><span class="default">$m </span><span class="keyword">+ (</span><span class="default">$m </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">));<br /><br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$k</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$l</span><span class="keyword">) === </span><span class="default">$n</span><span class="keyword">) &amp;&amp; </span><span class="default">$r</span><span class="keyword">++;<br />    </span><span class="default">$res</span><span class="keyword">[</span><span class="string">"substr-</span><span class="default">$f</span><span class="string">"</span><span class="keyword">] = </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$m</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//print<br /></span><span class="default">asort</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br />echo </span><span class="string">"\n</span><span class="default">$r</span><span class="string">"</span><span class="keyword">; </span><span class="comment">// makes sure no auto-optimization occurs<br /></span><span class="default">?&gt;<br /></span><br />This outputs:<br /><span class="default">&lt;?php </span><span class="comment">/*<br />    [strpos-found]        =&gt; 1.3313138484955<br />    [substr-not-found]    =&gt; 1.4832630157471<br />    [substr-found]        =&gt; 1.6976611614227<br />    [strpos-not-found]    =&gt; 2.0043320655823<br />    [strncmp-not-found]    =&gt; 2.0969619750977<br />    [strncmp-found]        =&gt; 2.3616981506348<br />*/ </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104047">  <div class="votes">
    <div id="Vu104047">
    <a href="/manual/vote-note.php?id=104047&amp;page=function.strncmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104047">
    <a href="/manual/vote-note.php?id=104047&amp;page=function.strncmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104047" title="60% like this...">
    4
    </div>
  </div>
  <a href="#104047" class="name">
  <strong class="user"><em>bobvin at pillars dot net</em></strong></a><a class="genanchor" href="#104047"> &para;</a><div class="date" title="2011-05-19 07:25"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104047">
<div class="phpcode"><code><span class="html">For checking matches at the beginning of a short string, strpos() is about 15% faster than strncmp().
<br />
<br />Here's a benchmark program to prove it:
<br />
<br /><span class="default">&lt;?php
<br />$haystack </span><span class="keyword">= </span><span class="string">"abcdefghijklmnopqrstuvwxyz"</span><span class="keyword">;
<br /></span><span class="default">$needles </span><span class="keyword">= array(</span><span class="string">'abc'</span><span class="keyword">, </span><span class="string">'xyz'</span><span class="keyword">, </span><span class="string">'123'</span><span class="keyword">);
<br />foreach (</span><span class="default">$needles </span><span class="keyword">as </span><span class="default">$needle</span><span class="keyword">) {
<br />  </span><span class="default">$times</span><span class="keyword">[</span><span class="string">'strncmp'</span><span class="keyword">][</span><span class="default">$needle</span><span class="keyword">] = -</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">strncmp</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">;
<br />  }
<br />  </span><span class="default">$times</span><span class="keyword">[</span><span class="string">'strncmp'</span><span class="keyword">][</span><span class="default">$needle</span><span class="keyword">] += </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />}
<br />foreach (</span><span class="default">$needles </span><span class="keyword">as </span><span class="default">$needle</span><span class="keyword">) {
<br />  </span><span class="default">$times</span><span class="keyword">[</span><span class="string">'strpos'</span><span class="keyword">][</span><span class="default">$needle</span><span class="keyword">] = -</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">;
<br />  }
<br />  </span><span class="default">$times</span><span class="keyword">[</span><span class="string">'strpos'</span><span class="keyword">][</span><span class="default">$needle</span><span class="keyword">] += </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />}
<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$times</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97424">  <div class="votes">
    <div id="Vu97424">
    <a href="/manual/vote-note.php?id=97424&amp;page=function.strncmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97424">
    <a href="/manual/vote-note.php?id=97424&amp;page=function.strncmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97424" title="54% like this...">
    4
    </div>
  </div>
  <a href="#97424" class="name">
  <strong class="user"><em>elloromtz at gmail dot com</em></strong></a><a class="genanchor" href="#97424"> &para;</a><div class="date" title="2010-04-19 05:25"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97424">
<div class="phpcode"><code><span class="html">if length is 0 regardless what the two strings are, it will return 0
<br />
<br /><span class="default">&lt;?php
<br />strncmp</span><span class="keyword">(</span><span class="string">"xybc"</span><span class="keyword">,</span><span class="string">"a3234"</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">); </span><span class="comment">// 0
<br /></span><span class="default">strncmp</span><span class="keyword">(</span><span class="string">"blah123"</span><span class="keyword">,</span><span class="string">"hohoho"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); </span><span class="comment">//0
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strncmp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strncmp.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
