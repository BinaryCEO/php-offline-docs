<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: str_shuffle - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.str-shuffle.php">
 <link rel="shorturl" href="https://www.php.net/str-shuffle">
 <link rel="alternate" href="https://www.php.net/str-shuffle" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.str-rot13.php">
 <link rel="next" href="https://www.php.net/manual/en/function.str-split.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.str-shuffle.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.str-shuffle.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.str-shuffle.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.str-shuffle.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.str-shuffle.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.str-shuffle.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.str-shuffle.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.str-shuffle.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.str-shuffle.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.str-shuffle.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.str-shuffle.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Randomly shuffles a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: str_shuffle - Manual" />
<meta name="twitter:description" content="Randomly shuffles a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: str_shuffle - Manual" />
<meta itemprop="description" content="Randomly shuffles a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Randomly shuffles a string" />

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
        <a href="function.str-split.php">
          str_split &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.str-rot13.php">
          &laquo; str_rot13        </a>
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
            <option value='en/function.str-shuffle.php' selected="selected">English</option>
            <option value='de/function.str-shuffle.php'>German</option>
            <option value='es/function.str-shuffle.php'>Spanish</option>
            <option value='fr/function.str-shuffle.php'>French</option>
            <option value='it/function.str-shuffle.php'>Italian</option>
            <option value='ja/function.str-shuffle.php'>Japanese</option>
            <option value='pt_BR/function.str-shuffle.php'>Brazilian Portuguese</option>
            <option value='ru/function.str-shuffle.php'>Russian</option>
            <option value='tr/function.str-shuffle.php'>Turkish</option>
            <option value='uk/function.str-shuffle.php'>Ukrainian</option>
            <option value='zh/function.str-shuffle.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.str-shuffle" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">str_shuffle</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">str_shuffle</span> &mdash; <span class="dc-title">Randomly shuffles a string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.str-shuffle-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>str_shuffle</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="simpara">
   <span class="function"><strong>str_shuffle()</strong></span> shuffles a string.  One permutation
   of all possible is created.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
 <p class="para">
  This function does not generate cryptographically secure values, and <em>must not</em>
  be used for cryptographic purposes, or purposes that require returned values to be unguessable.
 </p>
 <p class="para">
  If cryptographically secure randomness is required, the <span class="classname"><a href="class.random-randomizer.php" class="classname">Random\Randomizer</a></span> may be
  used with the <span class="classname"><a href="class.random-engine-secure.php" class="classname">Random\Engine\Secure</a></span> engine. For simple use cases, the <span class="function"><a href="function.random-int.php" class="function">random_int()</a></span>
  and <span class="function"><a href="function.random-bytes.php" class="function">random_bytes()</a></span> functions provide a convenient and secure <abbr title="Application Programming Interface">API</abbr> that is backed by
  the operating system’s <abbr title="Cryptographically Secure PseudoRandom Number Generator">CSPRNG</abbr>.
 </p>
</div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.str-shuffle-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.str-shuffle-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the shuffled string.
  </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-function.str-shuffle-changelog">
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
       <td>7.1.0</td>
       <td>
        The internal randomization algorithm <a href="migration71.incompatible.php#migration71.incompatible.rand-srand-aliases" class="link">has been changed</a> to use the <a href="http://www.math.sci.hiroshima-u.ac.jp/~m-mat/MT/emt.html" class="link external">&raquo;&nbsp;Mersenne Twister</a> Random Number Generator instead of the libc rand function.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.str-shuffle-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5142">
    <p><strong>Example #1 <span class="function"><strong>str_shuffle()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'abcdef'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$shuffled </span><span style="color: #007700">= </span><span style="color: #0000BB">str_shuffle</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// This will echo something like: bfdaec<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$shuffled</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.str-shuffle-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="random-randomizer.shufflebytes.php" class="function" rel="rdfs-seeAlso">Random\Randomizer::shuffleBytes()</a> - Get a byte-wise permutation of a string</span></li>
    <li><span class="function"><a href="random-randomizer.shufflearray.php" class="function" rel="rdfs-seeAlso">Random\Randomizer::shuffleArray()</a> - Get a permutation of an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/str-shuffle.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.str-shuffle%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.str-shuffle&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-shuffle.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="75796">  <div class="votes">
    <div id="Vu75796">
    <a href="/manual/vote-note.php?id=75796&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75796">
    <a href="/manual/vote-note.php?id=75796&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75796" title="80% like this...">
    122
    </div>
  </div>
  <a href="#75796" class="name">
  <strong class="user"><em>jojersztajner at OXYGEN dot POLAND</em></strong></a><a class="genanchor" href="#75796"> &para;</a><div class="date" title="2007-06-16 03:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75796">
