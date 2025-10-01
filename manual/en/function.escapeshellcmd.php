<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: escapeshellcmd - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.escapeshellcmd.php">
 <link rel="shorturl" href="https://www.php.net/escapeshellcmd">
 <link rel="alternate" href="https://www.php.net/escapeshellcmd" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.escapeshellarg.php">
 <link rel="next" href="https://www.php.net/manual/en/function.exec.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.escapeshellcmd.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.escapeshellcmd.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.escapeshellcmd.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.escapeshellcmd.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.escapeshellcmd.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.escapeshellcmd.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.escapeshellcmd.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.escapeshellcmd.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.escapeshellcmd.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.escapeshellcmd.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.escapeshellcmd.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Escape shell metacharacters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: escapeshellcmd - Manual" />
<meta name="twitter:description" content="Escape shell metacharacters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: escapeshellcmd - Manual" />
<meta itemprop="description" content="Escape shell metacharacters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Escape shell metacharacters" />

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
        <a href="function.exec.php">
          exec &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.escapeshellarg.php">
          &laquo; escapeshellarg        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.exec.php'>Program execution</a></li>      <li><a href='ref.exec.php'>Program execution Functions</a></li>      </ul>
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
            <option value='en/function.escapeshellcmd.php' selected="selected">English</option>
            <option value='de/function.escapeshellcmd.php'>German</option>
            <option value='es/function.escapeshellcmd.php'>Spanish</option>
            <option value='fr/function.escapeshellcmd.php'>French</option>
            <option value='it/function.escapeshellcmd.php'>Italian</option>
            <option value='ja/function.escapeshellcmd.php'>Japanese</option>
            <option value='pt_BR/function.escapeshellcmd.php'>Brazilian Portuguese</option>
            <option value='ru/function.escapeshellcmd.php'>Russian</option>
            <option value='tr/function.escapeshellcmd.php'>Turkish</option>
            <option value='uk/function.escapeshellcmd.php'>Ukrainian</option>
            <option value='zh/function.escapeshellcmd.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.escapeshellcmd" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">escapeshellcmd</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">escapeshellcmd</span> &mdash; <span class="dc-title">Escape shell metacharacters</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.escapeshellcmd-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>escapeshellcmd</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$command</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>escapeshellcmd()</strong></span> escapes any characters in a
   string that might be used to trick a shell command into executing
   arbitrary commands.  This function should be used to make sure
   that any data coming from user input is escaped before this data
   is passed to the <span class="function"><a href="function.exec.php" class="function">exec()</a></span> or
   <span class="function"><a href="function.system.php" class="function">system()</a></span> functions, or to the <a href="language.operators.execution.php" class="link">backtick
   operator</a>.
  </p>
  <p class="para">
   Following characters are preceded by a backslash:
   <code class="literal">&amp;#;`|*?~&lt;&gt;^()[]{}$\</code>, <code class="literal">\x0A</code>
   and <code class="literal">\xFF</code>. <code class="literal">&#039;</code> and <code class="literal">&quot;</code>
   are escaped only if they are not paired. On Windows, all these characters
   plus <code class="literal">%</code> and <code class="literal">!</code> are preceded by a caret
   (<code class="literal">^</code>).
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.escapeshellcmd-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">command</code></dt>
     <dd>
      <p class="para">
       The command that will be escaped.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.escapeshellcmd-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The escaped string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.escapeshellcmd-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3601">
    <p><strong>Example #1 <span class="function"><strong>escapeshellcmd()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// We allow arbitrary number of arguments intentionally here.<br /></span><span style="color: #0000BB">$command </span><span style="color: #007700">= </span><span style="color: #DD0000">'./configure '</span><span style="color: #007700">.</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'configure_options'</span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB">$escaped_command </span><span style="color: #007700">= </span><span style="color: #0000BB">escapeshellcmd</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">);<br /> <br /></span><span style="color: #0000BB">system</span><span style="color: #007700">(</span><span style="color: #0000BB">$escaped_command</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.escapeshellcmd-notes">
  <h3 class="title">Notes</h3>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="para">
     <span class="function"><strong>escapeshellcmd()</strong></span> should be used on the whole
     command string, and it still allows the attacker to pass
     arbitrary number of arguments. For escaping a single argument 
     <span class="function"><a href="function.escapeshellarg.php" class="function">escapeshellarg()</a></span> should be used instead.
    </p>
   </div>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="para">
     Spaces will not be escaped by <span class="function"><strong>escapeshellcmd()</strong></span>
     which can be problematic on Windows with paths like:
     <code class="literal">C:\Program Files\ProgramName\program.exe</code>.
     This can be mitigated using the following code snippet:
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$cmd </span><span style="color: #007700">= </span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'`(?&lt;!^) `'</span><span style="color: #007700">, </span><span style="color: #DD0000">'^ '</span><span style="color: #007700">, </span><span style="color: #0000BB">escapeshellcmd</span><span style="color: #007700">(</span><span style="color: #0000BB">$cmd</span><span style="color: #007700">));</span></span></code></div>
    </div>

    </p>
   </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.escapeshellcmd-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.escapeshellarg.php" class="function" rel="rdfs-seeAlso">escapeshellarg()</a> - Escape a string to be used as a shell argument</span></li>
    <li><span class="function"><a href="function.exec.php" class="function" rel="rdfs-seeAlso">exec()</a> - Execute an external program</span></li>
    <li><span class="function"><a href="function.popen.php" class="function" rel="rdfs-seeAlso">popen()</a> - Opens process file pointer</span></li>
    <li><span class="function"><a href="function.system.php" class="function" rel="rdfs-seeAlso">system()</a> - Execute an external program and display the output</span></li>
    <li><a href="language.operators.execution.php" class="link">backtick operator</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/functions/escapeshellcmd.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.escapeshellcmd%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.escapeshellcmd&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.escapeshellcmd.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102152">  <div class="votes">
    <div id="Vu102152">
    <a href="/manual/vote-note.php?id=102152&amp;page=function.escapeshellcmd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102152">
    <a href="/manual/vote-note.php?id=102152&amp;page=function.escapeshellcmd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102152" title="60% like this...">
    10
    </div>
  </div>
  <a href="#102152" class="name">
  <strong class="user"><em>nicholas at nicholaswilson dot me dot uk</em></strong></a><a class="genanchor" href="#102152"> &para;</a><div class="date" title="2011-01-29 07:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102152">
