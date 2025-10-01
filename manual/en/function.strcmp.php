<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strcmp - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strcmp.php">
 <link rel="shorturl" href="https://www.php.net/strcmp">
 <link rel="alternate" href="https://www.php.net/strcmp" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strchr.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strcoll.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strcmp.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strcmp.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strcmp.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strcmp.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strcmp.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strcmp.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strcmp.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strcmp.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strcmp.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strcmp.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strcmp.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binary safe string comparison" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strcmp - Manual" />
<meta name="twitter:description" content="Binary safe string comparison" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strcmp - Manual" />
<meta itemprop="description" content="Binary safe string comparison" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binary safe string comparison" />

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
        <a href="function.strcoll.php">
          strcoll &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strchr.php">
          &laquo; strchr        </a>
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
            <option value='en/function.strcmp.php' selected="selected">English</option>
            <option value='de/function.strcmp.php'>German</option>
            <option value='es/function.strcmp.php'>Spanish</option>
            <option value='fr/function.strcmp.php'>French</option>
            <option value='it/function.strcmp.php'>Italian</option>
            <option value='ja/function.strcmp.php'>Japanese</option>
            <option value='pt_BR/function.strcmp.php'>Brazilian Portuguese</option>
            <option value='ru/function.strcmp.php'>Russian</option>
            <option value='tr/function.strcmp.php'>Turkish</option>
            <option value='uk/function.strcmp.php'>Ukrainian</option>
            <option value='zh/function.strcmp.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strcmp" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strcmp</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strcmp</span> &mdash; <span class="dc-title">Binary safe string comparison</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.strcmp-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strcmp</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string2</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="simpara">
   Note that this comparison is case sensitive.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strcmp-parameters">
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
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.strcmp-returnvalues">
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


 <div class="refsect1 changelog" id="refsect1-function.strcmp-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.strcmp-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5148">
    <p><strong>Example #1 <span class="function"><strong>strcmp()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$var1 </span><span style="color: #007700">= </span><span style="color: #DD0000">"Hello"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$var2 </span><span style="color: #007700">= </span><span style="color: #DD0000">"hello"</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$var1</span><span style="color: #007700">, </span><span style="color: #0000BB">$var2</span><span style="color: #007700">) !== </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'$var1 is not equal to $var2 in a case sensitive string comparison'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>   
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.strcmp-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.strcasecmp.php" class="function" rel="rdfs-seeAlso">strcasecmp()</a> - Binary safe case-insensitive string comparison</span></li>
    <li><span class="function"><a href="function.preg-match.php" class="function" rel="rdfs-seeAlso">preg_match()</a> - Perform a regular expression match</span></li>
    <li><span class="function"><a href="function.substr-compare.php" class="function" rel="rdfs-seeAlso">substr_compare()</a> - Binary safe comparison of two strings from an offset, up to length characters</span></li>
    <li><span class="function"><a href="function.strncmp.php" class="function" rel="rdfs-seeAlso">strncmp()</a> - Binary safe string comparison of the first n characters</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/strcmp.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strcmp%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strcmp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strcmp.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108563">  <div class="votes">
    <div id="Vu108563">
    <a href="/manual/vote-note.php?id=108563&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108563">
    <a href="/manual/vote-note.php?id=108563&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108563" title="72% like this...">
    118
    </div>
  </div>
  <a href="#108563" class="name">
  <strong class="user"><em>jendoj at gmail dot com</em></strong></a><a class="genanchor" href="#108563"> &para;</a><div class="date" title="2012-05-07 11:00"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108563">