<div class="phpcode"><code><span class="html">Aoccdrnig to rseearch at an Elingsh uinervtisy, it deosn't mttaer in waht oredr the ltteers in a wrod are, the olny iprmoatnt tihng is that the frist and lsat ltteer is at the rghit pclae. The rset can be a toatl mses and you can sitll raed it wouthit a porbelm. Tihs is bcuseae we do not raed ervey lteter by it slef but the wrod as a wlohe.<br /><br />Hree's a cdoe taht slerbmcas txet in tihs way:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">scramble_word</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">) {<br />        if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">) &lt; </span><span class="default">2</span><span class="keyword">)<br />            return </span><span class="default">$word</span><span class="keyword">;<br />        else<br />            return </span><span class="default">$word</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} . </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">)) . </span><span class="default">$word</span><span class="keyword">{</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">};<br />    }<br /><br />    echo </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/(\w+)/e'</span><span class="keyword">, </span><span class="string">'scramble_word("\1")'</span><span class="keyword">, </span><span class="string">'A quick brown fox jumped over the lazy dog.'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />It may be ufseul if you wnat to cetare an aessblicce CTCPAHA.</span></code></div>
  </div>
 </div>
  <div class="note" id="118100">  <div class="votes">
    <div id="Vu118100">
    <a href="/manual/vote-note.php?id=118100&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118100">
    <a href="/manual/vote-note.php?id=118100&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118100" title="84% like this...">
    13
    </div>
  </div>
  <a href="#118100" class="name">
  <strong class="user"><em>ronald</em></strong></a><a class="genanchor" href="#118100"> &para;</a><div class="date" title="2015-10-04 11:44"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118100">
<div class="phpcode"><code><span class="html">This page is missing a very important notice:<br /><br />Caution<br /><br />This function does not generate cryptographically secure values, and should not be used for cryptographic purposes. If you need a cryptographically secure value, consider using random_int(), random_bytes(), or openssl_random_pseudo_bytes() instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="128396">  <div class="votes">
    <div id="Vu128396">
    <a href="/manual/vote-note.php?id=128396&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128396">
    <a href="/manual/vote-note.php?id=128396&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128396" title="80% like this...">
    3
    </div>
  </div>
  <a href="#128396" class="name">
  <strong class="user"><em>ccb2357 at gmail dot com</em></strong></a><a class="genanchor" href="#128396"> &para;</a><div class="date" title="2023-04-14 05:39"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128396">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">str_rand</span><span class="keyword">(</span><span class="default">int $length </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">) : </span><span class="default">string </span><span class="keyword">{<br />        </span><span class="default">$ascii_codes </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">48</span><span class="keyword">, </span><span class="default">57</span><span class="keyword">) + </span><span class="default">range</span><span class="keyword">(</span><span class="default">97</span><span class="keyword">, </span><span class="default">122</span><span class="keyword">);<br />        </span><span class="default">$codes_lenght </span><span class="keyword">= (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$ascii_codes</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">shuffle</span><span class="keyword">(</span><span class="default">$ascii_codes</span><span class="keyword">);<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />            </span><span class="default">$previous_char </span><span class="keyword">= </span><span class="default">$char </span><span class="keyword">?? </span><span class="string">''</span><span class="keyword">;<br />            </span><span class="default">$char </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$ascii_codes</span><span class="keyword">[</span><span class="default">random_int</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$codes_lenght</span><span class="keyword">)]);<br />            while(</span><span class="default">$char </span><span class="keyword">== </span><span class="default">$previous_char</span><span class="keyword">){<br />                </span><span class="default">$char </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$ascii_codes</span><span class="keyword">[</span><span class="default">random_int</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$codes_lenght</span><span class="keyword">)]);<br />            }<br />            </span><span class="default">$string </span><span class="keyword">.= </span><span class="default">$char</span><span class="keyword">;<br />        }<br />        return </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117653">  <div class="votes">
    <div id="Vu117653">
    <a href="/manual/vote-note.php?id=117653&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117653">
    <a href="/manual/vote-note.php?id=117653&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117653" title="74% like this...">
    21
    </div>
  </div>
  <a href="#117653" class="name">
  <strong class="user"><em>blamoo2 at hotmail dot com</em></strong></a><a class="genanchor" href="#117653"> &para;</a><div class="date" title="2015-07-15 01:35"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117653">
<div class="phpcode"><code><span class="html">This function is affected by srand():<br /><br /><span class="default">&lt;?php<br />srand</span><span class="keyword">(</span><span class="default">12345</span><span class="keyword">);<br />echo </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="string">'Randomize me'</span><span class="keyword">) . </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">; </span><span class="comment">// "demmiezr aon"<br /></span><span class="keyword">echo </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="string">'Randomize me'</span><span class="keyword">) . </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">; </span><span class="comment">// "izadmeo rmen"<br /><br /></span><span class="default">srand</span><span class="keyword">(</span><span class="default">12345</span><span class="keyword">);<br />echo </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="string">'Randomize me'</span><span class="keyword">) . </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">; </span><span class="comment">// "demmiezr aon" again<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107656">  <div class="votes">
    <div id="Vu107656">
    <a href="/manual/vote-note.php?id=107656&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107656">
    <a href="/manual/vote-note.php?id=107656&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107656" title="71% like this...">
    25
    </div>
  </div>
  <a href="#107656" class="name">
  <strong class="user"><em>qeremy [atta] gmail [dotta] com</em></strong></a><a class="genanchor" href="#107656"> &para;</a><div class="date" title="2012-02-24 11:58"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107656">
<div class="phpcode"><code><span class="html">A proper unicode string shuffle;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_shuffle_unicode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"//u"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">);<br />    </span><span class="default">shuffle</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">);<br />    return </span><span class="default">join</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />$str = "Şeker yârim"; // My sweet love<br /><br />echo str_shuffle($str); // i�eymrŢekr �<br /><br />echo str_shuffle_unicode($str); // Şr mreyeikâ</span></code></div>
  </div>
 </div>
  <div class="note" id="124304">  <div class="votes">
    <div id="Vu124304">
    <a href="/manual/vote-note.php?id=124304&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124304">
    <a href="/manual/vote-note.php?id=124304&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124304" title="72% like this...">
    5
    </div>
  </div>
  <a href="#124304" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124304"> &para;</a><div class="date" title="2019-10-18 01:08"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124304">