<div class="phpcode"><code><span class="html">There is a quirk to be aware of regarding use of echo. If you have a command which you want to execute which takes input from STDIN, you would normally do:
<br />
<br /><span class="default">&lt;?php $output </span><span class="keyword">= </span><span class="default">shell_exec</span><span class="keyword">(</span><span class="string">"echo </span><span class="default">$input</span><span class="string"> | /the/command"</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />Unfortunately, this is a *bad idea* and will make your script unportable, providing a very hard-to-trace bug on some systems. Depending on how the server is set up, /bin/sh will either call /bin/bash or /bin/dash, and these have very different versions of echo. Never use echo; use printf instead which is consistent. How do you escape for printf? Do this:
<br />
<br /><span class="default">&lt;?php
<br />$input </span><span class="keyword">= </span><span class="string">'string to be passed *exactly* to the command'</span><span class="keyword">;
<br /></span><span class="comment">//Escape only what is needed to get by PHP's parser; we want
<br />//the string data PHP is holding in its buffer to be passed
<br />//exactly to stdin buffer of the command.
<br /></span><span class="default">$cmd </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'\\'</span><span class="keyword">, </span><span class="string">'%'</span><span class="keyword">), array(</span><span class="string">'\\\\'</span><span class="keyword">, </span><span class="string">'%%'</span><span class="keyword">), </span><span class="default">$input</span><span class="keyword">);
<br /></span><span class="default">$cmd </span><span class="keyword">= </span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">);
<br />
<br /></span><span class="default">$output </span><span class="keyword">= </span><span class="default">shell_exec</span><span class="keyword">(</span><span class="string">"printf </span><span class="default">$cmd</span><span class="string"> | /path/to/command"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />For the paranoid, this torture test verifies that both shell escaping and printf's own escaping are handled correctly. Use with confidence!
<br />
<br /><span class="default">&lt;?php
<br />
<br />$test </span><span class="keyword">= </span><span class="string">'stuff bash interprets, space: # &amp; ; ` | * ? ~ &lt; &gt; ^ ( ) [ ] { } $ \ \x0A \xFF. \' " %'</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">.
<br />        </span><span class="string">'stuff bash interprets, no space: #&amp;;`|*?~&lt;&gt;^()[]{}$\\x0A\xFF.\'\"%'</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">.
<br />        </span><span class="string">'stuff bash interprets, with leading backslash: \# \&amp; \; \` \| \* \? \~ \&lt; \&gt; \^ \( \) \[ \] \{ \} \$ \\\ \\\x0A \\\xFF. \\\' \" \%'</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">.
<br />        </span><span class="string">'printf codes: % \ (used to form %.0#-*+d, or \\ \a \b \f \n \r \t \v \" \? \062 \0062 \x032 \u0032 and \U00000032)'</span><span class="keyword">;
<br />
<br />echo </span><span class="string">"These are the strings we are testing with:"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">.</span><span class="default">$test</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;
<br /></span><span class="default">$cmd </span><span class="keyword">= </span><span class="default">$test</span><span class="keyword">;
<br /></span><span class="default">$cmd </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'\\'</span><span class="keyword">, </span><span class="string">'%'</span><span class="keyword">), array(</span><span class="string">'\\\\'</span><span class="keyword">, </span><span class="string">'%%'</span><span class="keyword">), </span><span class="default">$test</span><span class="keyword">);
<br /></span><span class="default">$cmd </span><span class="keyword">= </span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">);
<br />
<br />echo </span><span class="default">PHP_EOL</span><span class="keyword">.</span><span class="string">"This is the output using the escaping mechanism given:"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;
<br />echo `</span><span class="string">printf </span><span class="default">$cmd</span><span class="string"> | cat</span><span class="keyword">`.</span><span class="default">PHP_EOL</span><span class="keyword">;
<br />
<br />echo </span><span class="default">PHP_EOL</span><span class="keyword">.</span><span class="string">"They should match exactly"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51827">  <div class="votes">
    <div id="Vu51827">
    <a href="/manual/vote-note.php?id=51827&amp;page=function.escapeshellcmd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51827">
    <a href="/manual/vote-note.php?id=51827&amp;page=function.escapeshellcmd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51827" title="52% like this...">
    1
    </div>
  </div>
  <a href="#51827" class="name">
  <strong class="user"><em>docey</em></strong></a><a class="genanchor" href="#51827"> &para;</a><div class="date" title="2005-04-12 05:56"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51827">