<div class="phpcode"><code><span class="html">If you rely on strcmp for safe string comparisons, both parameters must be strings, the result is otherwise extremely unpredictable.<br />For instance you may get an unexpected 0, or return values of NULL, -2, 2, 3 and -3.<br /><br />strcmp("5", 5) =&gt; 0<br />strcmp("15", 0xf) =&gt; 0<br />strcmp(61529519452809720693702583126814, 61529519452809720000000000000000) =&gt; 0<br />strcmp(NULL, false) =&gt; 0<br />strcmp(NULL, "") =&gt; 0<br />strcmp(NULL, 0) =&gt; -1<br />strcmp(false, -1) =&gt; -2<br />strcmp("15", NULL) =&gt; 2<br />strcmp(NULL, "foo") =&gt; -3<br />strcmp("foo", NULL) =&gt; 3<br />strcmp("foo", false) =&gt; 3<br />strcmp("foo", 0) =&gt; 1<br />strcmp("foo", 5) =&gt; 1<br />strcmp("foo", array()) =&gt; NULL + PHP Warning<br />strcmp("foo", new stdClass) =&gt; NULL + PHP Warning<br />strcmp(function(){}, "") =&gt; NULL + PHP Warning</span></code></div>
  </div>
 </div>
  <div class="note" id="110975">  <div class="votes">
    <div id="Vu110975">
    <a href="/manual/vote-note.php?id=110975&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110975">
    <a href="/manual/vote-note.php?id=110975&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110975" title="69% like this...">
    60
    </div>
  </div>
  <a href="#110975" class="name">
  <strong class="user"><em>lehal2 at hotmail dot com</em></strong></a><a class="genanchor" href="#110975"> &para;</a><div class="date" title="2013-01-01 11:32"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110975">
<div class="phpcode"><code><span class="html">i hope this will give you a clear idea how strcmp works internally.
<br />
<br /><span class="default">&lt;?php
<br />$str1 </span><span class="keyword">= </span><span class="string">"b"</span><span class="keyword">;
<br />echo </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">); </span><span class="comment">//98
<br /></span><span class="keyword">echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br /></span><span class="default">$str2 </span><span class="keyword">= </span><span class="string">"t"</span><span class="keyword">;
<br />echo </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">); </span><span class="comment">//116
<br /></span><span class="keyword">echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />echo </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">)-</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">);</span><span class="comment">//-18
<br /></span><span class="default">$str1 </span><span class="keyword">= </span><span class="string">"bear"</span><span class="keyword">;
<br /></span><span class="default">$str2 </span><span class="keyword">= </span><span class="string">"tear"</span><span class="keyword">;
<br /></span><span class="default">$str3 </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;
<br />echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">); </span><span class="comment">// -18
<br /></span><span class="keyword">echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">, </span><span class="default">$str1</span><span class="keyword">); </span><span class="comment">//18
<br /></span><span class="keyword">echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">); </span><span class="comment">//0
<br /></span><span class="keyword">echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">, </span><span class="default">$str3</span><span class="keyword">); </span><span class="comment">//4
<br /></span><span class="keyword">echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str3</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">); </span><span class="comment">//-4
<br /></span><span class="keyword">echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str3</span><span class="keyword">, </span><span class="default">$str3</span><span class="keyword">); </span><span class="comment">// 0
<br /></span><span class="keyword">echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92372">  <div class="votes">
    <div id="Vu92372">
    <a href="/manual/vote-note.php?id=92372&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92372">
    <a href="/manual/vote-note.php?id=92372&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92372" title="69% like this...">
    37
    </div>
  </div>
  <a href="#92372" class="name">
  <strong class="user"><em>Rob Wiesler</em></strong></a><a class="genanchor" href="#92372"> &para;</a><div class="date" title="2009-07-21 12:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92372">
