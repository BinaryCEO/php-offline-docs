<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: bindec - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.bindec.php">
 <link rel="shorturl" href="https://www.php.net/bindec">
 <link rel="alternate" href="https://www.php.net/bindec" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.math.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.base-convert.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ceil.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.bindec.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.bindec.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.bindec.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.bindec.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.bindec.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.bindec.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.bindec.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.bindec.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.bindec.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.bindec.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.bindec.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binary to decimal" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: bindec - Manual" />
<meta name="twitter:description" content="Binary to decimal" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: bindec - Manual" />
<meta itemprop="description" content="Binary to decimal" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binary to decimal" />

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
        <a href="function.ceil.php">
          ceil &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.base-convert.php">
          &laquo; base_convert        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.math.php'>Math</a></li>      <li><a href='ref.math.php'>Math Functions</a></li>      </ul>
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
            <option value='en/function.bindec.php' selected="selected">English</option>
            <option value='de/function.bindec.php'>German</option>
            <option value='es/function.bindec.php'>Spanish</option>
            <option value='fr/function.bindec.php'>French</option>
            <option value='it/function.bindec.php'>Italian</option>
            <option value='ja/function.bindec.php'>Japanese</option>
            <option value='pt_BR/function.bindec.php'>Brazilian Portuguese</option>
            <option value='ru/function.bindec.php'>Russian</option>
            <option value='tr/function.bindec.php'>Turkish</option>
            <option value='uk/function.bindec.php'>Ukrainian</option>
            <option value='zh/function.bindec.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.bindec" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">bindec</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">bindec</span> &mdash; <span class="dc-title">Binary to decimal</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.bindec-description">
  <h3 class="title">Description</h3>
   <div class="methodsynopsis dc-description">
    <span class="methodname"><strong>bindec</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$binary_string</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span></div>

  <p class="para rdfs-comment">
   Returns the decimal equivalent of the binary number represented by
   the <code class="parameter">binary_string</code> argument.
  </p>
  <p class="para">
   <span class="function"><strong>bindec()</strong></span> converts a binary number to an
   <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> or, if needed for size reasons, <span class="type"><a href="language.types.float.php" class="type float">float</a></span>.
  </p>
  <p class="para">
   <span class="function"><strong>bindec()</strong></span> interprets all
   <code class="parameter">binary_string</code> values as unsigned
   integers. This is because <span class="function"><strong>bindec()</strong></span> sees
   the most significant bit as another order of magnitude
   rather than as the sign bit.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.bindec-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">binary_string</code></dt>
     <dd>
      <p class="para">
       The binary string to convert.
       Any invalid characters in <code class="parameter">binary_string</code> are silently ignored.
       As of PHP 7.4.0 supplying any invalid characters is deprecated.
      </p>
     </dd>
    
   </dl>
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The parameter must be a string.
    Using other data types will produce unexpected results.
   </p>
  </div>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.bindec-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The decimal value of <code class="parameter">binary_string</code>
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.bindec-changelog">
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
      <td>7.4.0</td>
      <td>
       Passing invalid characters will now generate a deprecation notice.
       The result will still be computed as if the invalid characters did not exist.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.bindec-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3361">
    <p><strong>Example #1 <span class="function"><strong>bindec()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">bindec</span><span style="color: #007700">(</span><span style="color: #DD0000">'110011'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">bindec</span><span style="color: #007700">(</span><span style="color: #DD0000">'000110011'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">bindec</span><span style="color: #007700">(</span><span style="color: #DD0000">'111'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">51
