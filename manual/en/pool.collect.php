<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Pool::collect - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pool.collect.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pool.collect.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pool.collect.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pool.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.pool.php">
 <link rel="next" href="https://www.php.net/manual/en/pool.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pool.collect.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pool.collect.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pool.collect.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pool.collect.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pool.collect.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pool.collect.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pool.collect.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pool.collect.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pool.collect.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pool.collect.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pool.collect.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Collect references to completed tasks" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Pool::collect - Manual" />
<meta name="twitter:description" content="Collect references to completed tasks" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Pool::collect - Manual" />
<meta itemprop="description" content="Collect references to completed tasks" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Collect references to completed tasks" />

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
        <a href="pool.construct.php">
          Pool::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.pool.php">
          &laquo; Pool        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.pthreads.php'>pthreads</a></li>      <li><a href='class.pool.php'>Pool</a></li>      </ul>
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
            <option value='en/pool.collect.php' selected="selected">English</option>
            <option value='de/pool.collect.php'>German</option>
            <option value='es/pool.collect.php'>Spanish</option>
            <option value='fr/pool.collect.php'>French</option>
            <option value='it/pool.collect.php'>Italian</option>
            <option value='ja/pool.collect.php'>Japanese</option>
            <option value='pt_BR/pool.collect.php'>Brazilian Portuguese</option>
            <option value='ru/pool.collect.php'>Russian</option>
            <option value='tr/pool.collect.php'>Turkish</option>
            <option value='uk/pool.collect.php'>Ukrainian</option>
            <option value='zh/pool.collect.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pool.collect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Pool::collect</h1>
  <p class="verinfo">(PECL pthreads &gt;= 2.0.0)</p><p class="refpurpose"><span class="refname">Pool::collect</span> &mdash; <span class="dc-title">Collect references to completed tasks</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-pool.collect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Pool::collect</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type Callable">Callable</a></span> <code class="parameter">$collector</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Allows the pool to collect references determined to be garbage by the
   optionally given collector.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-pool.collect-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">collector</code></dt>
    <dd>
     <p class="para">
      A Callable collector that returns a boolean on whether the task can be
      collected or not. Only in rare cases should a custom collector need to
      be used.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-pool.collect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The number of remaining tasks in the pool to be collected.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-pool.collect-changelog">
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
       <td>PECL pthreads 3.0.0</td>
       <td>
        An integer is now returned, and the <code class="parameter">collector</code>
        parameter is now optional.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-pool.collect-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3636">
    <p><strong>Example #1 A basic example of <span class="methodname"><strong>Pool::collect()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$pool </span><span style="color: #007700">= new </span><span style="color: #0000BB">Pool</span><span style="color: #007700">(</span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /><br />for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">15</span><span style="color: #007700">; ++</span><span style="color: #0000BB">$i</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$pool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">submit</span><span style="color: #007700">(new class extends </span><span style="color: #0000BB">Threaded </span><span style="color: #007700">{});<br />}<br /><br />while (</span><span style="color: #0000BB">$pool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">collect</span><span style="color: #007700">()); </span><span style="color: #FF8000">// blocks until all tasks have finished executing<br /><br /></span><span style="color: #0000BB">$pool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">shutdown</span><span style="color: #007700">();</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pthreads/pool/collect.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpool.collect%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pool.collect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pool.collect.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125634">  <div class="votes">
    <div id="Vu125634">
    <a href="/manual/vote-note.php?id=125634&amp;page=pool.collect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125634">
    <a href="/manual/vote-note.php?id=125634&amp;page=pool.collect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125634" title="100% like this...">
    3
    </div>
  </div>
  <a href="#125634" class="name">
  <strong class="user"><em>meadowsjared at gmail dot com</em></strong></a><a class="genanchor" href="#125634"> &para;</a><div class="date" title="2020-12-29 06:00"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125634">
