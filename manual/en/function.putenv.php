<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: putenv - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.putenv.php">
 <link rel="shorturl" href="https://www.php.net/putenv">
 <link rel="alternate" href="https://www.php.net/putenv" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.info.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.phpversion.php">
 <link rel="next" href="https://www.php.net/manual/en/function.restore-include-path.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.putenv.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.putenv.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.putenv.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.putenv.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.putenv.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.putenv.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.putenv.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.putenv.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.putenv.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.putenv.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.putenv.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sets the value of an environment variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: putenv - Manual" />
<meta name="twitter:description" content="Sets the value of an environment variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: putenv - Manual" />
<meta itemprop="description" content="Sets the value of an environment variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sets the value of an environment variable" />

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
        <a href="function.restore-include-path.php">
          restore_include_path &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.phpversion.php">
          &laquo; phpversion        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.info.php'>PHP Options/Info</a></li>      <li><a href='ref.info.php'>PHP Options/Info Functions</a></li>      </ul>
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
            <option value='en/function.putenv.php' selected="selected">English</option>
            <option value='de/function.putenv.php'>German</option>
            <option value='es/function.putenv.php'>Spanish</option>
            <option value='fr/function.putenv.php'>French</option>
            <option value='it/function.putenv.php'>Italian</option>
            <option value='ja/function.putenv.php'>Japanese</option>
            <option value='pt_BR/function.putenv.php'>Brazilian Portuguese</option>
            <option value='ru/function.putenv.php'>Russian</option>
            <option value='tr/function.putenv.php'>Turkish</option>
            <option value='uk/function.putenv.php'>Ukrainian</option>
            <option value='zh/function.putenv.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.putenv" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">putenv</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">putenv</span> &mdash; <span class="dc-title">Sets the value of an environment variable</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.putenv-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>putenv</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$assignment</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Adds <code class="parameter">assignment</code> to the server environment.  The
   environment variable will only exist for the duration of the current
   request. At the end of the request the environment is restored to its
   original state.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.putenv-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">assignment</code></dt>
     <dd>
      <p class="para">
       The setting, like <code class="literal">&quot;FOO=BAR&quot;</code>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.putenv-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.putenv-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-675">
    <p><strong>Example #1 Setting an environment variable</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />putenv</span><span style="color: #007700">(</span><span style="color: #DD0000">"UNIQID=</span><span style="color: #0000BB">$uniqid</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.putenv-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.getenv.php" class="function" rel="rdfs-seeAlso">getenv()</a> - Gets the value of a single or all environment variables</span></li>
    <li><span class="function"><a href="function.apache-setenv.php" class="function" rel="rdfs-seeAlso">apache_setenv()</a> - Set an Apache subprocess_env variable</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/info/functions/putenv.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.putenv%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.putenv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.putenv.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="98540">  <div class="votes">
    <div id="Vu98540">
    <a href="/manual/vote-note.php?id=98540&amp;page=function.putenv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98540">
    <a href="/manual/vote-note.php?id=98540&amp;page=function.putenv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98540" title="82% like this...">
    79
    </div>
  </div>
  <a href="#98540" class="name">
  <strong class="user"><em>php at keith tyler dot com</em></strong></a><a class="genanchor" href="#98540"> &para;</a><div class="date" title="2010-06-21 05:52"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98540">