51
7</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-3362">
    <p><strong>Example #2 <span class="function"><strong>bindec()</strong></span> interprets input as unsigned integers</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/*<br /> * The lesson from this example is in the output<br /> * rather than the PHP code itself.<br /> */<br /><br /></span><span style="color: #0000BB">$magnitude_lower </span><span style="color: #007700">= </span><span style="color: #0000BB">pow</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, (</span><span style="color: #0000BB">PHP_INT_SIZE </span><span style="color: #007700">* </span><span style="color: #0000BB">8</span><span style="color: #007700">) - </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">p</span><span style="color: #007700">(</span><span style="color: #0000BB">$magnitude_lower </span><span style="color: #007700">- </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">p</span><span style="color: #007700">(</span><span style="color: #0000BB">$magnitude_lower</span><span style="color: #007700">, </span><span style="color: #DD0000">'See the rollover?  Watch it next time around...'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">p</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_INT_MAX</span><span style="color: #007700">, </span><span style="color: #DD0000">'PHP_INT_MAX'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">p</span><span style="color: #007700">(~</span><span style="color: #0000BB">PHP_INT_MAX</span><span style="color: #007700">, </span><span style="color: #DD0000">'interpreted to be one more than PHP_INT_MAX'</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">PHP_INT_SIZE </span><span style="color: #007700">== </span><span style="color: #0000BB">4</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$note </span><span style="color: #007700">= </span><span style="color: #DD0000">'interpreted to be the largest unsigned integer'</span><span style="color: #007700">;<br />} else {<br />    </span><span style="color: #0000BB">$note </span><span style="color: #007700">= </span><span style="color: #DD0000">'interpreted to be the largest unsigned integer<br />              (18446744073709551615) but skewed by float precision'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">p</span><span style="color: #007700">(-</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$note</span><span style="color: #007700">);<br /><br /><br />function </span><span style="color: #0000BB">p</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">$note </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"input:        </span><span style="color: #0000BB">$input</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">$format </span><span style="color: #007700">= </span><span style="color: #DD0000">'%0' </span><span style="color: #007700">. (</span><span style="color: #0000BB">PHP_INT_SIZE </span><span style="color: #007700">* </span><span style="color: #0000BB">8</span><span style="color: #007700">) . </span><span style="color: #DD0000">'b'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$bin </span><span style="color: #007700">= </span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">, </span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br />    echo </span><span style="color: #DD0000">"binary:       </span><span style="color: #0000BB">$bin</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'precision'</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">);  </span><span style="color: #FF8000">// For readability on 64 bit boxes.<br />    </span><span style="color: #0000BB">$dec </span><span style="color: #007700">= </span><span style="color: #0000BB">bindec</span><span style="color: #007700">(</span><span style="color: #0000BB">$bin</span><span style="color: #007700">);<br />    echo </span><span style="color: #DD0000">'bindec():     ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$dec </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />    if (</span><span style="color: #0000BB">$note</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"NOTE:         </span><span style="color: #0000BB">$note</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    }<br /><br />    echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>Output of the above example on 32 bit machines:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">input:        1073741823
binary:       00111111111111111111111111111111
bindec():     1073741823

input:        1073741824
binary:       01000000000000000000000000000000
bindec():     1073741824
NOTE:         See the rollover?  Watch it next time around...

input:        2147483647
binary:       01111111111111111111111111111111
bindec():     2147483647
NOTE:         PHP_INT_MAX

input:        -2147483648
binary:       10000000000000000000000000000000
bindec():     2147483648
NOTE:         interpreted to be one more than PHP_INT_MAX

input:        -1
binary:       11111111111111111111111111111111
bindec():     4294967295
NOTE:         interpreted to be the largest unsigned integer</pre>
</div>
    </div>
    <div class="example-contents"><p>Output of the above example on 64 bit machines:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">input:        4611686018427387903
binary:       0011111111111111111111111111111111111111111111111111111111111111
bindec():     4611686018427387903

input:        4611686018427387904
binary:       0100000000000000000000000000000000000000000000000000000000000000
bindec():     4611686018427387904
NOTE:         See the rollover?  Watch it next time around...

input:        9223372036854775807
binary:       0111111111111111111111111111111111111111111111111111111111111111
bindec():     9223372036854775807
NOTE:         PHP_INT_MAX

input:        -9223372036854775808
binary:       1000000000000000000000000000000000000000000000000000000000000000
bindec():     9223372036854775808
NOTE:         interpreted to be one more than PHP_INT_MAX