<div class="phpcode"><code><span class="html">In this example, it shows how to use a Threaded with a pool to get an array of results, using pThreads v3.2.1 and php 7.3.23<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestWork </span><span class="keyword">extends </span><span class="default">Threaded </span><span class="keyword">{<br /></span><span class="comment">//updated version that works with pThreads v3.2.1 and php 7.3.23<br />    </span><span class="keyword">protected </span><span class="default">$complete</span><span class="keyword">;<br />    </span><span class="comment">//$pData is the data sent to your worker thread to do it's job.<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$pData</span><span class="keyword">) {<br />        </span><span class="comment">//transfer all the variables to local variables<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">testData </span><span class="keyword">= </span><span class="default">$pData</span><span class="keyword">;<br />    }<br />    </span><span class="comment">//This is where all of your work will be done.<br />    </span><span class="keyword">public function </span><span class="default">run</span><span class="keyword">() {<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">2000000</span><span class="keyword">); </span><span class="comment">//sleep 2 seconds to simulate a large job<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">isDone</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">ExamplePool </span><span class="keyword">extends </span><span class="default">Pool </span><span class="keyword">{<br />    public </span><span class="default">$data </span><span class="keyword">= array(); </span><span class="comment">// used to return data after we're done<br />    </span><span class="keyword">private </span><span class="default">$numTasks </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="comment">// counter used to know when we're done<br />    /**<br />     * override the submit function from the parent<br />     * to keep track of our jobs<br />     */<br />    </span><span class="keyword">public function </span><span class="default">submit</span><span class="keyword">(</span><span class="default">Threaded $task</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numTasks</span><span class="keyword">++;<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">submit</span><span class="keyword">(</span><span class="default">$task</span><span class="keyword">);<br />    }<br />    </span><span class="comment">/**<br />     * used to wait until all workers are done<br />     */<br />    </span><span class="keyword">public function </span><span class="default">process</span><span class="keyword">() {<br />        </span><span class="comment">// Run this loop as long as we have<br />        // jobs in the pool<br />        </span><span class="keyword">while (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">) &lt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numTasks</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">collect</span><span class="keyword">(function (</span><span class="default">TestWork $task</span><span class="keyword">) {<br />                </span><span class="comment">// If a task was marked as done, collect its results<br />                </span><span class="keyword">if (</span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isDone</span><span class="keyword">()) {<br />                    </span><span class="default">$tmpObj </span><span class="keyword">= new </span><span class="default">stdclass</span><span class="keyword">();<br />                    </span><span class="default">$tmpObj</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />                    </span><span class="comment">//this is how you get your completed data back out [accessed by $pool-&gt;process()]<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[] = </span><span class="default">$tmpObj</span><span class="keyword">;<br />                }<br />                return </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isDone</span><span class="keyword">();<br />            });<br />        }<br />        </span><span class="comment">// All jobs are done<br />        // we can shutdown the pool<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shutdown</span><span class="keyword">();<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$pool </span><span class="keyword">= new </span><span class="default">ExamplePool</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$testData </span><span class="keyword">= </span><span class="string">'asdf'</span><span class="keyword">;<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">5</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">submit</span><span class="keyword">(new </span><span class="default">TestWork</span><span class="keyword">(</span><span class="default">$testData</span><span class="keyword">));<br />}<br /></span><span class="default">$retArr </span><span class="keyword">= </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">process</span><span class="keyword">(); </span><span class="comment">//get all of the results<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$retArr</span><span class="keyword">); </span><span class="comment">//return the array of results (and maybe errors)<br /></span><span class="keyword">echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116410">  <div class="votes">
    <div id="Vu116410">
    <a href="/manual/vote-note.php?id=116410&amp;page=pool.collect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116410">
    <a href="/manual/vote-note.php?id=116410&amp;page=pool.collect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116410" title="83% like this...">
    4
    </div>
  </div>
  <a href="#116410" class="name">
  <strong class="user"><em>your dot brother dot t at hotmail dot com</em></strong></a><a class="genanchor" href="#116410"> &para;</a><div class="date" title="2014-12-29 09:33"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116410">
<div class="phpcode"><code><span class="html">The example code crashes and made me waste 2 working days<br />First of all, `Stackable` has no attribute named $worker or it's access method made it inaccessible.<br /><br />Secondly, `Stackable` also doesn't have `getThreadId()` . It's best practice to use `Thread` class for realization of a thread since it has more control functions. It's better to use `Stackable` for object storage and use it's `run()` as its initialization.<br /><br />The working example is<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">MyWork </span><span class="keyword">extends </span><span class="default">Thread </span><span class="keyword">{<br />        protected </span><span class="default">$complete</span><span class="keyword">;<br /><br />        public function </span><span class="default">__construct</span><span class="keyword">() {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        public function </span><span class="default">run</span><span class="keyword">() {<br />            </span><span class="default">printf</span><span class="keyword">(<br />                </span><span class="string">"Hello from %s in Thread #%lu\n"</span><span class="keyword">,<br />                </span><span class="default">__CLASS__</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getThreadId</span><span class="keyword">());<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        }<br /><br />        public function </span><span class="default">isComplete</span><span class="keyword">() {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />        }<br />    }<br /><br />    class </span><span class="default">Something </span><span class="keyword">{}<br /><br />    class </span><span class="default">MyWorker </span><span class="keyword">extends </span><span class="default">Worker </span><span class="keyword">{<br /><br />        public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">Something $something</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">something </span><span class="keyword">= </span><span class="default">$something</span><span class="keyword">;<br />        }<br /><br />        public function </span><span class="default">run</span><span class="keyword">() {<br />            </span><span class="comment">/** ... **/<br />        </span><span class="keyword">}<br />    }<br /><br />    </span><span class="default">$pool </span><span class="keyword">= new </span><span class="default">Pool</span><span class="keyword">(</span><span class="default">8</span><span class="keyword">, </span><span class="default">\MyWorker</span><span class="keyword">::class, [new </span><span class="default">Something</span><span class="keyword">()]);<br />    </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">submit</span><span class="keyword">(new </span><span class="default">MyWork</span><span class="keyword">());<br /><br />    </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">1000</span><span class="keyword">);<br /><br />    </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">collect</span><span class="keyword">(function(</span><span class="default">$work</span><span class="keyword">){<br />        return </span><span class="default">$work</span><span class="keyword">-&gt;</span><span class="default">isComplete</span><span class="keyword">();<br />    });<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$pool</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118995">  <div class="votes">
    <div id="Vu118995">
    <a href="/manual/vote-note.php?id=118995&amp;page=pool.collect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118995">
    <a href="/manual/vote-note.php?id=118995&amp;page=pool.collect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118995" title="71% like this...">
    3
    </div>
  </div>
  <a href="#118995" class="name">
  <strong class="user"><em>meadowsjared at gmail dot com</em></strong></a><a class="genanchor" href="#118995"> &para;</a><div class="date" title="2016-03-14 07:13"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118995">
<div class="phpcode"><code><span class="html">Please note, when using the collect function, it's important that you extend the pool class so you can keep checking for finished threads until they're all done.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestWork </span><span class="keyword">extends </span><span class="default">Threaded </span><span class="keyword">{<br />    protected </span><span class="default">$complete</span><span class="keyword">;<br />    </span><span class="comment">//$pData is the data sent to your worker thread to do it's job.<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$pData</span><span class="keyword">){<br />        </span><span class="comment">//transfer all the variables to local variables<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">testData </span><span class="keyword">= </span><span class="default">$pData</span><span class="keyword">;<br />    }<br />    </span><span class="comment">//This is where all of your work will be done.<br />    </span><span class="keyword">public function </span><span class="default">run</span><span class="keyword">(){<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">2000000</span><span class="keyword">); </span><span class="comment">//sleep 2 seconds to simulate a large job<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">isGarbage</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">ExamplePool </span><span class="keyword">extends </span><span class="default">Pool<br /></span><span class="keyword">{<br />    public </span><span class="default">$data </span><span class="keyword">= array();<br />    public function </span><span class="default">process</span><span class="keyword">()<br />    {<br />        </span><span class="comment">// Run this loop as long as we have<br />        // jobs in the pool<br />        </span><span class="keyword">while (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">work</span><span class="keyword">)) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">collect</span><span class="keyword">(function (</span><span class="default">TestWork $task</span><span class="keyword">) {<br />                </span><span class="comment">// If a task was marked as done<br />                // collect its results<br />                </span><span class="keyword">if (</span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isGarbage</span><span class="keyword">()) {<br />                    </span><span class="default">$tmpObj </span><span class="keyword">= new </span><span class="default">stdclass</span><span class="keyword">();<br />                    </span><span class="default">$tmpObj</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />                    </span><span class="comment">//this is how you get your completed data back out [accessed by $pool-&gt;process()]<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[] = </span><span class="default">$tmpObj</span><span class="keyword">;<br />                }<br />                return </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isGarbage</span><span class="keyword">();<br />            });<br />        }<br />        </span><span class="comment">// All jobs are done<br />        // we can shutdown the pool<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shutdown</span><span class="keyword">();<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$pool </span><span class="keyword">= new </span><span class="default">ExamplePool</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$testData </span><span class="keyword">= </span><span class="string">'asdf'</span><span class="keyword">;<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">5</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">submit</span><span class="keyword">(new </span><span class="default">TestWork</span><span class="keyword">(</span><span class="default">$testData</span><span class="keyword">));<br />}<br /></span><span class="default">$retArr </span><span class="keyword">= </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">process</span><span class="keyword">(); </span><span class="comment">//get all of the results<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$retArr</span><span class="keyword">); </span><span class="comment">//return the array of results (and maybe errors)<br /></span><span class="keyword">echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121965">  <div class="votes">
    <div id="Vu121965">
    <a href="/manual/vote-note.php?id=121965&amp;page=pool.collect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121965">
    <a href="/manual/vote-note.php?id=121965&amp;page=pool.collect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121965" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121965" class="name">
  <strong class="user"><em>l00k at protonmail dot com</em></strong></a><a class="genanchor" href="#121965"> &para;</a><div class="date" title="2017-12-02 04:05"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121965">
<div class="phpcode"><code><span class="html">This example demonstrates various aspects of MTP with pthreads - esspecially worth of note is bidirectional communication with child threads.<br />I could not find anything about that so I would like to present you my research result.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Model<br /></span><span class="keyword">{<br />    <br />    public </span><span class="default">$id</span><span class="keyword">;<br />    public </span><span class="default">$value</span><span class="keyword">;<br />    <br />}<br /><br />class </span><span class="default">Connection<br />    </span><span class="keyword">extends </span><span class="default">Worker<br /></span><span class="keyword">{<br />    <br />    protected static </span><span class="default">$link</span><span class="keyword">;<br />    <br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$hostname</span><span class="keyword">, </span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">$database</span><span class="keyword">, </span><span class="default">$port </span><span class="keyword">= </span><span class="default">3306</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">hostname </span><span class="keyword">= </span><span class="default">$hostname</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">username </span><span class="keyword">= </span><span class="default">$username</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">password </span><span class="keyword">= </span><span class="default">$password</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">database </span><span class="keyword">= </span><span class="default">$database</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">port </span><span class="keyword">= </span><span class="default">$port</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">getConnection</span><span class="keyword">()<br />    {<br />        if(!</span><span class="default">self</span><span class="keyword">::</span><span class="default">$link</span><span class="keyword">)<br />        {<br />            echo </span><span class="string">'Thread: '</span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getThreadId</span><span class="keyword">() .</span><span class="string">" Connecting to db\n"</span><span class="keyword">;<br />            </span><span class="default">self</span><span class="keyword">::</span><span class="default">$link </span><span class="keyword">= new </span><span class="default">\PDO</span><span class="keyword">(...);<br />        }<br />        <br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$link</span><span class="keyword">;<br />    }<br />    <br />}<br /><br /></span><span class="comment">/** @property Connection $worker */<br /></span><span class="keyword">class </span><span class="default">QueryTask<br />    </span><span class="keyword">extends </span><span class="default">Threaded<br /></span><span class="keyword">{<br />    <br />    public </span><span class="default">$data</span><span class="keyword">;<br />    public </span><span class="default">$result</span><span class="keyword">;<br />    <br />    protected </span><span class="default">$_complete</span><span class="keyword">;<br />    <br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">Model $data</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_complete </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">run</span><span class="keyword">()<br />    {<br />        </span><span class="comment">/** @var \PDO $pdo */<br />        </span><span class="default">$pdo </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">worker</span><span class="keyword">-&gt;</span><span class="default">getConnection</span><span class="keyword">();<br />        <br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="string">'Thread: '</span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">worker</span><span class="keyword">-&gt;</span><span class="default">getThreadId</span><span class="keyword">() .</span><span class="string">' Job: '</span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">.</span><span class="string">' Data: '</span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">;<br />        <br />        </span><span class="default">$t </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        <br />        </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"<br />            INSERT INTO `test` (`id`, `text`) VALUES (NULL, '"</span><span class="keyword">. </span><span class="default">$text </span><span class="keyword">.</span><span class="string">"')<br />        "</span><span class="keyword">);<br />        </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />        <br />        </span><span class="default">$dt </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$t</span><span class="keyword">;<br />        <br />        </span><span class="default">$result </span><span class="keyword">= (int) </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">rowCount</span><span class="keyword">();<br />        <br />        echo </span><span class="default">$text </span><span class="keyword">.</span><span class="string">' Result: '</span><span class="keyword">. </span><span class="default">$result </span><span class="keyword">.</span><span class="string">' Exec time: '</span><span class="keyword">. </span><span class="default">$dt </span><span class="keyword">.</span><span class="string">"s\n"</span><span class="keyword">;<br />        <br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">result </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">isGarbage</span><span class="keyword">() : </span><span class="default">bool<br />    </span><span class="keyword">{<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_complete</span><span class="keyword">;<br />    }<br />    <br />}<br /><br /></span><span class="default">$t </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// uruchomienie<br /></span><span class="default">$pool </span><span class="keyword">= new </span><span class="default">Pool</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">, </span><span class="string">'Connection'</span><span class="keyword">, [ </span><span class="string">'localhost'</span><span class="keyword">, </span><span class="string">'root'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">, </span><span class="string">'test' </span><span class="keyword">]);<br /><br /></span><span class="comment">// zadania<br /></span><span class="default">$tasks </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br /><br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$tasks</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">)<br />{<br />    </span><span class="default">$object </span><span class="keyword">= new </span><span class="default">Model</span><span class="keyword">();<br />    </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">;<br />    </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">();<br /><br />    </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">submit</span><span class="keyword">(new </span><span class="default">QueryTask</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">));<br />}<br /><br /></span><span class="comment">// oczekiwanie na zakonczenie<br /></span><span class="default">$data </span><span class="keyword">= [];<br /><br />while(</span><span class="default">1</span><span class="keyword">)<br />{<br />    </span><span class="default">$newData </span><span class="keyword">= [];<br /><br />    </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">collect</span><span class="keyword">(function(</span><span class="default">QueryTask $task</span><span class="keyword">) use (&amp;</span><span class="default">$newData</span><span class="keyword">) {<br />        if(</span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isGarbage</span><span class="keyword">())<br />        {<br />            </span><span class="default">$tmpObj </span><span class="keyword">= new </span><span class="default">stdclass</span><span class="keyword">();<br />            </span><span class="default">$tmpObj</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />            <br />            </span><span class="default">$newData</span><span class="keyword">[ </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">] = </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">;<br />        }<br />        <br />        return </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isGarbage</span><span class="keyword">();<br />    });<br />    <br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$newData</span><span class="keyword">);<br />    <br />    if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) == </span><span class="default">$tasks</span><span class="keyword">)<br />        break;<br />    <br />    </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">100000</span><span class="keyword">);<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Result:<br />Thread: 6796 Connecting to db<br />Thread: 3156 Connecting to db<br />Thread: 9040 Connecting to db<br />Thread: 7748 Connecting to db<br />Thread: 8836 Connecting to db<br />Job: 0 Done in: 0.0070011615753174s<br />Job: 4 Done in: 0.0069999694824219s<br />Job: 2 Done in: 0.0090010166168213s<br />Job: 3 Done in: 0.0090010166168213s<br />Job: 1 Done in: 0.003000020980835s<br />Job: 5 Done in: 0.0069999694824219s<br />Job: 7 Done in: 0.0079998970031738s<br />Job: 6 Done in: 0.0049998760223389s<br />Job: 9 Done in: 0.0079998970031738s<br />Job: 8 Done in: 0.0069999694824219s<br /><br />array(10) {<br />  [0] =&gt;<br />  int(17730)<br />  [1] =&gt;<br />  int(18771)<br />  [2] =&gt;<br />  int(12944)<br />  [3] =&gt;<br />  int(6025)<br />  [4] =&gt;<br />  int(29582)<br />  [5] =&gt;<br />  int(10159)<br />  [6] =&gt;<br />  int(26556)<br />  [7] =&gt;<br />  int(9029)<br />  [8] =&gt;<br />  int(15002)<br />  [9] =&gt;<br />  int(4043)<br />}<br /><br />Things worth noting here:<br />1. Constructing of 5 workers for 10 tasks. 5 last task are runned on existing threads with already set up connection to db.<br />2. You can "send" data to thread by creating new task and submiting it.<br />3. You can retrive result by collect function.<br />4. You can pass simple object to task constructor.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pool.collect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pool.collect.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.pool.php">Pool</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="pool.collect.php" title="collect">collect</a>
                        </li>
                                                <li class="">
                            <a href="pool.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="pool.resize.php" title="resize">resize</a>
                        </li>
                                                <li class="">
                            <a href="pool.shutdown.php" title="shutdown">shutdown</a>
                        </li>
                                                <li class="">
                            <a href="pool.submit.php" title="submit">submit</a>
                        </li>
                                                <li class="">
                            <a href="pool.submitTo.php" title="submitTo">submitTo</a>
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