<div class="phpcode"><code><span class="html">the main reason for quoting a command is that it not multiple  command can be joined. i don't know for sure if this is the right syntax but remeber that this can do some nice security breaks. here's one way of how to know exactly what your trying to break into for.<br /><br />normal any user on linux can view almost any directory so:<br />ls / -als will print a complete list of any file in the linux filesystem including its size, security and hidden files as well.<br /><br />now the output would only become known to php and never will the user be able to view this data unless the php script would actual start to print it out. like passtru does!! but a good php coder knows never to use passtru unless not otherwise possible. <br /><br />but what would happen if you can direct the output from ls also from that same commandline to a file in the webroot most webserver still default their base-webroot to /var/www/ so storing it there in text file to download it later and you can simply take coffee while checking wich files can be read by php security mode and then simply use the cp command to copy those to the webroot and download them to your own hard-disk. without a list of the files you can only guess where to copy from! and thats harder then guessing the root password. <br /><br />so if the first command was quoted it is not possible to attach another command because of a syntax error. think of all the thinks you can do once you got a complete list of every file on the filesystem. including mounted once via NFS and others. security starts at keeping the door hidden.<br /><br />also another nice command for hanging the webserver can be "php <span class="default">&lt;?php </span><span class="keyword">while(</span><span class="default">true</span><span class="keyword">){ </span><span class="default">exec</span><span class="keyword">(</span><span class="string">'ls / -als'</span><span class="keyword">); }; </span><span class="default">?&gt;</span>" this keeps creating a file list on the entire filesystem wich not only keeps the hard-disk(s) bussy but also memory and cpu   wich must store the returned list. so keeping in mind not all command accepted from users can be used blind. <br /><br />actualy never accept any command from external sources only proven built-in predefined commands should be executed.</span></code></div>
  </div>
 </div>
  <div class="note" id="98580">  <div class="votes">
    <div id="Vu98580">
    <a href="/manual/vote-note.php?id=98580&amp;page=function.escapeshellcmd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98580">
    <a href="/manual/vote-note.php?id=98580&amp;page=function.escapeshellcmd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98580" title="50% like this...">
    0
    </div>
  </div>
  <a href="#98580" class="name">
  <strong class="user"><em>carlos at wfmh dot org dot pl dot REMOVE dot COM</em></strong></a><a class="genanchor" href="#98580"> &para;</a><div class="date" title="2010-06-24 04:42"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98580">