input:        -1
binary:       1111111111111111111111111111111111111111111111111111111111111111
bindec():     18446744073709551616
NOTE:         interpreted to be the largest unsigned integer
              (18446744073709551615) but skewed by float precision</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.bindec-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The function can convert numbers that are too large to fit into the platforms
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> type, larger values are returned as <span class="type"><a href="language.types.float.php" class="type float">float</a></span> in
    that case.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.bindec-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.decbin.php" class="function" rel="rdfs-seeAlso">decbin()</a> - Decimal to binary</span></li>
    <li><span class="function"><a href="function.octdec.php" class="function" rel="rdfs-seeAlso">octdec()</a> - Octal to decimal</span></li>
    <li><span class="function"><a href="function.hexdec.php" class="function" rel="rdfs-seeAlso">hexdec()</a> - Hexadecimal to decimal</span></li>
    <li><span class="function"><a href="function.base-convert.php" class="function" rel="rdfs-seeAlso">base_convert()</a> - Convert a number between arbitrary bases</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/math/functions/bindec.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.bindec%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.bindec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bindec.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97102">  <div class="votes">
    <div id="Vu97102">
    <a href="/manual/vote-note.php?id=97102&amp;page=function.bindec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97102">
    <a href="/manual/vote-note.php?id=97102&amp;page=function.bindec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97102" title="66% like this...">
    7
    </div>
  </div>
  <a href="#97102" class="name">
  <strong class="user"><em>info at rickdg dot nl</em></strong></a><a class="genanchor" href="#97102"> &para;</a><div class="date" title="2010-04-01 04:40"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97102">
<div class="phpcode"><code><span class="html">Two functions to convert 16bit or 8bit binary to integer using two's complement. If input exceeds maximum bits, false is returned. Function is easily scalable to x bits by changing the hexadecimals.<br /><br /><span class="default">&lt;?php </span><span class="keyword">function </span><span class="default">_bin16dec</span><span class="keyword">(</span><span class="default">$bin</span><span class="keyword">) {<br />    </span><span class="comment">// Function to convert 16bit binary numbers to integers using two's complement<br />    </span><span class="default">$num </span><span class="keyword">= </span><span class="default">bindec</span><span class="keyword">(</span><span class="default">$bin</span><span class="keyword">);<br />    if(</span><span class="default">$num </span><span class="keyword">&gt; </span><span class="default">0xFFFF</span><span class="keyword">) { return </span><span class="default">false</span><span class="keyword">; }<br />    if(</span><span class="default">$num </span><span class="keyword">&gt;= </span><span class="default">0x8000</span><span class="keyword">) {<br />        return -((</span><span class="default">$num </span><span class="keyword">^ </span><span class="default">0xFFFF</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">);<br />    } else {<br />        return </span><span class="default">$num</span><span class="keyword">;<br />    }<br />}<br /><br />function </span><span class="default">_bin8dec</span><span class="keyword">(</span><span class="default">$bin</span><span class="keyword">) {<br />    </span><span class="comment">// Function to convert 8bit binary numbers to integers using two's complement<br />    </span><span class="default">$num </span><span class="keyword">= </span><span class="default">bindec</span><span class="keyword">(</span><span class="default">$bin</span><span class="keyword">);<br />    if(</span><span class="default">$num </span><span class="keyword">&gt; </span><span class="default">0xFF</span><span class="keyword">) { return </span><span class="default">false</span><span class="keyword">; }<br />    if(</span><span class="default">$num </span><span class="keyword">&gt;= </span><span class="default">0x80</span><span class="keyword">) {<br />        return -((</span><span class="default">$num </span><span class="keyword">^ </span><span class="default">0xFF</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">);<br />    } else {<br />        return </span><span class="default">$num</span><span class="keyword">;<br />    }<br />} </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="32521">  <div class="votes">
    <div id="Vu32521">
    <a href="/manual/vote-note.php?id=32521&amp;page=function.bindec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32521">
    <a href="/manual/vote-note.php?id=32521&amp;page=function.bindec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32521" title="63% like this...">
    3
    </div>
  </div>
  <a href="#32521" class="name">
  <strong class="user"><em>martin at punix dot de</em></strong></a><a class="genanchor" href="#32521"> &para;</a><div class="date" title="2003-05-29 10:47"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32521">
