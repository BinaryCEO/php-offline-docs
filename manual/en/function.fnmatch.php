<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: fnmatch - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.fnmatch.php">
 <link rel="shorturl" href="https://www.php.net/fnmatch">
 <link rel="alternate" href="https://www.php.net/fnmatch" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.flock.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fopen.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.fnmatch.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.fnmatch.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.fnmatch.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.fnmatch.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.fnmatch.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.fnmatch.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.fnmatch.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.fnmatch.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.fnmatch.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.fnmatch.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.fnmatch.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Match filename against a pattern" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: fnmatch - Manual" />
<meta name="twitter:description" content="Match filename against a pattern" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: fnmatch - Manual" />
<meta itemprop="description" content="Match filename against a pattern" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Match filename against a pattern" />

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
        <a href="function.fopen.php">
          fopen &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.flock.php">
          &laquo; flock        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.filesystem.php'>Filesystem</a></li>      <li><a href='ref.filesystem.php'>Filesystem Functions</a></li>      </ul>
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
            <option value='en/function.fnmatch.php' selected="selected">English</option>
            <option value='de/function.fnmatch.php'>German</option>
            <option value='es/function.fnmatch.php'>Spanish</option>
            <option value='fr/function.fnmatch.php'>French</option>
            <option value='it/function.fnmatch.php'>Italian</option>
            <option value='ja/function.fnmatch.php'>Japanese</option>
            <option value='pt_BR/function.fnmatch.php'>Brazilian Portuguese</option>
            <option value='ru/function.fnmatch.php'>Russian</option>
            <option value='tr/function.fnmatch.php'>Turkish</option>
            <option value='uk/function.fnmatch.php'>Ukrainian</option>
            <option value='zh/function.fnmatch.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.fnmatch" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">fnmatch</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">fnmatch</span> &mdash; <span class="dc-title">Match filename against a pattern</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.fnmatch-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>fnmatch</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>fnmatch()</strong></span> checks if the passed <code class="parameter">filename</code> would
   match the given shell wildcard <code class="parameter">pattern</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.fnmatch-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">pattern</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">pattern</code> to match against. Usually, the <code class="parameter">pattern</code> will contain
       wildcards like <code class="literal">&#039;?&#039;</code> and <code class="literal">&#039;*&#039;</code>.
       <table class="doctable table">
        <caption><strong>
         Wildcards to be used in <code class="parameter">pattern</code> parameter
        </strong></caption>
        
         <thead>
          <tr>
           <th>Wildcard</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>
            <code class="literal">?</code>
           </td>
           <td>
            Question mark will match any single character.
            For example, pattern <code class="literal">&quot;file?.txt&quot;</code> will match <code class="literal">&quot;file1.txt&quot;</code> and
            <code class="literal">&quot;fileA.txt&quot;</code>, but will not match <code class="literal">&quot;file10.txt&quot;</code>.
           </td>
          </tr>

          <tr>
           <td>
            <code class="literal">*</code>
           </td>
           <td>
            Asterisk will match zero or more characters.
            For example, pattern <code class="literal">&quot;foo*.xml&quot;</code> will match <code class="literal">&quot;foo.xml&quot;</code> and
            <code class="literal">&quot;foobar.xml&quot;</code>.
           </td>
          </tr>

          <tr>
           <td>
            <code class="literal">[ ]</code>
           </td>
           <td>
            Square brackets are used to create ranges of ASCII codepoints or sets of characters.
            For example, pattern <code class="literal">&quot;index.php[45]&quot;</code> will match <code class="literal">&quot;index.php4&quot;</code> and
            <code class="literal">&quot;index.php5&quot;</code>, but will not match <code class="literal">&quot;index.phpt&quot;</code>.
            Well known ranges are <code class="literal">[0-9]</code>, <code class="literal">[a-z]</code>, and <code class="literal">[A-Z]</code>.
            Multiple sets and ranges can be used at the same time, for example <code class="literal">[0-9a-zABC]</code>.
           </td>
          </tr>

          <tr>
           <td>
            <code class="literal">!</code>
           </td>
           <td>
            Exclamation mark is used to negate characters within square brackets.
            For example, <code class="literal">&quot;[!A-Z]*.html&quot;</code> will match <code class="literal">&quot;demo.html&quot;</code>, but will not match
            <code class="literal">&quot;Demo.html&quot;</code>.
           </td>
          </tr>

          <tr>
           <td>
            <code class="literal">\</code>
           </td>
           <td>
            Backslash is used to escape special characters.
            For example, <code class="literal">&quot;Name\?&quot;</code> will match <code class="literal">&quot;Name?&quot;</code>, but will not match
            <code class="literal">&quot;Names&quot;</code>.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The tested string. This function is especially useful for filenames,
       but may also be used on regular strings.
      </p>
      <p class="para">
       The average user may be used to shell patterns or at least in their
       simplest form to <code class="literal">&#039;?&#039;</code> and <code class="literal">&#039;*&#039;</code>
       wildcards so using <span class="function"><strong>fnmatch()</strong></span> instead of
       <span class="function"><a href="function.preg-match.php" class="function">preg_match()</a></span> for
       frontend search expression input may be way more convenient for
       non-programming users.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       The value of <code class="parameter">flags</code> can be any combination of 
       the following flags, joined with the
       <a href="language.operators.bitwise.php" class="link">binary OR (|) operator</a>.
       <table class="doctable table">
        <caption><strong>
         A list of possible flags for <span class="function"><strong>fnmatch()</strong></span>
        </strong></caption>
        
         <thead>
          <tr>
           <th><code class="parameter">Flag</code></th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="filesystem.constants.php#constant.fnm-noescape">FNM_NOESCAPE</a></code></strong></td>
           <td>
            Disable backslash escaping.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="filesystem.constants.php#constant.fnm-pathname">FNM_PATHNAME</a></code></strong></td>
           <td>
            Slash in string only matches slash in the given pattern.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="filesystem.constants.php#constant.fnm-period">FNM_PERIOD</a></code></strong></td>
           <td>
            Leading period in string must be exactly matched by period in the given pattern.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="filesystem.constants.php#constant.fnm-casefold">FNM_CASEFOLD</a></code></strong></td>
           <td>
            Caseless match. Part of the GNU extension.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.fnmatch-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if there is a match, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.fnmatch-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2370">
    <p><strong>Example #1 Checking a color name against a shell wildcard pattern</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">fnmatch</span><span style="color: #007700">(</span><span style="color: #DD0000">"*gr[ae]y"</span><span style="color: #007700">, </span><span style="color: #0000BB">$color</span><span style="color: #007700">)) {<br />  echo </span><span style="color: #DD0000">"some form of gray ..."</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.fnmatch-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    For now, this function is not available on non-POSIX compliant systems
    except Windows.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.fnmatch-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.glob.php" class="function" rel="rdfs-seeAlso">glob()</a> - Find pathnames matching a pattern</span></li>
    <li><span class="function"><a href="function.preg-match.php" class="function" rel="rdfs-seeAlso">preg_match()</a> - Perform a regular expression match</span></li>
    <li><span class="function"><a href="function.sscanf.php" class="function" rel="rdfs-seeAlso">sscanf()</a> - Parses input from a string according to a format</span></li>
    <li><span class="function"><a href="function.printf.php" class="function" rel="rdfs-seeAlso">printf()</a> - Output a formatted string</span></li>
    <li><span class="function"><a href="function.sprintf.php" class="function" rel="rdfs-seeAlso">sprintf()</a> - Return a formatted string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/fnmatch.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.fnmatch%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.fnmatch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fnmatch.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100207">  <div class="votes">
    <div id="Vu100207">
    <a href="/manual/vote-note.php?id=100207&amp;page=function.fnmatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100207">
    <a href="/manual/vote-note.php?id=100207&amp;page=function.fnmatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100207" title="70% like this...">
    14
    </div>
  </div>
  <a href="#100207" class="name">
  <strong class="user"><em>me at rowanlewis dot com</em></strong></a><a class="genanchor" href="#100207"> &para;</a><div class="date" title="2010-09-30 10:58"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100207">