<div class="phpcode"><code><span class="html">Mind it does not escape ! (exclamation mark). So if you want to i.e. printf() commands for later use in shell (i.e. by pasting to the console) you need to escape all exclamation marks or shell will try to process ! as history reference. This approach shall suffice:
<br />
<br /><span class="default">&lt;?php $scaped </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'!'</span><span class="keyword">, </span><span class="string">'\!'</span><span class="keyword">, </span><span class="default">escapeshellarg</span><span class="keyword">( </span><span class="default">$str </span><span class="keyword">) ); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49527">  <div class="votes">
    <div id="Vu49527">
    <a href="/manual/vote-note.php?id=49527&amp;page=function.escapeshellcmd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49527">
    <a href="/manual/vote-note.php?id=49527&amp;page=function.escapeshellcmd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49527" title="50% like this...">
    0
    </div>
  </div>
  <a href="#49527" class="name">
  <strong class="user"><em>trisk at earthling dot net</em></strong></a><a class="genanchor" href="#49527"> &para;</a><div class="date" title="2005-01-31 10:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49527">
<div class="phpcode"><code><span class="html">This function does not work as shown in the php.net examples.<br /><br />If you put your encoded filename into double-quotes as they suggest, then it will break on certain characters in filenames, such as ampersand.<br /><br />For example if you have a filename called "foo &amp; bar.jpg" and you use this function on it, your resulting filename when double-quoted will produce this and not be found:<br /><br />"foo \&amp; bar.jpg"<br /><br />If you need to have a single argument where spaces are included then do not use this function with added double-quotes, use escapeshellarg() which encloses the whole string in single quotes.<br /><br />I do not understand which purpose this particular function is intended for.  I can't see any use for it, unless you pass it through another function and convert spaces " " to "\ ", which would allow you to use the string directly on the command line.</span></code></div>
  </div>
 </div>
  <div class="note" id="63179">  <div class="votes">
    <div id="Vu63179">
    <a href="/manual/vote-note.php?id=63179&amp;page=function.escapeshellcmd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63179">
    <a href="/manual/vote-note.php?id=63179&amp;page=function.escapeshellcmd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63179" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#63179" class="name">
  <strong class="user"><em>ceejay at trashfactory dot de</em></strong></a><a class="genanchor" href="#63179"> &para;</a><div class="date" title="2006-03-15 04:43"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63179">
<div class="phpcode"><code><span class="html">Well guys, i find it very hard that escapeshellarg and escapeshellcmd are forcely run when passing a command to exec, system or popen, when safe_mode is turned on.<br /><br />Right now, i did not find any working solution to pass commands like this:<br />cmd -arg1 -arg2 "&lt;BLA varname=\"varvalue\" varname1=\"varvalue1\" /&gt;"<br /><br />it is just the case, that the parameter for arg2 which is a string that looks like an HTML-Tag with various attributes set, all attributes of the string in arg2 gets splitted by the whitespaces within. this wont happen with safe_mode turned off, so it must be one of the escapefunctions, that breaks functionality. <br /><br />In order to circumvent this, i have made a temporary solution, which dynamically creates a skriptfile (by fopen), which just contains the whole command with arguments, and then execute that skriptfile. i dont like that solution, but in the other hand, safe_mode cannot be easily turned off on that server.</span></code></div>
  </div>
 </div>
  <div class="note" id="67811">  <div class="votes">
    <div id="Vu67811">
    <a href="/manual/vote-note.php?id=67811&amp;page=function.escapeshellcmd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67811">
    <a href="/manual/vote-note.php?id=67811&amp;page=function.escapeshellcmd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67811" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#67811" class="name">
  <strong class="user"><em>abennett at clarku dot edu</em></strong></a><a class="genanchor" href="#67811"> &para;</a><div class="date" title="2006-07-05 11:59"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67811">