<div class="phpcode"><code><span class="html">One big caveat - strings retrieved from the backtick operation may be zero terminated (C-style), and therefore will not be equal to the non-zero terminated strings (roughly Pascal-style) normal in PHP. The workaround is to surround every `` pair or shell_exec() function with the trim() function. This is likely to be an issue with other functions that invoke shells; I haven't bothered to check.<br /><br />On Debian Lenny (and RHEL 5, with minor differences), I get this:<br /><br />====PHP====<br /><span class="default">&lt;?php<br />$sz </span><span class="keyword">= `</span><span class="string">pwd</span><span class="keyword">`;<br /></span><span class="default">$ps </span><span class="keyword">= </span><span class="string">"/var/www"</span><span class="keyword">;<br /><br />echo </span><span class="string">"Zero-terminated string:&lt;br /&gt;sz = "</span><span class="keyword">.</span><span class="default">$sz</span><span class="keyword">.</span><span class="string">"&lt;br /&gt;str_split(sz) = "</span><span class="keyword">; </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$sz</span><span class="keyword">));<br />echo </span><span class="string">"&lt;br /&gt;&lt;br /&gt;"</span><span class="keyword">;<br /><br />echo </span><span class="string">"Pascal-style string:&lt;br /&gt;ps = "</span><span class="keyword">.</span><span class="default">$ps</span><span class="keyword">.</span><span class="string">"&lt;br /&gt;str_split(ps) = "</span><span class="keyword">; </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$ps</span><span class="keyword">));<br />echo </span><span class="string">"&lt;br /&gt;&lt;br /&gt;"</span><span class="keyword">;<br /><br />echo </span><span class="string">"Normal results of comparison:&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"sz == ps = "</span><span class="keyword">.(</span><span class="default">$sz </span><span class="keyword">== </span><span class="default">$ps </span><span class="keyword">? </span><span class="string">"true" </span><span class="keyword">: </span><span class="string">"false"</span><span class="keyword">).</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"strcmp(sz,ps) = "</span><span class="keyword">.</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$sz</span><span class="keyword">,</span><span class="default">$ps</span><span class="keyword">);<br />echo </span><span class="string">"&lt;br /&gt;&lt;br /&gt;"</span><span class="keyword">;<br /><br />echo </span><span class="string">"Comparison with trim()'d zero-terminated string:&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"trim(sz) = "</span><span class="keyword">.</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sz</span><span class="keyword">).</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"str_split(trim(sz)) = "</span><span class="keyword">; </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sz</span><span class="keyword">))); echo </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"trim(sz) == ps = "</span><span class="keyword">.(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sz</span><span class="keyword">) == </span><span class="default">$ps </span><span class="keyword">? </span><span class="string">"true" </span><span class="keyword">: </span><span class="string">"false"</span><span class="keyword">).</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"strcmp(trim(sz),ps) = "</span><span class="keyword">.</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sz</span><span class="keyword">),</span><span class="default">$ps</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />====Output====<br />Zero-terminated string:<br />sz = /var/www <br />str_split(sz) = Array ( [0] =&gt; / [1] =&gt; v [2] =&gt; a [3] =&gt; r [4] =&gt; / [5] =&gt; w [6] =&gt; w [7] =&gt; w [8] =&gt; ) <br /><br />Pascal-style string:<br />ps = /var/www<br />str_split(ps) = Array ( [0] =&gt; / [1] =&gt; v [2] =&gt; a [3] =&gt; r [4] =&gt; / [5] =&gt; w [6] =&gt; w [7] =&gt; w ) <br /><br />Normal results of comparison:<br />sz == ps = false<br />strcmp(sz,ps) = 1<br /><br />Comparison with trim()'d zero-terminated string:<br />trim(sz) = /var/www<br />str_split(trim(sz)) = Array ( [0] =&gt; / [1] =&gt; v [2] =&gt; a [3] =&gt; r [4] =&gt; / [5] =&gt; w [6] =&gt; w [7] =&gt; w ) <br />trim(sz) == ps = true<br />strcmp(trim(sz),ps) = 0</span></code></div>
  </div>
 </div>
  <div class="note" id="4047">  <div class="votes">
    <div id="Vu4047">
    <a href="/manual/vote-note.php?id=4047&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd4047">
    <a href="/manual/vote-note.php?id=4047&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V4047" title="72% like this...">
    21
    </div>
  </div>
  <a href="#4047" class="name">
  <strong class="user"><em>frewuill at merlin-corp dot com</em></strong></a><a class="genanchor" href="#4047"> &para;</a><div class="date" title="2000-02-28 02:49"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom4047">
