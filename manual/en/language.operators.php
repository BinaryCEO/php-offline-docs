<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Operators - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.operators.php">
 <link rel="shorturl" href="https://www.php.net/operators">
 <link rel="alternate" href="https://www.php.net/operators" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/langref.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.expressions.php">
 <link rel="next" href="https://www.php.net/manual/en/language.operators.precedence.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.operators.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.operators.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.operators.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.operators.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.operators.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.operators.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.operators.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.operators.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.operators.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.operators.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.operators.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Operators" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Operators - Manual" />
<meta name="twitter:description" content="Operators" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Operators - Manual" />
<meta itemprop="description" content="Operators" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Operators" />

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
        <a href="language.operators.precedence.php">
          Operator Precedence &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.expressions.php">
          &laquo; Expressions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      </ul>
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
            <option value='en/language.operators.php' selected="selected">English</option>
            <option value='de/language.operators.php'>German</option>
            <option value='es/language.operators.php'>Spanish</option>
            <option value='fr/language.operators.php'>French</option>
            <option value='it/language.operators.php'>Italian</option>
            <option value='ja/language.operators.php'>Japanese</option>
            <option value='pt_BR/language.operators.php'>Brazilian Portuguese</option>
            <option value='ru/language.operators.php'>Russian</option>
            <option value='tr/language.operators.php'>Turkish</option>
            <option value='uk/language.operators.php'>Ukrainian</option>
            <option value='zh/language.operators.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.operators" class="chapter">
 <h1 class="title">Operators</h1>
<h2>Table of Contents</h2><ul class="chunklist chunklist_chapter"><li><a href="language.operators.precedence.php">Operator Precedence</a></li><li><a href="language.operators.arithmetic.php">Arithmetic</a></li><li><a href="language.operators.increment.php">Increment and Decrement</a></li><li><a href="language.operators.assignment.php">Assignment</a></li><li><a href="language.operators.bitwise.php">Bitwise</a></li><li><a href="language.operators.comparison.php">Comparison</a></li><li><a href="language.operators.errorcontrol.php">Error Control</a></li><li><a href="language.operators.execution.php">Execution</a></li><li><a href="language.operators.logical.php">Logic</a></li><li><a href="language.operators.string.php">String</a></li><li><a href="language.operators.array.php">Array</a></li><li><a href="language.operators.type.php">Type</a></li></ul>

 <p class="simpara">
  An operator is something that takes one or more values (or
  expressions, in programming jargon) and yields another value (so that the
  construction itself becomes an expression).
 </p>
 <p class="para">
  Operators can be grouped according to the number of values they take. Unary
  operators take only one value, for example <code class="literal">!</code> (the
  <a href="language.operators.logical.php" class="link">logical not operator</a>) or
  <code class="literal">++</code> (the
  <a href="language.operators.increment.php" class="link">increment operator</a>).
  Binary operators take two values, such as the familiar
  <a href="language.operators.arithmetic.php" class="link">arithmetical operators</a>
  <code class="literal">+</code> (plus) and <code class="literal">-</code> (minus), and the
  majority of PHP operators fall into this category. Finally, there is a
  single <a href="language.operators.comparison.php#language.operators.comparison.ternary" class="link">ternary
  operator</a>, <code class="literal">? :</code>, which takes three values; this is
  usually referred to simply as &quot;the ternary operator&quot; (although it could
  perhaps more properly be called the conditional operator).
 </p>
 <p class="para">
  A full list of PHP operators follows in the section
  <a href="language.operators.precedence.php" class="link">Operator Precedence</a>.
  The section also explains operator precedence and associativity, which govern
  exactly how expressions containing several different operators are
  evaluated.
 </p>

 


 


 


 


 


 


 


 


 


 


 


 



</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/operators.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.operators%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.operators&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="43111">  <div class="votes">
    <div id="Vu43111">
    <a href="/manual/vote-note.php?id=43111&amp;page=language.operators&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43111">
    <a href="/manual/vote-note.php?id=43111&amp;page=language.operators&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43111" title="58% like this...">
    238
    </div>
  </div>
  <a href="#43111" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#43111"> &para;</a><div class="date" title="2004-06-09 05:58"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43111">