<div class="phpcode"><code><span class="html">I've got a php script that needs to pass a username and password via exec to a perl script.  The problem is valid password characters were getting escaped...<br /><br />Here's a little perl function I wrote to fix it.<br /><br />sub unescape_string {<br />      my $string = shift;<br />      # all these interpolated regex's are slow, so if there's no<br />      # backslash in the string don't bother with it<br />      # index() is faster then a regex<br />      if ( ! index($string,'\\\\') ) {<br />         return $string;<br />      }<br />      my @characters = ('#', '&amp;', ';', '`', '|', '*', '?', '~', '&lt;', '&gt;', '^', '(', ')',<br />                        '[', ']', '{', '}', '$', '\\', ',', ' ', '\x0A', '\xFF' );<br />      my $character;<br />      foreach $character (@characters) {<br />         $character = quotemeta($character);<br />         my $pattern = "\\\\(" . $character . ")";<br />         $string =~ s/$pattern/$1/g;<br />      }<br />      return $string;<br />}<br /><br />Hope this is useful.</span></code></div>
  </div>
 </div>
  <div class="note" id="73169">  <div class="votes">
    <div id="Vu73169">
    <a href="/manual/vote-note.php?id=73169&amp;page=function.escapeshellcmd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73169">
    <a href="/manual/vote-note.php?id=73169&amp;page=function.escapeshellcmd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73169" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#73169" class="name">
  <strong class="user"><em>Leon</em></strong></a><a class="genanchor" href="#73169"> &para;</a><div class="date" title="2007-02-11 04:31"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73169">
<div class="phpcode"><code><span class="html">This function is great -- except when you need to legitimately use an escaped character as part of your command.  The code below leaves the parts of the command that are enclosed within single quotes alone, but escapes the rest eg:<br /><br />"echo Never use the '&lt;blink&gt;' tag ; cat /etc/passwd"<br />becomes:<br />"echo Never use the '&lt;blink&gt;' tag \; cat /etc/passwd"<br />and not:<br />"echo Never use the '\&lt;blink\&gt;' tag \; cat /etc/passwd"<br /><br />i.e, we really want the ';' escaped, but not the HTML tag.  I really needed the code below in order to run the external ImageMagick's 'convert' command properly and safely...<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Escape whole string<br /></span><span class="default">$cmdQ </span><span class="keyword">= </span><span class="default">escapeshellcmd</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">);<br /><br /> </span><span class="comment">// Build array of quoted parts, and the same escaped<br /></span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'/\'[^\']+\'/'</span><span class="keyword">, </span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br /></span><span class="default">$matches </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">);<br /></span><span class="default">$quoted </span><span class="keyword">= array();<br />foreach( </span><span class="default">$matches </span><span class="keyword">as </span><span class="default">$match </span><span class="keyword">)<br />    </span><span class="default">$quoted</span><span class="keyword">[</span><span class="default">escapeshellcmd</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">)] = </span><span class="default">$match</span><span class="keyword">;<br /><br /></span><span class="comment">// Replace sections that were single quoted with original content<br /></span><span class="keyword">foreach( </span><span class="default">$quoted </span><span class="keyword">as </span><span class="default">$search </span><span class="keyword">=&gt; </span><span class="default">$replace </span><span class="keyword">)<br />    </span><span class="default">$cmdQ </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">( </span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$cmdQ </span><span class="keyword">);<br /><br />return </span><span class="default">$cmdQ</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.escapeshellcmd&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.escapeshellcmd.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.exec.php">Program execution Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.escapeshellarg.php" title="escapeshellarg">escapeshellarg</a>
                        </li>
                                                <li class="current">
                            <a href="function.escapeshellcmd.php" title="escapeshellcmd">escapeshellcmd</a>
                        </li>
                                                <li class="">
                            <a href="function.exec.php" title="exec">exec</a>
                        </li>
                                                <li class="">
                            <a href="function.passthru.php" title="passthru">passthru</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-close.php" title="proc_&#8203;close">proc_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-get-status.php" title="proc_&#8203;get_&#8203;status">proc_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-nice.php" title="proc_&#8203;nice">proc_&#8203;nice</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-open.php" title="proc_&#8203;open">proc_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-terminate.php" title="proc_&#8203;terminate">proc_&#8203;terminate</a>
                        </li>
                                                <li class="">
                            <a href="function.shell-exec.php" title="shell_&#8203;exec">shell_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.system.php" title="system">system</a>
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