<div class="phpcode"><code><span class="html">Here's a definitive solution, which supports negative character classes and the four documented flags.
<br />
<br /><span class="default">&lt;?php
<br />    
<br />    </span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'fnmatch'</span><span class="keyword">)) {
<br />        </span><span class="default">define</span><span class="keyword">(</span><span class="string">'FNM_PATHNAME'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">define</span><span class="keyword">(</span><span class="string">'FNM_NOESCAPE'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);
<br />        </span><span class="default">define</span><span class="keyword">(</span><span class="string">'FNM_PERIOD'</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);
<br />        </span><span class="default">define</span><span class="keyword">(</span><span class="string">'FNM_CASEFOLD'</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">);
<br />        
<br />        function </span><span class="default">fnmatch</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br />            return </span><span class="default">pcre_fnmatch</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">);
<br />        }
<br />    }
<br />    
<br />    function </span><span class="default">pcre_fnmatch</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br />        </span><span class="default">$modifiers </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />        </span><span class="default">$transforms </span><span class="keyword">= array(
<br />            </span><span class="string">'\*'    </span><span class="keyword">=&gt; </span><span class="string">'.*'</span><span class="keyword">,
<br />            </span><span class="string">'\?'    </span><span class="keyword">=&gt; </span><span class="string">'.'</span><span class="keyword">,
<br />            </span><span class="string">'\[\!'    </span><span class="keyword">=&gt; </span><span class="string">'[^'</span><span class="keyword">,
<br />            </span><span class="string">'\['    </span><span class="keyword">=&gt; </span><span class="string">'['</span><span class="keyword">,
<br />            </span><span class="string">'\]'    </span><span class="keyword">=&gt; </span><span class="string">']'</span><span class="keyword">,
<br />            </span><span class="string">'\.'    </span><span class="keyword">=&gt; </span><span class="string">'\.'</span><span class="keyword">,
<br />            </span><span class="string">'\\'    </span><span class="keyword">=&gt; </span><span class="string">'\\\\'
<br />        </span><span class="keyword">);
<br />        
<br />        </span><span class="comment">// Forward slash in string must be in pattern:
<br />        </span><span class="keyword">if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">FNM_PATHNAME</span><span class="keyword">) {
<br />            </span><span class="default">$transforms</span><span class="keyword">[</span><span class="string">'\*'</span><span class="keyword">] = </span><span class="string">'[^/]*'</span><span class="keyword">;
<br />        }
<br />        
<br />        </span><span class="comment">// Back slash should not be escaped:
<br />        </span><span class="keyword">if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">FNM_NOESCAPE</span><span class="keyword">) {
<br />            unset(</span><span class="default">$transforms</span><span class="keyword">[</span><span class="string">'\\'</span><span class="keyword">]);
<br />        }
<br />        
<br />        </span><span class="comment">// Perform case insensitive match:
<br />        </span><span class="keyword">if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">FNM_CASEFOLD</span><span class="keyword">) {
<br />            </span><span class="default">$modifiers </span><span class="keyword">.= </span><span class="string">'i'</span><span class="keyword">;
<br />        }
<br />        
<br />        </span><span class="comment">// Period at start must be the same as pattern:
<br />        </span><span class="keyword">if (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">FNM_PERIOD</span><span class="keyword">) {
<br />            if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">) === </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">) !== </span><span class="default">0</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />        
<br />        </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">'#^'
<br />            </span><span class="keyword">. </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">preg_quote</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'#'</span><span class="keyword">), </span><span class="default">$transforms</span><span class="keyword">)
<br />            . </span><span class="string">'$#'
<br />            </span><span class="keyword">. </span><span class="default">$modifiers</span><span class="keyword">;
<br />        
<br />        return (boolean)</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br />    }
<br />    
<br /></span><span class="default">?&gt;
<br /></span>
<br />This probably needs further testing, but it seems to function identically to the native fnmatch implementation.</span></code></div>
  </div>
 </div>
  <div class="note" id="81927">  <div class="votes">
    <div id="Vu81927">
    <a href="/manual/vote-note.php?id=81927&amp;page=function.fnmatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81927">
    <a href="/manual/vote-note.php?id=81927&amp;page=function.fnmatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81927" title="57% like this...">
    1
    </div>
  </div>
  <a href="#81927" class="name">
  <strong class="user"><em>Sinured</em></strong></a><a class="genanchor" href="#81927"> &para;</a><div class="date" title="2008-03-19 01:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81927">