<div class="phpcode"><code><span class="html">Hey be sure the string you are comparing has not special characters like '\n' or something like that.</span></code></div>
  </div>
 </div>
  <div class="note" id="118102">  <div class="votes">
    <div id="Vu118102">
    <a href="/manual/vote-note.php?id=118102&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118102">
    <a href="/manual/vote-note.php?id=118102&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118102" title="69% like this...">
    9
    </div>
  </div>
  <a href="#118102" class="name">
  <strong class="user"><em>luizvid at gmail dot com</em></strong></a><a class="genanchor" href="#118102"> &para;</a><div class="date" title="2015-10-04 10:01"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118102">
<div class="phpcode"><code><span class="html">strcmp returns -1 ou 1 if two strings are not identical, <br />and 0 when they are, except when comparing a string and an empty string (<span class="default">&lt;?php $a </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;  </span><span class="default">?&gt;</span>), it returns the length of the string.<br /><br />For instance:<br /><span class="default">&lt;?php<br />        $a </span><span class="keyword">= </span><span class="string">"foo"</span><span class="keyword">; </span><span class="comment">// length 3<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; </span><span class="comment">// empty string<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="string">"barbar"</span><span class="keyword">; </span><span class="comment">// length 6<br /><br />        </span><span class="keyword">echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">); </span><span class="comment">// outputs 0<br />        </span><span class="keyword">echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">); </span><span class="comment">// outputs 1<br />        </span><span class="keyword">echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">); </span><span class="comment">// outputs -1<br />        </span><span class="keyword">echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">); </span><span class="comment">// outputs 3<br />        </span><span class="keyword">echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">); </span><span class="comment">// outputs -3<br />        </span><span class="keyword">echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">); </span><span class="comment">// outputs 6<br />        </span><span class="keyword">echo </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">); </span><span class="comment">// outputs -6<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99192">  <div class="votes">
    <div id="Vu99192">
    <a href="/manual/vote-note.php?id=99192&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99192">
    <a href="/manual/vote-note.php?id=99192&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99192" title="66% like this...">
    11
    </div>
  </div>
  <a href="#99192" class="name">
  <strong class="user"><em>hm2k at php dot net</em></strong></a><a class="genanchor" href="#99192"> &para;</a><div class="date" title="2010-08-02 04:41"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99192">
<div class="phpcode"><code><span class="html">Don't forget the similar_text() function...<br /><br /><a href="http://php.net/manual/en/function.similar-text.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.similar-text.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="102677">  <div class="votes">
    <div id="Vu102677">
    <a href="/manual/vote-note.php?id=102677&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102677">
    <a href="/manual/vote-note.php?id=102677&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102677" title="66% like this...">
    9
    </div>
  </div>
  <a href="#102677" class="name">
  <strong class="user"><em>hrodicus at gmail dot com</em></strong></a><a class="genanchor" href="#102677"> &para;</a><div class="date" title="2011-02-28 06:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102677">
<div class="phpcode"><code><span class="html">Note a difference between 5.2 and 5.3 versions<br /><br />echo (int)strcmp('pending',array());<br />will output -1 in PHP 5.2.16 (probably in all versions prior 5.3)<br />but will output 0 in PHP 5.3.3<br /><br />Of course, you never need to use array as a parameter in string comparisions.</span></code></div>
  </div>
 </div>
  <div class="note" id="113364">  <div class="votes">
    <div id="Vu113364">
    <a href="/manual/vote-note.php?id=113364&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113364">
    <a href="/manual/vote-note.php?id=113364&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113364" title="64% like this...">
    9
    </div>
  </div>
  <a href="#113364" class="name">
  <strong class="user"><em>chris at unix-ninja dot com</em></strong></a><a class="genanchor" href="#113364"> &para;</a><div class="date" title="2013-10-01 06:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113364">