<div class="phpcode"><code><span class="html">of course this should be clear, but i think it has to be mentioned espacially:<br /><br />AND is not the same like &amp;&amp;<br /><br />for example:<br /><br /><span class="default">&lt;?php $a </span><span class="keyword">&amp;&amp; </span><span class="default">$b </span><span class="keyword">|| </span><span class="default">$c</span><span class="keyword">; </span><span class="default">?&gt;<br /></span>is not the same like<br /><span class="default">&lt;?php $a </span><span class="keyword">AND </span><span class="default">$b </span><span class="keyword">|| </span><span class="default">$c</span><span class="keyword">; </span><span class="default">?&gt;<br /></span><br />the first thing is<br />(a and b) or c<br /><br />the second<br />a and (b or c)<br /><br />'cause || has got a higher priority than and, but less than &amp;&amp;<br /><br />of course, using always [ &amp;&amp; and || ] or [ AND and OR ] would be okay, but than you should at least respect the following:<br /><br /><span class="default">&lt;?php $a </span><span class="keyword">= </span><span class="default">$b </span><span class="keyword">&amp;&amp; </span><span class="default">$c</span><span class="keyword">; </span><span class="default">?&gt;<br />&lt;?php $a </span><span class="keyword">= </span><span class="default">$b </span><span class="keyword">AND </span><span class="default">$c</span><span class="keyword">; </span><span class="default">?&gt;<br /></span><br />the first code will set $a to the result of the comparison $b with $c, both have to be true, while the second code line will set $a like $b and THAN - after that - compare the success of this with the value of $c<br /><br />maybe usefull for some tricky coding and helpfull to prevent bugs :D<br /><br />greetz, Warhog</span></code></div>
  </div>
 </div>
  <div class="note" id="125373">  <div class="votes">
    <div id="Vu125373">
    <a href="/manual/vote-note.php?id=125373&amp;page=language.operators&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125373">
    <a href="/manual/vote-note.php?id=125373&amp;page=language.operators&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125373" title="59% like this...">
    52
    </div>
  </div>
  <a href="#125373" class="name">
  <strong class="user"><em>anisgazig at gmail dot com</em></strong></a><a class="genanchor" href="#125373"> &para;</a><div class="date" title="2020-09-16 05:49"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125373">
<div class="phpcode"><code><span class="html">Operator are used to perform operation.<br /><br />Operator are mainly divided by three groups.<br />1.Uniary Operators that takes one values<br />2.Binary Operators that takes two values<br />3.ternary operators that takes three values<br /><br />Operator are mainly divided by three groups that are totally seventeen types.<br />1.Arithmetic Operator<br />+ = Addition<br />- = Subtraction<br />* = Multiplication<br />/ = Division<br />% = Modulo<br />** = Exponentiation<br /><br />2.Assignment Operator<br />     = "equal to<br /><br />3.Array Operator<br />    + = Union<br />    == = Equality<br />    === = Identity<br />    != = Inequality<br />    &lt;&gt; = Inequality<br />    !== =    Non-identity<br /><br />4.Bitwise Operator<br />&amp; = and <br />^ = xor<br />| = not<br />&lt;&lt; = shift left<br />&gt;&gt; = shift right<br /><br />5.Comparison Operator<br />==  = equal<br />=== = identical<br />!=  = not equal<br />!== = not identical<br />&lt;&gt;  = not equal<br />&lt; = less than<br />&lt;= less than or equal<br />&gt; = greater than<br />&gt;= = greater than or equal<br />&lt;=&gt; = spaceship operator<br /><br />6.Execution Operator<br /> `` = backticks  <br /><br />7.Error Control Operator<br />    @ = at sign<br /><br />8.Incrementing/Decrementing Operator<br />    ++$a = PreIncrement<br />    $a++ = PostIncrement<br />    --$a = PreDecrement<br />    $a-- = Postdecrement<br /><br />9.Logical Operator<br />    &amp;&amp; = And<br />    || = Or<br />    ! = Not<br />    and = And<br />    xor = Xor<br />    or = Or<br /><br />10.string Operator<br />    . =  concatenation operator<br />    .= concatenating assignment operator<br /><br />11.Type Operator<br />    instanceof = instanceof<br /><br />12.Ternary or Conditional operator<br />   ?: = Ternary operator<br /><br />13.Null Coalescing Operator<br />    ??" = null coalescing <br /><br />14.Clone new Operator<br />    clone new = clone new<br /><br />15.yield from Operator<br /><br />    yield from = yield from<br /><br />16.yield Operator<br />    yield = yield<br /><br />17.print Operator<br />    print = print</span></code></div>
  </div>
 </div>
  <div class="note" id="12147">  <div class="votes">
    <div id="Vu12147">
    <a href="/manual/vote-note.php?id=12147&amp;page=language.operators&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12147">
    <a href="/manual/vote-note.php?id=12147&amp;page=language.operators&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12147" title="52% like this...">
    15
    </div>
  </div>
  <a href="#12147" class="name">
  <strong class="user"><em>yasuo_ohgaki at hotmail dot com</em></strong></a><a class="genanchor" href="#12147"> &para;</a><div class="date" title="2001-03-25 11:53"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12147">