<div class="phpcode"><code><span class="html">## calculate binary with "shift-method" ##
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">dec2bin</span><span class="keyword">(</span><span class="default">$decimal_code</span><span class="keyword">){
<br /> for(</span><span class="default">$half</span><span class="keyword">=(</span><span class="default">$decimal_code</span><span class="keyword">);</span><span class="default">$half</span><span class="keyword">&gt;=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$half</span><span class="keyword">=(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$half</span><span class="keyword">))/</span><span class="default">2</span><span class="keyword">){
<br />   if((</span><span class="default">$half</span><span class="keyword">%</span><span class="default">2</span><span class="keyword">)!=</span><span class="default">0</span><span class="keyword">){
<br />    </span><span class="default">$y</span><span class="keyword">.=</span><span class="default">1</span><span class="keyword">;
<br />   }
<br />   else{
<br />    </span><span class="default">$y</span><span class="keyword">.=</span><span class="default">0</span><span class="keyword">;
<br />   }
<br />  }
<br /> </span><span class="default">$calculated_bin</span><span class="keyword">=</span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$y</span><span class="keyword">);
<br /> return </span><span class="default">$calculated_bin</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />## example ##
<br />
<br />[bin] 123 = [dec] 1111011
<br />
<br />e.g.
<br />123/2 = 61,5 =&gt; 1
<br />61/2  = 30,5 =&gt; 1
<br />30/2  = 15   =&gt; 0
<br />15/2  = 7,5  =&gt; 1
<br />7/2   = 3,5  =&gt; 1
<br />3/2   = 1,5  =&gt; 1
<br />1/2   = 0,5  =&gt; 1
<br />(0/2   = 0    finish)</span></code></div>
  </div>
 </div>
  <div class="note" id="44910">  <div class="votes">
    <div id="Vu44910">
    <a href="/manual/vote-note.php?id=44910&amp;page=function.bindec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44910">
    <a href="/manual/vote-note.php?id=44910&amp;page=function.bindec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44910" title="61% like this...">
    3
    </div>
  </div>
  <a href="#44910" class="name">
  <strong class="user"><em>gwbdome at freenet dot de</em></strong></a><a class="genanchor" href="#44910"> &para;</a><div class="date" title="2004-08-19 02:43"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44910">
<div class="phpcode"><code><span class="html">i think a better method than the "shift-method" is my method ^^...<br />here it comes:<br /><br />function convert2bin($string) {<br />     $finished=0;<br />     $base=1;<br />     if(preg_match("/[^0-9]/", $string)) {<br />         for($i=0; $string!=chr($i); $i++);<br />         $dec_nr=$i;<br />     }<br />     else $dec_nr=$string;<br />     while($dec_nr&gt;$base) {<br />         $base=$base*2;<br />         if($base&gt;$dec_nr) {<br />             $base=$base/2;<br />             break;<br />         }<br />     }<br />     while(!$finished) {<br />         if(($dec_nr-$base)&gt;0) {<br />             $dec_nr=$dec_nr-$base;<br />             $bin_nr.=1;<br />             $base=$base/2;<br />         }<br />         elseif(($dec_nr-$base)&lt;0) {<br />             $bin_nr.=0;<br />             $base=$base/2;<br />         }<br />         elseif(($dec_nr-$base)==0) {<br />             $bin_nr.=1;<br />             $finished=1;<br />             while($base&gt;1) {    <br />                 $bin_nr.=0;<br />                 $base=$base/2;<br />             }<br />         }<br />     }<br />     return $bin_nr;<br /> }<br /><br />=====================================================<br /><br />if you want to reconvert it (from binary to string or integer) you can use this function: <br /><br />function reconvert($bin_nr) {<br />     $base=1;<br />     $dec_nr=0;<br />     $bin_nr=explode(",", preg_replace("/(.*),/", "$1", str_replace("1", "1,", str_replace("0", "0,", $bin_nr))));<br />     for($i=1; $i&lt;count($bin_nr); $i++) $base=$base*2;<br />     foreach($bin_nr as $key=&gt;$bin_nr_bit) {<br />         if($bin_nr_bit==1) {<br />             $dec_nr+=$base;<br />             $base=$base/2;<br />         }<br />         if($bin_nr_bit==0) $base=$base/2;<br />     }<br />     return(array("string"=&gt;chr($dec_nr), "int"=&gt;$dec_nr));<br /> }</span></code></div>
  </div>
 </div>
  <div class="note" id="92363">  <div class="votes">
    <div id="Vu92363">
    <a href="/manual/vote-note.php?id=92363&amp;page=function.bindec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92363">
    <a href="/manual/vote-note.php?id=92363&amp;page=function.bindec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92363" title="62% like this...">
    2
    </div>
  </div>
  <a href="#92363" class="name">
  <strong class="user"><em>Nitrogen</em></strong></a><a class="genanchor" href="#92363"> &para;</a><div class="date" title="2009-07-21 07:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92363">