<div class="phpcode"><code><span class="html">As noted in this documentation str_shuffle is NOT cryptographically secure, however I have seen many code examples online of people using nothing more than this to generate say random passwords.  So I though I'd share my function which while it makes use of str_shuffle also rely's on random_int() for added security. I use this function to generate salts to use when working with hashes but it can also be used to generate default passwords for new users for example.<br /><br />It starts with a universe of possible characters, in this case all letters (upper and lower case), 0-9, and several special characters.<br /><br />It then will run str_shuffle on the universe of characters a random number of times, using random_int() (currently set to 1-10)<br /><br />Then once the universe of possible characters has been shuffled it using random_int() once more to select the character as a random position within the shuffled string, as does that once for each character you want in the output.<br /><br /> function secret_gen( $len=64 ) {<br />    $secret = "";<br />    $charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&amp;*()_-+=`~,&lt;&gt;.[]: |';<br />    for ( $x = 1l $x &lt;= random_int( 1, 10 ), $x++ ){<br />        $charset = str_shuffle( $charset );<br />    }<br />    for ( $s = 1; $s &lt;= $len; $s++ ) {<br />        $secret .= substr( $charset, random_int( 0, 86 ), 1 );<br />    }<br />    return $secret;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="125039">  <div class="votes">
    <div id="Vu125039">
    <a href="/manual/vote-note.php?id=125039&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125039">
    <a href="/manual/vote-note.php?id=125039&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125039" title="66% like this...">
    4
    </div>
  </div>
  <a href="#125039" class="name">
  <strong class="user"><em>wmtrader at yandex dot ru</em></strong></a><a class="genanchor" href="#125039"> &para;</a><div class="date" title="2020-05-23 08:33"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125039">
<div class="phpcode"><code><span class="html">Unshuffle, using:<br /><span class="default">&lt;?php<br />$string </span><span class="keyword">= </span><span class="string">"Hello World!"</span><span class="keyword">;<br /><br /></span><span class="default">$seed </span><span class="keyword">= </span><span class="default">1234567890</span><span class="keyword">;<br /></span><span class="default">mt_srand</span><span class="keyword">(</span><span class="default">$seed</span><span class="keyword">);<br /><br />echo </span><span class="default">$sh </span><span class="keyword">= </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);  </span><span class="comment">//print 'eloWHl rodl!'<br /></span><span class="keyword">echo </span><span class="default">str_unshuffle</span><span class="keyword">(</span><span class="default">$sh</span><span class="keyword">, </span><span class="default">$seed</span><span class="keyword">); </span><span class="comment">//print 'Hello World!'<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_unshuffle</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$seed</span><span class="keyword">){<br />    </span><span class="default">$unique </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'chr'</span><span class="keyword">,</span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">254</span><span class="keyword">)));<br />    </span><span class="default">$none   </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">);<br />    </span><span class="default">$slen   </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$c      </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$slen</span><span class="keyword">/</span><span class="default">255</span><span class="keyword">));<br />    </span><span class="default">$r      </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />        </span><span class="default">$aaa </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$none</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">*</span><span class="default">255</span><span class="keyword">);<br />        </span><span class="default">$bbb </span><span class="keyword">= ((</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">)&lt;</span><span class="default">$c</span><span class="keyword">) ? </span><span class="default">$unique </span><span class="keyword">: </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$unique</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$slen</span><span class="keyword">%</span><span class="default">255</span><span class="keyword">);<br />        </span><span class="default">$ccc </span><span class="keyword">= ((</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">)&lt;</span><span class="default">$c</span><span class="keyword">) ? </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$none</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)-(</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">)*</span><span class="default">255</span><span class="keyword">) : </span><span class="string">""</span><span class="keyword">;<br />        </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$aaa</span><span class="keyword">.</span><span class="default">$bbb</span><span class="keyword">.</span><span class="default">$ccc</span><span class="keyword">;<br />        </span><span class="default">mt_srand</span><span class="keyword">(</span><span class="default">$seed</span><span class="keyword">);<br />        </span><span class="default">$sh  </span><span class="keyword">= </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">);<br />        for(</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$bbb</span><span class="keyword">); </span><span class="default">$j</span><span class="keyword">++){<br />            </span><span class="default">$r </span><span class="keyword">.= </span><span class="default">$str</span><span class="keyword">{</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$sh</span><span class="keyword">, </span><span class="default">$unique</span><span class="keyword">{</span><span class="default">$j</span><span class="keyword">})};<br />        }<br />    }<br />    return </span><span class="default">$r</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115921">  <div class="votes">
    <div id="Vu115921">
    <a href="/manual/vote-note.php?id=115921&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115921">
    <a href="/manual/vote-note.php?id=115921&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115921" title="60% like this...">
    6
    </div>
  </div>
  <a href="#115921" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#115921"> &para;</a><div class="date" title="2014-10-14 05:35"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115921">
<div class="phpcode"><code><span class="html">str_shuffle isn't recommendable for passwords. Each character exists only one time).<br /><br />A function like the following one is better for this.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">generatePassword</span><span class="keyword">(</span><span class="default">$length </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">) {<br />        </span><span class="default">$possibleChars </span><span class="keyword">= </span><span class="string">"abcdefghijklmnopqrstuvwxyz"</span><span class="keyword">;<br />        </span><span class="default">$password </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />            </span><span class="default">$rand </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$possibleChars</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">);<br />            </span><span class="default">$password </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$possibleChars</span><span class="keyword">, </span><span class="default">$rand</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">$password</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73254">  <div class="votes">
    <div id="Vu73254">
    <a href="/manual/vote-note.php?id=73254&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73254">
    <a href="/manual/vote-note.php?id=73254&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73254" title="58% like this...">
    6
    </div>
  </div>
  <a href="#73254" class="name">
  <strong class="user"><em>CygnusX1</em></strong></a><a class="genanchor" href="#73254"> &para;</a><div class="date" title="2007-02-14 01:17"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73254">
<div class="phpcode"><code><span class="html">To cobine functionality and simplicity of the two functions below we can have:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">generatePasswd</span><span class="keyword">(</span><span class="default">$numAlpha</span><span class="keyword">=</span><span class="default">6</span><span class="keyword">,</span><span class="default">$numNonAlpha</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">)<br />{<br />   </span><span class="default">$listAlpha </span><span class="keyword">= </span><span class="string">'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'</span><span class="keyword">;<br />   </span><span class="default">$listNonAlpha </span><span class="keyword">= </span><span class="string">',;:!?.$/*-+&amp;@_+;./*&amp;?$-!,'</span><span class="keyword">;<br />   return </span><span class="default">str_shuffle</span><span class="keyword">(<br />      </span><span class="default">substr</span><span class="keyword">(</span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$listAlpha</span><span class="keyword">),</span><span class="default">0</span><span class="keyword">,</span><span class="default">$numAlpha</span><span class="keyword">) .<br />      </span><span class="default">substr</span><span class="keyword">(</span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$listNonAlpha</span><span class="keyword">),</span><span class="default">0</span><span class="keyword">,</span><span class="default">$numNonAlpha</span><span class="keyword">)<br />    );<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98531">  <div class="votes">
    <div id="Vu98531">
    <a href="/manual/vote-note.php?id=98531&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98531">
    <a href="/manual/vote-note.php?id=98531&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98531" title="52% like this...">
    1
    </div>
  </div>
  <a href="#98531" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#98531"> &para;</a><div class="date" title="2010-06-21 10:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98531">
<div class="phpcode"><code><span class="html">Shuffle for all encoding formats<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">unicode_shuffle</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$chars</span><span class="keyword">, </span><span class="default">$format </span><span class="keyword">= </span><span class="string">'UTF-8'</span><span class="keyword">)<br />{<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$chars</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        </span><span class="default">$rands</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$format</span><span class="keyword">));<br />            <br />        </span><span class="default">$s </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />            <br />    foreach(</span><span class="default">$rands </span><span class="keyword">as </span><span class="default">$r</span><span class="keyword">)<br />        </span><span class="default">$s</span><span class="keyword">.= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$format</span><span class="keyword">);<br />            <br />    return </span><span class="default">$s</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124922">  <div class="votes">
    <div id="Vu124922">
    <a href="/manual/vote-note.php?id=124922&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124922">
    <a href="/manual/vote-note.php?id=124922&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124922" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124922" class="name">
  <strong class="user"><em>kundanborakb at gmail dot com</em></strong></a><a class="genanchor" href="#124922"> &para;</a><div class="date" title="2020-04-16 11:35"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124922">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">//get random string with your desire length<br /><br />    </span><span class="keyword">function </span><span class="default">getRandom</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">){<br />        <br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="string">'abcdefghijklmnopqrstuvwzyz'</span><span class="keyword">;<br />        </span><span class="default">$str1</span><span class="keyword">= </span><span class="string">'ABCDEFGHIJKLMNOPQRSTUVWXYZ'</span><span class="keyword">;<br />        </span><span class="default">$str2</span><span class="keyword">= </span><span class="string">'0123456789'</span><span class="keyword">;<br />        </span><span class="default">$shuffled </span><span class="keyword">= </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />        </span><span class="default">$shuffled1 </span><span class="keyword">= </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">);<br />        </span><span class="default">$shuffled2 </span><span class="keyword">= </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">);<br />        </span><span class="default">$total </span><span class="keyword">= </span><span class="default">$shuffled</span><span class="keyword">.</span><span class="default">$shuffled1</span><span class="keyword">.</span><span class="default">$shuffled2</span><span class="keyword">;<br />        </span><span class="default">$shuffled3 </span><span class="keyword">= </span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$total</span><span class="keyword">);<br />        </span><span class="default">$result</span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$shuffled3</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br /><br />        return </span><span class="default">$result</span><span class="keyword">;<br /><br />    }<br /><br />    echo </span><span class="default">getRandom</span><span class="keyword">(</span><span class="default">8</span><span class="keyword">);<br /><br /></span><span class="comment">//output --&gt;<br />//GATv3JPX<br />//g7AzhDtR<br />//DTboKtiL<br />//CuWZR4cs<br />//tmTXbzBC<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117335">  <div class="votes">
    <div id="Vu117335">
    <a href="/manual/vote-note.php?id=117335&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117335">
    <a href="/manual/vote-note.php?id=117335&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117335" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117335" class="name">
  <strong class="user"><em>krzysiekpiasecki at gmail dot com</em></strong></a><a class="genanchor" href="#117335"> &para;</a><div class="date" title="2015-05-23 09:06"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117335">
<div class="phpcode"><code><span class="html">/**<br /> * Test shuffleString<br /> */<br />function testShuffleString() {<br />    $shuffled = shuffleString("ĄęźćÓ");<br />    if (\mb_strlen($shuffled) != 5) {<br />        throw new \UnexpectedValueException("Invalid count of characters");<br />    }<br />    if ($shuffled == "ĄęźćÓ") {<br />        throw new \UnexpectedValueException("The same string");<br />    }<br />    foreach (["Ą", "ę", "ź", "ć", "Ó"] as $char) {<br />        if (\mb_strpos($shuffled, $char) === false) {<br />            throw new \UnexpectedValueException("Character not found");<br />        }<br />    }<br />}<br /><br />/**<br /> * Shuffle string<br /> *<br /> * @param $stringValue String to shuffle<br /> * @param string $startWith Shuffle $stringValue and append to $startWith<br /> * @return string Shuffled string<br /> * @author Krzysztof Piasecki&lt;krzysiekpiasecki@gmail.com&gt;<br /> */<br />function shuffleString($stringValue, $startWith = "") {<br />    $range = \range(0, \mb_strlen($stringValue));<br />    shuffle($range);<br />    foreach($range as $index) {<br />        $startWith .= \mb_substr($stringValue, $index, 1);<br />    }<br />    return $startWith;<br />};<br /><br />testShuffleString();<br /><br />echo shuffleString("Hello"); // &gt; 'elHol' (something like this)<br />echo shuffleString("World!", "Hello "); // &gt; 'Hello do!lrW' (something like this)</span></code></div>
  </div>
 </div>
  <div class="note" id="72030">  <div class="votes">
    <div id="Vu72030">
    <a href="/manual/vote-note.php?id=72030&amp;page=function.str-shuffle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72030">
    <a href="/manual/vote-note.php?id=72030&amp;page=function.str-shuffle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72030" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#72030" class="name">
  <strong class="user"><em>dzafel at op dot pl</em></strong></a><a class="genanchor" href="#72030"> &para;</a><div class="date" title="2006-12-29 01:16"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72030">
<div class="phpcode"><code><span class="html">Very, very simple random password generator, without using rand() function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">random_password</span><span class="keyword">(</span><span class="default">$chars </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">) {<br />   </span><span class="default">$letters </span><span class="keyword">= </span><span class="string">'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'</span><span class="keyword">;<br />   return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$letters</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$chars</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.str-shuffle&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-shuffle.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