<div class="phpcode"><code><span class="html">Other Language books' operator precedence section usually include "(" and ")" - with exception of a Perl book that I have. (In PHP "{" and "}" should also be considered also). However, PHP Manual is not listed "(" and ")" in precedence list. It looks like "(" and ")" has higher precedence as it should be.
<br />
<br />Note: If you write following code, you would need "()" to get expected value.
<br />
<br /><span class="default">&lt;?php
<br />$bar </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">"TEST"</span><span class="keyword">. (</span><span class="default">$bar </span><span class="keyword">? </span><span class="string">'true' </span><span class="keyword">: </span><span class="string">'false'</span><span class="keyword">) .</span><span class="string">"TEST"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Without "(" and ")" you will get only "true" in $str. 
<br />(PHP4.0.4pl1/Apache DSO/Linux, PHP4.0.5RC1/Apache DSO/W2K Server)
<br />It's due to precedence, probably.</span></code></div>
  </div>
 </div>
  <div class="note" id="84862">  <div class="votes">
    <div id="Vu84862">
    <a href="/manual/vote-note.php?id=84862&amp;page=language.operators&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84862">
    <a href="/manual/vote-note.php?id=84862&amp;page=language.operators&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84862" title="50% like this...">
    5
    </div>
  </div>
  <a href="#84862" class="name">
  <strong class="user"><em>figroc at gmail dot com</em></strong></a><a class="genanchor" href="#84862"> &para;</a><div class="date" title="2008-08-02 03:30"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84862">
<div class="phpcode"><code><span class="html">The variable symbol '$' should be considered as the highest-precedence operator, so that the variable variables such as $$a[0] won't confuse the parser.  [<a href="http://www.php.net/manual/en/language.variables.variable.php]" rel="nofollow" target="_blank">http://www.php.net/manual/en/language.variables.variable.php]</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.operators&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="langref.php">Language Reference</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.basic-syntax.php" title="Basic syntax">Basic syntax</a>
                        </li>
                                                <li class="">
                            <a href="language.types.php" title="Types">Types</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.php" title="Variables">Variables</a>
                        </li>
                                                <li class="">
                            <a href="language.constants.php" title="Constants">Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.expressions.php" title="Expressions">Expressions</a>
                        </li>
                                                <li class="current">
                            <a href="language.operators.php" title="Operators">Operators</a>
                        </li>
                                                <li class="">
                            <a href="language.control-structures.php" title="Control Structures">Control Structures</a>
                        </li>
                                                <li class="">
                            <a href="language.functions.php" title="Functions">Functions</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.php" title="Classes and Objects">Classes and Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.php" title="Namespaces">Namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.errors.php" title="Errors">Errors</a>
                        </li>
                                                <li class="">
                            <a href="language.exceptions.php" title="Exceptions">Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="language.fibers.php" title="Fibers">Fibers</a>
                        </li>
                                                <li class="">
                            <a href="language.generators.php" title="Generators">Generators</a>
                        </li>
                                                <li class="">
                            <a href="language.attributes.php" title="Attributes">Attributes</a>
                        </li>
                                                <li class="">
                            <a href="language.references.php" title="References Explained">References Explained</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.php" title="Predefined Variables">Predefined Variables</a>
                        </li>
                                                <li class="">
                            <a href="reserved.exceptions.php" title="Predefined Exceptions">Predefined Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="reserved.interfaces.php" title="Predefined Interfaces and Classes">Predefined Interfaces and Classes</a>
                        </li>
                                                <li class="">
                            <a href="reserved.attributes.php" title="Predefined Attributes">Predefined Attributes</a>
                        </li>
                                                <li class="">
                            <a href="context.php" title="Context options and parameters">Context options and parameters</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.php" title="Supported Protocols and Wrappers">Supported Protocols and Wrappers</a>
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