<div class="phpcode"><code><span class="html">An addition to my previous note: My statement regarding the FNM_* constants was wrong. They are available on POSIX-compliant systems (in other words, if fnmatch() is defined).</span></code></div>
  </div>
 </div>
  <div class="note" id="109389">  <div class="votes">
    <div id="Vu109389">
    <a href="/manual/vote-note.php?id=109389&amp;page=function.fnmatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109389">
    <a href="/manual/vote-note.php?id=109389&amp;page=function.fnmatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109389" title="50% like this...">
    0
    </div>
  </div>
  <a href="#109389" class="name">
  <strong class="user"><em>bernd dot ebert at gmx dot net</em></strong></a><a class="genanchor" href="#109389"> &para;</a><div class="date" title="2012-07-13 11:21"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109389">
<div class="phpcode"><code><span class="html">There is a problem within the  pcre_fnmatch-Function concerning backslashes. Those will be masked by preq_quote and ADDITONALLY by the strtr if FN_NOESCAPE is not set -&gt; something like "*a(*" will finally result in "#^.*a\\(.*$#". Note the double backslash which effectively does NOT mask the "(" correctly.<br /> <br />Since preq_quote always matches a backslash I don't think that this'll work with using preg_quote at all.</span></code></div>
  </div>
 </div>
  <div class="note" id="75702">  <div class="votes">
    <div id="Vu75702">
    <a href="/manual/vote-note.php?id=75702&amp;page=function.fnmatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75702">
    <a href="/manual/vote-note.php?id=75702&amp;page=function.fnmatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75702" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75702" class="name">
  <strong class="user"><em>Frederik Krautwald</em></strong></a><a class="genanchor" href="#75702"> &para;</a><div class="date" title="2007-06-12 10:30"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75702">