<div class="phpcode"><code><span class="html">Since it may not be obvious to some people, please note that there is another possible return value for this function.<br /><br />strcmp() will return NULL on failure.<br /><br />This has the side effect of equating to a match when using an equals comparison (==).<br />Instead, you may wish to test matches using the identical comparison (===), which should not catch a NULL return.<br /><br />---------------------<br />  Example<br />---------------------<br /><br />$variable1 = array();<br />$ans === strcmp($variable1, $variable2);<br /><br />This will stop $ans from returning a match;<br /><br />Please use strcmp() carefully when comparing user input, as this may have potential security implications in your code.</span></code></div>
  </div>
 </div>
  <div class="note" id="123554">  <div class="votes">
    <div id="Vu123554">
    <a href="/manual/vote-note.php?id=123554&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123554">
    <a href="/manual/vote-note.php?id=123554&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123554" title="64% like this...">
    5
    </div>
  </div>
  <a href="#123554" class="name">
  <strong class="user"><em>mikael1 at mail dot ru</em></strong></a><a class="genanchor" href="#123554"> &para;</a><div class="date" title="2019-01-27 03:05"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123554">
<div class="phpcode"><code><span class="html">1) If the two strings have identical BEGINNING parts, they are trunkated from both strings.<br />2) The resulting strings are compared with two possible outcomes:<br />a) if one of the resulting strings is an empty string, then the length of the non-empty string is returned (the sign depending on the order in which you pass the arguments to the function)<br />b) in any other case just the numerical values of the FIRST characters are compared. The result is +1 or -1 no matter how big is the difference between the numerical values. <br /><br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= array(</span><span class="string">''</span><span class="keyword">,</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'afox'</span><span class="keyword">,</span><span class="string">'foxa'</span><span class="keyword">);<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /><br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />{<br />  for(</span><span class="default">$j</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />  {<br />    echo </span><span class="string">'&lt;br&gt;('</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="string">','</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">].</span><span class="string">') = '</span><span class="keyword">.</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$str</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">]);<br />    echo </span><span class="string">'&lt;br&gt;('</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">].</span><span class="string">','</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] .</span><span class="string">') = '</span><span class="keyword">.</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">], </span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />  }<br />}<br />echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">; <br /></span><span class="default">?&gt;<br /></span><br />In Apache/2.4.37 (Win32) OpenSSL/1.1.1 PHP/7.2.12 produces the following results:<br /><br />(,a) = -1 //comparing with an empty string produces the length of the NON-empty string<br />(a,) = 1 // ditto<br />(,afox) = -4 // ditto<br />(afox,) = 4 // ditto<br />(,foxa) = -4 // ditto<br />(foxa,) = 4 // ditto<br />(a,afox) = -3 // The identical BEGINNING part ("a") is trunkated from both strings. Then the remaining "fox" is compared to the remaing empty string in the other argument. Produces the length of the NON-empty string. Same as in all the above examples.<br />(afox,a) = 3 // ditto<br />(a,foxa) = -1 // Nothing to trunkate. Just the numerical values of the first letters are compared<br />(foxa,a) = 1 // ditto<br />(afox,foxa) = -1 // ditto<br />(foxa,afox) = 1 // ditto</span></code></div>
  </div>
 </div>
  <div class="note" id="123607">  <div class="votes">
    <div id="Vu123607">
    <a href="/manual/vote-note.php?id=123607&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123607">
    <a href="/manual/vote-note.php?id=123607&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123607" title="63% like this...">
    3
    </div>
  </div>
  <a href="#123607" class="name">
  <strong class="user"><em>kgun ! mail ! com</em></strong></a><a class="genanchor" href="#123607"> &para;</a><div class="date" title="2019-02-12 10:16"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123607">