<div class="phpcode"><code><span class="html">Binary to Decimal conversion using the BCMath extension..<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">BCBin2Dec</span><span class="keyword">(</span><span class="default">$Input</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">) {<br />  </span><span class="default">$Output</span><span class="keyword">=</span><span class="string">'0'</span><span class="keyword">;<br />  if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^[01]+$/"</span><span class="keyword">,</span><span class="default">$Input</span><span class="keyword">)) {<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Input</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)<br />      </span><span class="default">$Output</span><span class="keyword">=</span><span class="default">BCAdd</span><span class="keyword">(</span><span class="default">BCMul</span><span class="keyword">(</span><span class="default">$Output</span><span class="keyword">,</span><span class="string">'2'</span><span class="keyword">),</span><span class="default">$Input</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">});<br />  }<br />  return(</span><span class="default">$Output</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This will simply convert from Base-2 to Base-10 using BCMath (arbitrary precision calculation).<br /><br />See also: my 'BCDec2Bin' function on the 'decbin' document.<br />Enjoy,<br />Nitrogen.</span></code></div>
  </div>
 </div>
  <div class="note" id="79072">  <div class="votes">
    <div id="Vu79072">
    <a href="/manual/vote-note.php?id=79072&amp;page=function.bindec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79072">
    <a href="/manual/vote-note.php?id=79072&amp;page=function.bindec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79072" title="54% like this...">
    1
    </div>
  </div>
  <a href="#79072" class="name">
  <strong class="user"><em>alan hogan dot com slash contact</em></strong></a><a class="genanchor" href="#79072"> &para;</a><div class="date" title="2007-11-09 01:34"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79072">
<div class="phpcode"><code><span class="html">The "smartbindec" function I wrote below will convert any binary string (of a reasonable size) to decimal.  It will use two's complement if the leftmost bit is 1, regardless of bit length.  If you are getting unexpected negative answers, try zero-padding your strings with sprintf("%032s", $yourBitString).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">twoscomp</span><span class="keyword">(</span><span class="default">$bin</span><span class="keyword">) {<br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    </span><span class="default">$mode </span><span class="keyword">= </span><span class="string">"init"</span><span class="keyword">;<br />    for(</span><span class="default">$x </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$bin</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">--) {<br />        if (</span><span class="default">$mode </span><span class="keyword">!= </span><span class="string">"init"</span><span class="keyword">)<br />            </span><span class="default">$out </span><span class="keyword">= (</span><span class="default">$bin</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] == </span><span class="string">"0" </span><span class="keyword">? </span><span class="string">"1" </span><span class="keyword">: </span><span class="string">"0"</span><span class="keyword">).</span><span class="default">$out</span><span class="keyword">;<br />        else {<br />            if(</span><span class="default">$bin</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] == </span><span class="string">"1"</span><span class="keyword">) {<br />                </span><span class="default">$out </span><span class="keyword">= </span><span class="string">"1"</span><span class="keyword">.</span><span class="default">$out</span><span class="keyword">;<br />                </span><span class="default">$mode </span><span class="keyword">= </span><span class="string">"invert"</span><span class="keyword">;<br />            }<br />            else<br />                </span><span class="default">$out </span><span class="keyword">= </span><span class="string">"0"</span><span class="keyword">.</span><span class="default">$out</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">$out</span><span class="keyword">;<br />}<br />function </span><span class="default">smartbindec</span><span class="keyword">(</span><span class="default">$bin</span><span class="keyword">) {<br />    if(</span><span class="default">$bin</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="default">1</span><span class="keyword">)<br />        return -</span><span class="default">1 </span><span class="keyword">* </span><span class="default">bindec</span><span class="keyword">(</span><span class="default">twoscomp</span><span class="keyword">(</span><span class="default">$bin</span><span class="keyword">));<br />    else return (int) </span><span class="default">bindec</span><span class="keyword">(</span><span class="default">$bin</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.bindec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.bindec.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.math.php">Math Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.abs.php" title="abs">abs</a>
                        </li>
                                                <li class="">
                            <a href="function.acos.php" title="acos">acos</a>
                        </li>
                                                <li class="">
                            <a href="function.acosh.php" title="acosh">acosh</a>
                        </li>
                                                <li class="">
                            <a href="function.asin.php" title="asin">asin</a>
                        </li>
                                                <li class="">
                            <a href="function.asinh.php" title="asinh">asinh</a>
                        </li>
                                                <li class="">
                            <a href="function.atan.php" title="atan">atan</a>
                        </li>
                                                <li class="">
                            <a href="function.atan2.php" title="atan2">atan2</a>
                        </li>
                                                <li class="">
                            <a href="function.atanh.php" title="atanh">atanh</a>
                        </li>
                                                <li class="">
                            <a href="function.base-convert.php" title="base_&#8203;convert">base_&#8203;convert</a>
                        </li>
                                                <li class="current">
                            <a href="function.bindec.php" title="bindec">bindec</a>
                        </li>
                                                <li class="">
                            <a href="function.ceil.php" title="ceil">ceil</a>
                        </li>
                                                <li class="">
                            <a href="function.cos.php" title="cos">cos</a>
                        </li>
                                                <li class="">
                            <a href="function.cosh.php" title="cosh">cosh</a>
                        </li>
                                                <li class="">
                            <a href="function.decbin.php" title="decbin">decbin</a>
                        </li>
                                                <li class="">
                            <a href="function.dechex.php" title="dechex">dechex</a>
                        </li>
                                                <li class="">
                            <a href="function.decoct.php" title="decoct">decoct</a>
                        </li>
                                                <li class="">
                            <a href="function.deg2rad.php" title="deg2rad">deg2rad</a>
                        </li>
                                                <li class="">
                            <a href="function.exp.php" title="exp">exp</a>
                        </li>
                                                <li class="">
                            <a href="function.expm1.php" title="expm1">expm1</a>
                        </li>
                                                <li class="">
                            <a href="function.fdiv.php" title="fdiv">fdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.floor.php" title="floor">floor</a>
                        </li>
                                                <li class="">
                            <a href="function.fmod.php" title="fmod">fmod</a>
                        </li>
                                                <li class="">
                            <a href="function.fpow.php" title="fpow">fpow</a>
                        </li>
                                                <li class="">
                            <a href="function.hexdec.php" title="hexdec">hexdec</a>
                        </li>
                                                <li class="">
                            <a href="function.hypot.php" title="hypot">hypot</a>
                        </li>
                                                <li class="">
                            <a href="function.intdiv.php" title="intdiv">intdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.is-finite.php" title="is_&#8203;finite">is_&#8203;finite</a>
                        </li>
                                                <li class="">
                            <a href="function.is-infinite.php" title="is_&#8203;infinite">is_&#8203;infinite</a>
                        </li>
                                                <li class="">
                            <a href="function.is-nan.php" title="is_&#8203;nan">is_&#8203;nan</a>
                        </li>
                                                <li class="">
                            <a href="function.log.php" title="log">log</a>
                        </li>
                                                <li class="">
                            <a href="function.log10.php" title="log10">log10</a>
                        </li>
                                                <li class="">
                            <a href="function.log1p.php" title="log1p">log1p</a>
                        </li>
                                                <li class="">
                            <a href="function.max.php" title="max">max</a>
                        </li>
                                                <li class="">
                            <a href="function.min.php" title="min">min</a>
                        </li>
                                                <li class="">
                            <a href="function.octdec.php" title="octdec">octdec</a>
                        </li>
                                                <li class="">
                            <a href="function.pi.php" title="pi">pi</a>
                        </li>
                                                <li class="">
                            <a href="function.pow.php" title="pow">pow</a>
                        </li>
                                                <li class="">
                            <a href="function.rad2deg.php" title="rad2deg">rad2deg</a>
                        </li>
                                                <li class="">
                            <a href="function.round.php" title="round">round</a>
                        </li>
                                                <li class="">
                            <a href="function.sin.php" title="sin">sin</a>
                        </li>
                                                <li class="">
                            <a href="function.sinh.php" title="sinh">sinh</a>
                        </li>
                                                <li class="">
                            <a href="function.sqrt.php" title="sqrt">sqrt</a>
                        </li>
                                                <li class="">
                            <a href="function.tan.php" title="tan">tan</a>
                        </li>
                                                <li class="">
                            <a href="function.tanh.php" title="tanh">tanh</a>
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