<div class="phpcode"><code><span class="html">soywiz's function still doesn't seem to work -- at least not with PHP 5.2.3 on Windows -- but jk's does.</span></code></div>
  </div>
 </div>
  <div class="note" id="71725">  <div class="votes">
    <div id="Vu71725">
    <a href="/manual/vote-note.php?id=71725&amp;page=function.fnmatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71725">
    <a href="/manual/vote-note.php?id=71725&amp;page=function.fnmatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71725" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#71725" class="name">
  <strong class="user"><em>jk at ricochetsolutions dot com</em></strong></a><a class="genanchor" href="#71725"> &para;</a><div class="date" title="2006-12-13 05:39"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71725">
<div class="phpcode"><code><span class="html">soywiz's function didnt seem to work for me, but this did.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'fnmatch'</span><span class="keyword">)) {<br /><br />    function </span><span class="default">fnmatch</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">) {<br />        return </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"#^"</span><span class="keyword">.</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">preg_quote</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'#'</span><span class="keyword">), array(</span><span class="string">'\*' </span><span class="keyword">=&gt; </span><span class="string">'.*'</span><span class="keyword">, </span><span class="string">'\?' </span><span class="keyword">=&gt; </span><span class="string">'.'</span><span class="keyword">)).</span><span class="string">"$#i"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    } </span><span class="comment">// end<br /><br /></span><span class="keyword">} </span><span class="comment">// end if<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79489">  <div class="votes">
    <div id="Vu79489">
    <a href="/manual/vote-note.php?id=79489&amp;page=function.fnmatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79489">
    <a href="/manual/vote-note.php?id=79489&amp;page=function.fnmatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79489" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#79489" class="name">
  <strong class="user"><em>theboydanny at gmail dot com</em></strong></a><a class="genanchor" href="#79489"> &para;</a><div class="date" title="2007-11-29 10:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79489">
<div class="phpcode"><code><span class="html">About the windows compat functions below:<br />I needed fnmatch for a application that had to work on Windows, took a look here and tested both. Jk's works for me, soywiz didn't (on WinXPSP2, PHP 5.2.3).<br />The only difference between them is addcslashes (soywiz) instead of preg_quote (jk). They _should_ both work, but for some reason soywiz's didn't for me. So YMMV.<br />However, to make JK's fnmatch() work with the example in the documentation, you also have to strtr the [ and ] in $pattern.<br /><span class="default">&lt;?php<br />$pattern </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">preg_quote</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'#'</span><span class="keyword">), array(</span><span class="string">'\*' </span><span class="keyword">=&gt; </span><span class="string">'.*'</span><span class="keyword">, </span><span class="string">'\?' </span><span class="keyword">=&gt; </span><span class="string">'.'</span><span class="keyword">, </span><span class="string">'\[' </span><span class="keyword">=&gt; </span><span class="string">'['</span><span class="keyword">, </span><span class="string">'\]' </span><span class="keyword">=&gt; </span><span class="string">']'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>And thanks for the functions, guys.</span></code></div>
  </div>
 </div>
  <div class="note" id="34769">  <div class="votes">
    <div id="Vu34769">
    <a href="/manual/vote-note.php?id=34769&amp;page=function.fnmatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34769">
    <a href="/manual/vote-note.php?id=34769&amp;page=function.fnmatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34769" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#34769" class="name">
  <strong class="user"><em>phlipping at yahoo dot com</em></strong></a><a class="genanchor" href="#34769"> &para;</a><div class="date" title="2003-08-06 03:59"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34769">