<div class="phpcode"><code><span class="html">In case you want to get results -1, 0 or 1 always, like JS indexOf();<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">cmp</span><span class="keyword">(</span><span class="default">string $str1</span><span class="keyword">, </span><span class="default">string $str2</span><span class="keyword">): </span><span class="default">int </span><span class="keyword">{<br />    return (</span><span class="default">$str1 </span><span class="keyword">&gt; </span><span class="default">$str2</span><span class="keyword">) - (</span><span class="default">$str1 </span><span class="keyword">&lt; </span><span class="default">$str2</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$str1 </span><span class="keyword">= </span><span class="string">'a'</span><span class="keyword">;<br /></span><span class="default">$str2 </span><span class="keyword">= </span><span class="string">'z'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">cmp</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">), </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">));<br /><br /></span><span class="comment">//=&gt; int(-1) int(-25) int(-25)<br /><br /></span><span class="default">$str1 </span><span class="keyword">= </span><span class="string">'a'</span><span class="keyword">;<br /></span><span class="default">$str2 </span><span class="keyword">= </span><span class="string">'1'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">cmp</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">), </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">, </span><span class="default">$str2</span><span class="keyword">));<br /></span><span class="comment">//=&gt; int(1) int(48) int(48)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="39508">  <div class="votes">
    <div id="Vu39508">
    <a href="/manual/vote-note.php?id=39508&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39508">
    <a href="/manual/vote-note.php?id=39508&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39508" title="64% like this...">
    5
    </div>
  </div>
  <a href="#39508" class="name">
  <strong class="user"><em>jcanals at totsoft dot com</em></strong></a><a class="genanchor" href="#39508"> &para;</a><div class="date" title="2004-01-30 06:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39508">
<div class="phpcode"><code><span class="html">Some notes about the spanish locale. I've read some notes that says  "CH", "RR" or "LL" must be considered as a single letter in Spanish. That's not really tru. "CH", "RR" and "LL" where considered a single letter in the past (lot of years ago), for that you must use the "Tradictional Sort". Nowadays, the Academy uses the Modern Sort and recomends not to consider anymore "CH", "RR" and "LL" as a single letter. They must be considered two separated letters and sort and compare on that way.<br /><br />Ju just have to take a look to the Offial Spanish Language Dictionary and you can see there that from many years ago there is not the separated section for "CH", "LL" or "RR" ... i.e. words starting with CH must be after the ones starting by CG, and before the ones starting by CI.</span></code></div>
  </div>
 </div>
  <div class="note" id="125600">  <div class="votes">
    <div id="Vu125600">
    <a href="/manual/vote-note.php?id=125600&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125600">
    <a href="/manual/vote-note.php?id=125600&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125600" title="62% like this...">
    2
    </div>
  </div>
  <a href="#125600" class="name">
  <strong class="user"><em>erik at eldata dot se</em></strong></a><a class="genanchor" href="#125600"> &para;</a><div class="date" title="2020-12-13 06:41"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125600">
<div class="phpcode"><code><span class="html">strcmp and strcasecmp does not work well with multibyte (UTF8) strings and there are no mb_strcmp or mb_strcasecmp - instead look at the wonderful Collator class with method compare (search for Collator above) - supports not only UTF8 but also different national collations (sort orders).<br /><br />Natural sort is also supported, use setAttribute to set Collator::NUMERIC_COLLATION to Collator::ON.</span></code></div>
  </div>
 </div>
  <div class="note" id="24728">  <div class="votes">
    <div id="Vu24728">
    <a href="/manual/vote-note.php?id=24728&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24728">
    <a href="/manual/vote-note.php?id=24728&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24728" title="59% like this...">
    4
    </div>
  </div>
  <a href="#24728" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#24728"> &para;</a><div class="date" title="2002-08-27 06:45"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24728">