<div class="phpcode"><code><span class="html">putenv/getenv, $_ENV, and phpinfo(INFO_ENVIRONMENT) are three completely distinct environment stores. doing putenv("x=y") does not affect $_ENV; but also doing $_ENV["x"]="y" likewise does not affect getenv("x"). And neither affect what is returned in phpinfo().<br /><br />Assuming the USER environment variable is defined as "dave" before running the following:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">print </span><span class="string">"env is: "</span><span class="keyword">.</span><span class="default">$_ENV</span><span class="keyword">[</span><span class="string">"USER"</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="string">"(doing: putenv fred)\n"</span><span class="keyword">;<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"USER=fred"</span><span class="keyword">);<br />print </span><span class="string">"env is: "</span><span class="keyword">.</span><span class="default">$_ENV</span><span class="keyword">[</span><span class="string">"USER"</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="string">"getenv is: "</span><span class="keyword">.</span><span class="default">getenv</span><span class="keyword">(</span><span class="string">"USER"</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="string">"(doing: set _env barney)\n"</span><span class="keyword">;<br /></span><span class="default">$_ENV</span><span class="keyword">[</span><span class="string">"USER"</span><span class="keyword">]=</span><span class="string">"barney"</span><span class="keyword">;<br />print </span><span class="string">"getenv is: "</span><span class="keyword">.</span><span class="default">getenv</span><span class="keyword">(</span><span class="string">"USER"</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="string">"env is: "</span><span class="keyword">.</span><span class="default">$_ENV</span><span class="keyword">[</span><span class="string">"USER"</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">phpinfo</span><span class="keyword">(</span><span class="default">INFO_ENVIRONMENT</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />prints:<br /><br />env is: dave<br />(doing: putenv fred)<br />env is: dave<br />getenv is: fred<br />(doing: set _env barney)<br />getenv is: fred<br />env is: barney<br />phpinfo()<br /><br />Environment<br /><br />Variable =&gt; Value<br />...<br />USER =&gt; dave<br />...</span></code></div>
  </div>
 </div>
  <div class="note" id="73308">  <div class="votes">
    <div id="Vu73308">
    <a href="/manual/vote-note.php?id=73308&amp;page=function.putenv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73308">
    <a href="/manual/vote-note.php?id=73308&amp;page=function.putenv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73308" title="73% like this...">
    36
    </div>
  </div>
  <a href="#73308" class="name">
  <strong class="user"><em>JM</em></strong></a><a class="genanchor" href="#73308"> &para;</a><div class="date" title="2007-02-16 06:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73308">
<div class="phpcode"><code><span class="html">The other problem with the code from av01 at bugfix dot cc is that<br />the behaviour is as per the comments here, not there:<br /><span class="default">&lt;?php<br />putenv</span><span class="keyword">(</span><span class="string">'MYVAR='</span><span class="keyword">); </span><span class="comment">// set MYVAR to an empty value.  It is in the environment<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'MYVAR'</span><span class="keyword">); </span><span class="comment">// unset MYVAR.  It is removed from the environment<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128565">  <div class="votes">
    <div id="Vu128565">
    <a href="/manual/vote-note.php?id=128565&amp;page=function.putenv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128565">
    <a href="/manual/vote-note.php?id=128565&amp;page=function.putenv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128565" title="81% like this...">
    7
    </div>
  </div>
  <a href="#128565" class="name">
  <strong class="user"><em>domger at freenet dot de</em></strong></a><a class="genanchor" href="#128565"> &para;</a><div class="date" title="2023-05-22 12:00"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128565">
<div class="phpcode"><code><span class="html">Values of variables with dots in their names are not output when using getenv(), but are still present and can be explicitly queried.<br /><br />(saw this behaviour using PHP 8.2.4)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// set<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'foo.bar=baz'</span><span class="keyword">);<br /><br /></span><span class="comment">// dump all<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">getenv</span><span class="keyword">());    </span><span class="comment"># &lt;== variable 'foo.bar' NOT included, its value is not dumped<br /><br />// dump explicitely 'foo.bar'<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">getenv</span><span class="keyword">(</span><span class="string">'foo.bar'</span><span class="keyword">));    </span><span class="comment"># works, value 'baz' is shown</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124159">  <div class="votes">
    <div id="Vu124159">
    <a href="/manual/vote-note.php?id=124159&amp;page=function.putenv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124159">
    <a href="/manual/vote-note.php?id=124159&amp;page=function.putenv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124159" title="66% like this...">
    12
    </div>
  </div>
  <a href="#124159" class="name">
  <strong class="user"><em>t7to7</em></strong></a><a class="genanchor" href="#124159"> &para;</a><div class="date" title="2019-09-01 11:17"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124159">
<div class="phpcode"><code><span class="html">White spaces are allowed in environment variable names so :<br /><br /><span class="default">&lt;?php<br />putenv</span><span class="keyword">(</span><span class="string">'U =33'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Is not equivalent to <br /><br /><span class="default">&lt;?php<br />putenv</span><span class="keyword">(</span><span class="string">'U=33'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="8496">  <div class="votes">
    <div id="Vu8496">
    <a href="/manual/vote-note.php?id=8496&amp;page=function.putenv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd8496">
    <a href="/manual/vote-note.php?id=8496&amp;page=function.putenv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V8496" title="63% like this...">
    12
    </div>
  </div>
  <a href="#8496" class="name">
  <strong class="user"><em>david dot boyce at messagingdirect dot comnospam</em></strong></a><a class="genanchor" href="#8496"> &para;</a><div class="date" title="2000-09-13 10:23"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom8496">
<div class="phpcode"><code><span class="html">Environment variables are part of the underlying operating system's
<br />way of doing things, and are used to pass information between a parent
<br />process and its child, as well as to affect the way some internal
<br />functions behave.  They should not be regarded as ordinary PHP
<br />variables.
<br />
<br />A primary purpose of setting environment variables in a PHP script is
<br />so that they are available to processes invoked by that script using
<br />e.g. the system() function, and it's unlikely that they would need to
<br />be changed for other reasons.
<br />
<br />For example, if a particular system command required a special value
<br />of the environment variable LD_LIBRARY_PATH to execute successfully,
<br />then the following code might be used on a *NIX system:
<br />
<br /><span class="default">&lt;?php
<br /> $saved </span><span class="keyword">= </span><span class="default">getenv</span><span class="keyword">(</span><span class="string">"LD_LIBRARY_PATH"</span><span class="keyword">);        </span><span class="comment">// save old value
<br /> </span><span class="default">$newld </span><span class="keyword">= </span><span class="string">"/extra/library/dir:/another/path/to/lib"</span><span class="keyword">;  </span><span class="comment">// extra paths to add
<br /> </span><span class="keyword">if (</span><span class="default">$saved</span><span class="keyword">) { </span><span class="default">$newld </span><span class="keyword">.= </span><span class="string">":</span><span class="default">$saved</span><span class="string">"</span><span class="keyword">; }           </span><span class="comment">// append old paths if any
<br /> </span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"LD_LIBRARY_PATH=</span><span class="default">$newld</span><span class="string">"</span><span class="keyword">);        </span><span class="comment">// set new value
<br /> </span><span class="default">system</span><span class="keyword">(</span><span class="string">"mycommand -with args"</span><span class="keyword">);        </span><span class="comment">// do system command; 
<br />                        // mycommand is loaded using
<br />                        // libs in the new path list
<br /> </span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"LD_LIBRARY_PATH=</span><span class="default">$saved</span><span class="string">"</span><span class="keyword">);        </span><span class="comment">// restore old value
<br /></span><span class="default">?&gt;
<br /></span>
<br />It will usually be appropriate to restore the old value after use;
<br />LD_LIBRARY_PATH is a particularly good example of a variable which it
<br />is important to restore immediately, as it is used by internal
<br />functions.
<br />
<br />If php.ini configuration allows, the values of environment variables
<br />are made available as PHP global variables on entry to a script, but
<br />these global variables are merely copies and do not track the actual
<br />environment variables once the script is entered.  Changing
<br />$REMOTE_ADDR (or even $HTTP_ENV_VARS["REMOTE_ADDR"]) should not be
<br />expected to affect the actual environment variable; this is why
<br />putenv() is needed.
<br />
<br />Finally, do not rely on environment variables maintaining the same
<br />value from one script invocation to the next, especially if you have
<br />used putenv().  The result depends on many factors, such as CGI vs
<br />apache module, and the exact way in which the environment is
<br />manipulated before entering the script.</span></code></div>
  </div>
 </div>
  <div class="note" id="108085">  <div class="votes">
    <div id="Vu108085">
    <a href="/manual/vote-note.php?id=108085&amp;page=function.putenv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108085">
    <a href="/manual/vote-note.php?id=108085&amp;page=function.putenv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108085" title="63% like this...">
    8
    </div>
  </div>
  <a href="#108085" class="name">
  <strong class="user"><em>Anonymous Coder</em></strong></a><a class="genanchor" href="#108085"> &para;</a><div class="date" title="2012-03-27 06:28"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108085">
<div class="phpcode"><code><span class="html">It's the putenv() type of environment variables that get passed to a child process executed via exec().<br /><br />If you need to delete an existing environment variable so the child process does not see it, use:<br /><br />putenv('FOOBAR');<br /><br />That is, leave out both the "=" and a value.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.putenv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.putenv.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.info.php">PHP Options/Info Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.assert.php" title="assert">assert</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-get-process-title.php" title="cli_&#8203;get_&#8203;process_&#8203;title">cli_&#8203;get_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-set-process-title.php" title="cli_&#8203;set_&#8203;process_&#8203;title">cli_&#8203;set_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.dl.php" title="dl">dl</a>
                        </li>
                                                <li class="">
                            <a href="function.extension-loaded.php" title="extension_&#8203;loaded">extension_&#8203;loaded</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-collect-cycles.php" title="gc_&#8203;collect_&#8203;cycles">gc_&#8203;collect_&#8203;cycles</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-disable.php" title="gc_&#8203;disable">gc_&#8203;disable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enable.php" title="gc_&#8203;enable">gc_&#8203;enable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enabled.php" title="gc_&#8203;enabled">gc_&#8203;enabled</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-mem-caches.php" title="gc_&#8203;mem_&#8203;caches">gc_&#8203;mem_&#8203;caches</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-status.php" title="gc_&#8203;status">gc_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.get-cfg-var.php" title="get_&#8203;cfg_&#8203;var">get_&#8203;cfg_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.get-current-user.php" title="get_&#8203;current_&#8203;user">get_&#8203;current_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-constants.php" title="get_&#8203;defined_&#8203;constants">get_&#8203;defined_&#8203;constants</a>
                        </li>
                                                <li class="">
                            <a href="function.get-extension-funcs.php" title="get_&#8203;extension_&#8203;funcs">get_&#8203;extension_&#8203;funcs</a>
                        </li>
                                                <li class="">
                            <a href="function.get-include-path.php" title="get_&#8203;include_&#8203;path">get_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.get-included-files.php" title="get_&#8203;included_&#8203;files">get_&#8203;included_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-loaded-extensions.php" title="get_&#8203;loaded_&#8203;extensions">get_&#8203;loaded_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.get-required-files.php" title="get_&#8203;required_&#8203;files">get_&#8203;required_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resources.php" title="get_&#8203;resources">get_&#8203;resources</a>
                        </li>
                                                <li class="">
                            <a href="function.getenv.php" title="getenv">getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getlastmod.php" title="getlastmod">getlastmod</a>
                        </li>
                                                <li class="">
                            <a href="function.getmygid.php" title="getmygid">getmygid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyinode.php" title="getmyinode">getmyinode</a>
                        </li>
                                                <li class="">
                            <a href="function.getmypid.php" title="getmypid">getmypid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyuid.php" title="getmyuid">getmyuid</a>
                        </li>
                                                <li class="">
                            <a href="function.getopt.php" title="getopt">getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.getrusage.php" title="getrusage">getrusage</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-alter.php" title="ini_&#8203;alter">ini_&#8203;alter</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get.php" title="ini_&#8203;get">ini_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get-all.php" title="ini_&#8203;get_&#8203;all">ini_&#8203;get_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-parse-quantity.php" title="ini_&#8203;parse_&#8203;quantity">ini_&#8203;parse_&#8203;quantity</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-restore.php" title="ini_&#8203;restore">ini_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-set.php" title="ini_&#8203;set">ini_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-peak-usage.php" title="memory_&#8203;get_&#8203;peak_&#8203;usage">memory_&#8203;get_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-usage.php" title="memory_&#8203;get_&#8203;usage">memory_&#8203;get_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-reset-peak-usage.php" title="memory_&#8203;reset_&#8203;peak_&#8203;usage">memory_&#8203;reset_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-loaded-file.php" title="php_&#8203;ini_&#8203;loaded_&#8203;file">php_&#8203;ini_&#8203;loaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-scanned-files.php" title="php_&#8203;ini_&#8203;scanned_&#8203;files">php_&#8203;ini_&#8203;scanned_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.php-sapi-name.php" title="php_&#8203;sapi_&#8203;name">php_&#8203;sapi_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.php-uname.php" title="php_&#8203;uname">php_&#8203;uname</a>
                        </li>
                                                <li class="">
                            <a href="function.phpcredits.php" title="phpcredits">phpcredits</a>
                        </li>
                                                <li class="">
                            <a href="function.phpinfo.php" title="phpinfo">phpinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.phpversion.php" title="phpversion">phpversion</a>
                        </li>
                                                <li class="current">
                            <a href="function.putenv.php" title="putenv">putenv</a>
                        </li>
                                                <li class="">
                            <a href="function.set-include-path.php" title="set_&#8203;include_&#8203;path">set_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.set-time-limit.php" title="set_&#8203;time_&#8203;limit">set_&#8203;time_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-get-temp-dir.php" title="sys_&#8203;get_&#8203;temp_&#8203;dir">sys_&#8203;get_&#8203;temp_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.version-compare.php" title="version_&#8203;compare">version_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-thread-id.php" title="zend_&#8203;thread_&#8203;id">zend_&#8203;thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-version.php" title="zend_&#8203;version">zend_&#8203;version</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.assert-options.php" title="assert_&#8203;options">assert_&#8203;options</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-gpc.php" title="get_&#8203;magic_&#8203;quotes_&#8203;gpc">get_&#8203;magic_&#8203;quotes_&#8203;gpc</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-runtime.php" title="get_&#8203;magic_&#8203;quotes_&#8203;runtime">get_&#8203;magic_&#8203;quotes_&#8203;runtime</a>
                    </li>
                                    <li class="">
                        <a href="function.restore-include-path.php" title="restore_&#8203;include_&#8203;path">restore_&#8203;include_&#8203;path</a>
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