<div class="phpcode"><code><span class="html">you couls also try this function that I wrote before I found fnmatch:<br /><br />function WildToReg($str)<br />{<br />  $s = "";   <br />  for ($i = 0; $i &lt; strlen($str); $i++)<br />  {<br />   $c = $str{$i};<br />   if ($c =='?')<br />    $s .= '.'; // any character<br />   else if ($c == '*')    <br />    $s .= '.*'; // 0 or more any characters    <br />   else if ($c == '[' || $c == ']')<br />    $s .= $c;  // one of characters within []<br />   else<br />    $s .= '\\' . $c;<br />  }<br />  $s = '^' . $s . '$';<br /><br />  //trim redundant ^ or $<br />  //eg ^.*\.txt$ matches exactly the same as \.txt$<br />  if (substr($s,0,3) == "^.*")<br />   $s = substr($s,3);<br />  if (substr($s,-3,3) == ".*$")<br />   $s = substr($s,0,-3);<br />  return $s;<br />}<br /><br />if (ereg(WildToReg("*.txt"), $fn))<br />  print "$fn is a text file";<br />else<br />  print "$fn is not a text file";</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.fnmatch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fnmatch.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.filesystem.php">Filesystem Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.basename.php" title="basename">basename</a>
                        </li>
                                                <li class="">
                            <a href="function.chgrp.php" title="chgrp">chgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.chmod.php" title="chmod">chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.chown.php" title="chown">chown</a>
                        </li>
                                                <li class="">
                            <a href="function.clearstatcache.php" title="clearstatcache">clearstatcache</a>
                        </li>
                                                <li class="">
                            <a href="function.copy.php" title="copy">copy</a>
                        </li>
                                                <li class="">
                            <a href="function.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="function.dirname.php" title="dirname">dirname</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-free-space.php" title="disk_&#8203;free_&#8203;space">disk_&#8203;free_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-total-space.php" title="disk_&#8203;total_&#8203;space">disk_&#8203;total_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.diskfreespace.php" title="diskfreespace">diskfreespace</a>
                        </li>
                                                <li class="">
                            <a href="function.fclose.php" title="fclose">fclose</a>
                        </li>
                                                <li class="">
                            <a href="function.fdatasync.php" title="fdatasync">fdatasync</a>
                        </li>
                                                <li class="">
                            <a href="function.feof.php" title="feof">feof</a>
                        </li>
                                                <li class="">
                            <a href="function.fflush.php" title="fflush">fflush</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetc.php" title="fgetc">fgetc</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetcsv.php" title="fgetcsv">fgetcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fgets.php" title="fgets">fgets</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetss.php" title="fgetss">fgetss</a>
                        </li>
                                                <li class="">
                            <a href="function.file.php" title="file">file</a>
                        </li>
                                                <li class="">
                            <a href="function.file-exists.php" title="file_&#8203;exists">file_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.file-get-contents.php" title="file_&#8203;get_&#8203;contents">file_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.file-put-contents.php" title="file_&#8203;put_&#8203;contents">file_&#8203;put_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.fileatime.php" title="fileatime">fileatime</a>
                        </li>
                                                <li class="">
                            <a href="function.filectime.php" title="filectime">filectime</a>
                        </li>
                                                <li class="">
                            <a href="function.filegroup.php" title="filegroup">filegroup</a>
                        </li>
                                                <li class="">
                            <a href="function.fileinode.php" title="fileinode">fileinode</a>
                        </li>
                                                <li class="">
                            <a href="function.filemtime.php" title="filemtime">filemtime</a>
                        </li>
                                                <li class="">
                            <a href="function.fileowner.php" title="fileowner">fileowner</a>
                        </li>
                                                <li class="">
                            <a href="function.fileperms.php" title="fileperms">fileperms</a>
                        </li>
                                                <li class="">
                            <a href="function.filesize.php" title="filesize">filesize</a>
                        </li>
                                                <li class="">
                            <a href="function.filetype.php" title="filetype">filetype</a>
                        </li>
                                                <li class="">
                            <a href="function.flock.php" title="flock">flock</a>
                        </li>
                                                <li class="current">
                            <a href="function.fnmatch.php" title="fnmatch">fnmatch</a>
                        </li>
                                                <li class="">
                            <a href="function.fopen.php" title="fopen">fopen</a>
                        </li>
                                                <li class="">
                            <a href="function.fpassthru.php" title="fpassthru">fpassthru</a>
                        </li>
                                                <li class="">
                            <a href="function.fputcsv.php" title="fputcsv">fputcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fputs.php" title="fputs">fputs</a>
                        </li>
                                                <li class="">
                            <a href="function.fread.php" title="fread">fread</a>
                        </li>
                                                <li class="">
                            <a href="function.fscanf.php" title="fscanf">fscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.fseek.php" title="fseek">fseek</a>
                        </li>
                                                <li class="">
                            <a href="function.fstat.php" title="fstat">fstat</a>
                        </li>
                                                <li class="">
                            <a href="function.fsync.php" title="fsync">fsync</a>
                        </li>
                                                <li class="">
                            <a href="function.ftell.php" title="ftell">ftell</a>
                        </li>
                                                <li class="">
                            <a href="function.ftruncate.php" title="ftruncate">ftruncate</a>
                        </li>
                                                <li class="">
                            <a href="function.fwrite.php" title="fwrite">fwrite</a>
                        </li>
                                                <li class="">
                            <a href="function.glob.php" title="glob">glob</a>
                        </li>
                                                <li class="">
                            <a href="function.is-dir.php" title="is_&#8203;dir">is_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.is-executable.php" title="is_&#8203;executable">is_&#8203;executable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-file.php" title="is_&#8203;file">is_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-link.php" title="is_&#8203;link">is_&#8203;link</a>
                        </li>
                                                <li class="">
                            <a href="function.is-readable.php" title="is_&#8203;readable">is_&#8203;readable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-uploaded-file.php" title="is_&#8203;uploaded_&#8203;file">is_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writable.php" title="is_&#8203;writable">is_&#8203;writable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writeable.php" title="is_&#8203;writeable">is_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.lchgrp.php" title="lchgrp">lchgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.lchown.php" title="lchown">lchown</a>
                        </li>
                                                <li class="">
                            <a href="function.link.php" title="link">link</a>
                        </li>
                                                <li class="">
                            <a href="function.linkinfo.php" title="linkinfo">linkinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.lstat.php" title="lstat">lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.mkdir.php" title="mkdir">mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.move-uploaded-file.php" title="move_&#8203;uploaded_&#8203;file">move_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-file.php" title="parse_&#8203;ini_&#8203;file">parse_&#8203;ini_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-string.php" title="parse_&#8203;ini_&#8203;string">parse_&#8203;ini_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.pathinfo.php" title="pathinfo">pathinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.pclose.php" title="pclose">pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.popen.php" title="popen">popen</a>
                        </li>
                                                <li class="">
                            <a href="function.readfile.php" title="readfile">readfile</a>
                        </li>
                                                <li class="">
                            <a href="function.readlink.php" title="readlink">readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath.php" title="realpath">realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-get.php" title="realpath_&#8203;cache_&#8203;get">realpath_&#8203;cache_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-size.php" title="realpath_&#8203;cache_&#8203;size">realpath_&#8203;cache_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.rename.php" title="rename">rename</a>
                        </li>
                                                <li class="">
                            <a href="function.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="function.rmdir.php" title="rmdir">rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.set-file-buffer.php" title="set_&#8203;file_&#8203;buffer">set_&#8203;file_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="function.symlink.php" title="symlink">symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.tempnam.php" title="tempnam">tempnam</a>
                        </li>
                                                <li class="">
                            <a href="function.tmpfile.php" title="tmpfile">tmpfile</a>
                        </li>
                                                <li class="">
                            <a href="function.touch.php" title="touch">touch</a>
                        </li>
                                                <li class="">
                            <a href="function.umask.php" title="umask">umask</a>
                        </li>
                                                <li class="">
                            <a href="function.unlink.php" title="unlink">unlink</a>
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