<div class="phpcode"><code><span class="html">In summary, strcmp() does not necessarily use the ASCII code order of each character like in the 'C' locale, but instead parse each string to match language-specific character entities (such as 'ch' in Spanish, or 'dz' in Czech), whose collation order is then compared. When both character entities have the same collation order (such as 'ss' and '?' in German), they are compared relative to their code by strcmp(), or considered equal by strcasecmp().<br />The LC_COLLATE locale setting is then considered: only if LC_COLLATE=C or LC_ALL=C does strcmp() compare strings by character code.<br />Generally, most locales define the following order:<br />control, space, punctuation and underscore, digit, alpha (lower then upper with Latin scripts; or final, middle, then isolated, initial with Arabic script), symbols, others...<br />With strcasecmp(), the alpha subclass is ignored and consider all forms of letters as equal.<br />Note also that some locales behave differently with accented characters: some consider they are the same letter as the unaccented letter (with a minor collation order, e.g. French, Italian, Spanish), some consider they are distinct letters with an independant collation order (e.g. in the C locale, or in Nordic languages).<br />Finally, the collation string is not considering individual characters but instead groups of characters that form a single letter:<br />- for example "ch" or "CH" in Spanish which is always after all other strings beginning with 'c' or 'C', including "cz", but before 'd' or 'D';<br />- 'ss' and '?' in German;<br />- 'dz', 'DZ' and 'Dz' in some Central European languages written with the Latin script...<br />- UTF-8, UTF-16 (Unicode), S-JIS, Big5, ISO2022 character encoding of a locale (the suffix in the locale name) first decode the characters into the UCS4/ISO10646 code position before applying the rules of the language indicated by the main locale...<br />So be extremely careful to what you consider a "character", as it may just mean a encoding byte with no significance in the string collation algorithm: the first character of the string "cholera" in Spanish is "ch", not "c" !</span></code></div>
  </div>
 </div>
  <div class="note" id="90924">  <div class="votes">
    <div id="Vu90924">
    <a href="/manual/vote-note.php?id=90924&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90924">
    <a href="/manual/vote-note.php?id=90924&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90924" title="57% like this...">
    2
    </div>
  </div>
  <a href="#90924" class="name">
  <strong class="user"><em>wsogmm at seznam dot cz</em></strong></a><a class="genanchor" href="#90924"> &para;</a><div class="date" title="2009-05-16 08:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90924">
<div class="phpcode"><code><span class="html">Just a short comment to the note of arnar at hm dot is: md5() is a hash function and therefore it may happen (although it is very unlikely) that the md5() checksums of  two different strings will be equal (hash collision) ...</span></code></div>
  </div>
 </div>
  <div class="note" id="121789">  <div class="votes">
    <div id="Vu121789">
    <a href="/manual/vote-note.php?id=121789&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121789">
    <a href="/manual/vote-note.php?id=121789&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121789" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121789" class="name">
  <strong class="user"><em>kamil dot k dot kielczewski at gmail dot com</em></strong></a><a class="genanchor" href="#121789"> &para;</a><div class="date" title="2017-10-24 07:50"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121789">
<div class="phpcode"><code><span class="html">Vulnerability (in PHP &gt;=5.3) :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'password'</span><span class="keyword">], </span><span class="string">'sekret'</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {<br />    echo </span><span class="string">"Welcome, authorized user!\n"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">"Go away, imposter.\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />$ curl -d password=sekret <a href="http://andersk.scripts.mit.edu/strcmp.php" rel="nofollow" target="_blank">http://andersk.scripts.mit.edu/strcmp.php</a><br />Welcome, authorized user!<br /><br />$ curl -d password=wrong <a href="http://andersk.scripts.mit.edu/strcmp.php" rel="nofollow" target="_blank">http://andersk.scripts.mit.edu/strcmp.php</a><br />Go away, imposter.<br /><br />$ curl -d password[]=wrong <a href="http://andersk.scripts.mit.edu/strcmp.php" rel="nofollow" target="_blank">http://andersk.scripts.mit.edu/strcmp.php</a><br />Welcome, authorized user!<br /><br />SRC of this example: <a href="https://www.quora.com/Why-is-PHP-hated-by-so-many-developers" rel="nofollow" target="_blank">https://www.quora.com/Why-is-PHP-hated-by-so-many-developers</a></span></code></div>
  </div>
 </div>
  <div class="note" id="59494">  <div class="votes">
    <div id="Vu59494">
    <a href="/manual/vote-note.php?id=59494&amp;page=function.strcmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59494">
    <a href="/manual/vote-note.php?id=59494&amp;page=function.strcmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59494" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#59494" class="name">
  <strong class="user"><em>francis at flourish dot org</em></strong></a><a class="genanchor" href="#59494"> &para;</a><div class="date" title="2005-12-08 06:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59494">
<div class="phpcode"><code><span class="html">If you want to strings according to locale, use strcoll instead.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strcmp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strcmp.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
