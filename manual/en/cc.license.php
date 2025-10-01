<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Creative Commons Attribution 3.0 - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/cc.license.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/cc.license.php">
 <link rel="alternate" href="https://www.php.net/manual/en/cc.license.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/appendices.php">
 <link rel="prev" href="https://www.php.net/manual/en/about.translations.php">
 <link rel="next" href="https://www.php.net/manual/en/indexes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/cc.license.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/cc.license.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/cc.license.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/cc.license.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/cc.license.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/cc.license.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/cc.license.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/cc.license.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/cc.license.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/cc.license.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/cc.license.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creative Commons Attribution 3.0" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Creative Commons Attribution 3.0 - Manual" />
<meta name="twitter:description" content="Creative Commons Attribution 3.0" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Creative Commons Attribution 3.0 - Manual" />
<meta itemprop="description" content="Creative Commons Attribution 3.0" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creative Commons Attribution 3.0" />

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
        <a href="indexes.php">
          Index listing &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="about.translations.php">
          &laquo; Translations        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      </ul>
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
            <option value='en/cc.license.php' selected="selected">English</option>
            <option value='de/cc.license.php'>German</option>
            <option value='es/cc.license.php'>Spanish</option>
            <option value='fr/cc.license.php'>French</option>
            <option value='it/cc.license.php'>Italian</option>
            <option value='ja/cc.license.php'>Japanese</option>
            <option value='pt_BR/cc.license.php'>Brazilian Portuguese</option>
            <option value='ru/cc.license.php'>Russian</option>
            <option value='tr/cc.license.php'>Turkish</option>
            <option value='uk/cc.license.php'>Ukrainian</option>
            <option value='zh/cc.license.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="cc.license" class="appendix">
 <h1 class="title">Creative Commons Attribution 3.0</h1>


 <p class="simpara">
  THE WORK (AS DEFINED BELOW) IS PROVIDED UNDER THE TERMS OF THIS CREATIVE COMMONS PUBLIC
  LICENSE (&quot;CCPL&quot; OR &quot;LICENSE&quot;). THE WORK IS PROTECTED BY COPYRIGHT AND/OR OTHER
  APPLICABLE LAW. ANY USE OF THE WORK OTHER THAN AS AUTHORIZED UNDER THIS LICENSE OR
  COPYRIGHT LAW IS PROHIBITED.
 </p>
 <p class="simpara">
  BY EXERCISING ANY RIGHTS TO THE WORK PROVIDED HERE, YOU ACCEPT AND AGREE TO BE BOUND BY
  THE TERMS OF THIS LICENSE. TO THE EXTENT THIS LICENSE MAY BE CONSIDERED TO BE A
  CONTRACT, THE LICENSOR GRANTS YOU THE RIGHTS CONTAINED HERE IN CONSIDERATION OF YOUR
  ACCEPTANCE OF SUCH TERMS AND CONDITIONS.
 </p>

 <p class="simpara"><em>1. Definitions</em></p>
 <ol type="a">
  <li class="listitem">
   <span class="simpara">
    <em>&quot;Adaptation&quot;</em> means a work based upon the Work, or upon the Work
    and other pre-existing works, such as a translation, adaptation, derivative work,
    arrangement of music or other alterations of a literary or artistic work, or phonogram
    or performance and includes cinematographic adaptations or any other form in which the
    Work may be recast, transformed, or adapted including in any form recognizably derived
    from the original, except that a work that constitutes a Collection will not be
    considered an Adaptation for the purpose of this License. For the avoidance of doubt,
    where the Work is a musical work, performance or phonogram, the synchronization of the
    Work in timed-relation with a moving image (&quot;synching&quot;) will be considered an
    Adaptation for the purpose of this License.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    <em>&quot;Collection&quot;</em> means a collection of literary or artistic works,
    such as encyclopedias and anthologies, or performances, phonograms or broadcasts, or
    other works or subject matter other than works listed in Section 1(f) below, which, by
    reason of the selection and arrangement of their contents, constitute intellectual
    creations, in which the Work is included in its entirety in unmodified form along with
    one or more other contributions, each constituting separate and independent works in
    themselves, which together are assembled into a collective whole. A work that
    constitutes a Collection will not be considered an Adaptation (as defined above) for
    the purposes of this License.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    <em>&quot;Distribute&quot;</em> means to make available to the public the original
    and copies of the Work or Adaptation, as appropriate, through sale or other transfer
    of ownership.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    <em>&quot;Licensor&quot;</em> means the individual, individuals, entity or entities
    that offer(s) the Work under the terms of this License.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    <em>&quot;Work&quot;</em> means the literary and/or artistic work offered under the
    terms of this License including without limitation any production in the literary,
    scientific and artistic domain, whatever may be the mode or form of its expression
    including digital form, such as a book, pamphlet and other writing; a lecture,
    address, sermon or other work of the same nature; a dramatic or dramatico-musical
    work; a choreographic work or entertainment in dumb show; a musical composition with
    or without words; a cinematographic work to which are assimilated works expressed by a
    process analogous to cinematography; a work of drawing, painting, architecture,
    sculpture, engraving or lithography; a photographic work to which are assimilated
    works expressed by a process analogous to photography; a work of applied art; an
    illustration, map, plan, sketch or three-dimensional work relative to geography,
    topography, architecture or science; a performance; a broadcast; a phonogram; a
    compilation of data to the extent it is protected as a copyrightable work; or a work
    performed by a variety or circus performer to the extent it is not otherwise
    considered a literary or artistic work.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    <em>&quot;You&quot;</em> means an individual or entity exercising rights under this
    License who has not previously violated the terms of this License with respect to the
    Work, or who has received express permission from the Licensor to exercise rights
    under this License despite a previous violation.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    <em>&quot;Publicly Perform&quot;</em> means to perform public recitations of the
    Work and to communicate to the public those public recitations, by any means or
    process, including by wire or wireless means or public digital performances; to make
    available to the public Works in such a way that members of the public may access
    these Works from a place and at a place individually chosen by them; to perform the
    Work to the public by any means or process and the communication to the public of the
    performances of the Work, including by public digital performance; to broadcast and
    rebroadcast the Work by any means including signs, sounds or images.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    <em>&quot;Reproduce&quot;</em> means to make copies of the Work by any means
    including without limitation by sound or visual recordings and the right of fixation
    and reproducing fixations of the Work, including storage of a protected performance or
    phonogram in digital form or other electronic medium.
   </span>
  </li>
 </ol>

 <p class="simpara">
  <em>2. Fair Dealing Rights.</em> Nothing in this License is intended to
  reduce, limit, or restrict any uses free from copyright or rights arising from
  limitations or exceptions that are provided for in connection with the copyright
  protection under copyright law or other applicable laws.
 </p>

 <p class="simpara">
  <em>3. License Grant.</em> Subject to the terms and conditions of this
  License, Licensor hereby grants You a worldwide, royalty-free, non-exclusive, perpetual
  (for the duration of the applicable copyright) license to exercise the rights in the
  Work as stated below:
 </p>
 <ol type="a">
  <li class="listitem">
   <span class="simpara">
    to Reproduce the Work, to incorporate the Work into one or more Collections, and to
    Reproduce the Work as incorporated in the Collections;
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    to create and Reproduce Adaptations provided that any such Adaptation, including any
    translation in any medium, takes reasonable steps to clearly label, demarcate or
    otherwise identify that changes were made to the original Work. For example, a
    translation could be marked &quot;The original work was translated from English to
    Spanish,&quot; or a modification could indicate &quot;The original work has been modified.&quot;;
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    to Distribute and Publicly Perform the Work including as incorporated in Collections;
    and,
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    to Distribute and Publicly Perform Adaptations.
   </span>
  </li>

  <li class="listitem">
   <p class="para">
    For the avoidance of doubt:
    <ol type="I">
     <li class="listitem">
      <span class="simpara">
       <em>Non-waivable Compulsory License Schemes.</em> In those
       jurisdictions in which the right to collect royalties through any statutory or
       compulsory licensing scheme cannot be waived, the Licensor reserves the exclusive
       right to collect such royalties for any exercise by You of the rights granted under
       this License;
      </span>
     </li>

     <li class="listitem">
      <span class="simpara">
       <em>Waivable Compulsory License Schemes.</em> In those jurisdictions in
       which the right to collect royalties through any statutory or compulsory licensing
       scheme can be waived, the Licensor waives the exclusive right to collect such
       royalties for any exercise by You of the rights granted under this License; and,
      </span>
     </li>

     <li class="listitem">
      <span class="simpara">
       <em>Voluntary License Schemes.</em> The Licensor waives the right to
       collect royalties, whether individually or, in the event that the Licensor is a
       member of a collecting society that administers voluntary licensing schemes, via
       that society, from any exercise by You of the rights granted under this License.
      </span>
     </li>
    </ol>
   </p>
  </li>
 </ol>
 <p class="simpara">
  The above rights may be exercised in all media and formats whether now known or
  hereafter devised. The above rights include the right to make such modifications as are
  technically necessary to exercise the rights in other media and formats. Subject to
  Section 8(f), all rights not expressly granted by Licensor are hereby reserved.
 </p>

 <p class="simpara">
  <em>4. Restrictions</em>. The license granted in Section 3 above is
  expressly made subject to and limited by the following restrictions:
 </p>

 <ol type="a">
  <li class="listitem">
   <span class="simpara">
    You may Distribute or Publicly Perform the Work only under the terms of this License.
    You must include a copy of, or the Uniform Resource Identifier (URI) for, this License
    with every copy of the Work You Distribute or Publicly Perform. You may not offer or
    impose any terms on the Work that restrict the terms of this License or the ability of
    the recipient of the Work to exercise the rights granted to that recipient under the
    terms of the License. You may not sublicense the Work. You must keep intact all
    notices that refer to this License and to the disclaimer of warranties with every copy
    of the Work You Distribute or Publicly Perform. When You Distribute or Publicly
    Perform the Work, You may not impose any effective technological measures on the Work
    that restrict the ability of a recipient of the Work from You to exercise the rights
    granted to that recipient under the terms of the License. This Section 4(a) applies to
    the Work as incorporated in a Collection, but this does not require the Collection
    apart from the Work itself to be made subject to the terms of this License. If You
    create a Collection, upon notice from any Licensor You must, to the extent
    practicable, remove from the Collection any credit as required by Section 4(b), as
    requested. If You create an Adaptation, upon notice from any Licensor You must, to the
    extent practicable, remove from the Adaptation any credit as required by Section 4(b),
    as requested.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    If You Distribute, or Publicly Perform the Work or any Adaptations or Collections, You
    must, unless a request has been made pursuant to Section 4(a), keep intact all
    copyright notices for the Work and provide, reasonable to the medium or means You are
    utilizing: (i) the name of the Original Author (or pseudonym, if applicable) if
    supplied, and/or if the Original Author and/or Licensor designate another party or
    parties (e.g., a sponsor institute, publishing entity, journal) for attribution
    (&quot;Attribution Parties&quot;) in Licensor&#039;s copyright notice, terms of service or by other
    reasonable means, the name of such party or parties; (ii) the title of the Work if
    supplied; (iii) to the extent reasonably practicable, the URI, if any, that Licensor
    specifies to be associated with the Work, unless such URI does not refer to the
    copyright notice or licensing information for the Work; and (iv) , consistent with
    Section 3(b), in the case of an Adaptation, a credit identifying the use of the Work
    in the Adaptation (e.g., &quot;French translation of the Work by Original Author,&quot; or
    &quot;Screenplay based on original Work by Original Author&quot;). The credit required by this
    Section 4 (b) may be implemented in any reasonable manner; provided, however, that in
    the case of a Adaptation or Collection, at a minimum such credit will appear, if a
    credit for all contributing authors of the Adaptation or Collection appears, then as
    part of these credits and in a manner at least as prominent as the credits for the
    other contributing authors. For the avoidance of doubt, You may only use the credit
    required by this Section for the purpose of attribution in the manner set out above
    and, by exercising Your rights under this License, You may not implicitly or
    explicitly assert or imply any connection with, sponsorship or endorsement by the
    Original Author, Licensor and/or Attribution Parties, as appropriate, of You or Your
    use of the Work, without the separate, express prior written permission of the
    Original Author, Licensor and/or Attribution Parties.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    Except as otherwise agreed in writing by the Licensor or as may be otherwise permitted
    by applicable law, if You Reproduce, Distribute or Publicly Perform the Work either by
    itself or as part of any Adaptations or Collections, You must not distort, mutilate,
    modify or take other derogatory action in relation to the Work which would be
    prejudicial to the Original Author&#039;s honor or reputation. Licensor agrees that in
    those jurisdictions (e.g. Japan), in which any exercise of the right granted in
    Section 3(b) of this License (the right to make Adaptations) would be deemed to be a
    distortion, mutilation, modification or other derogatory action prejudicial to the
    Original Author&#039;s honor and reputation, the Licensor will waive or not assert, as
    appropriate, this Section, to the fullest extent permitted by the applicable national
    law, to enable You to reasonably exercise Your right under Section 3(b) of this
    License (right to make Adaptations) but not otherwise.
   </span>
  </li>
 </ol>

 <p class="simpara"><em>5. Representations, Warranties and Disclaimer</em></p>
 <p class="simpara">
  UNLESS OTHERWISE MUTUALLY AGREED TO BY THE PARTIES IN WRITING, LICENSOR OFFERS THE WORK
  AS-IS AND MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING THE WORK,
  EXPRESS, IMPLIED, STATUTORY OR OTHERWISE, INCLUDING, WITHOUT LIMITATION, WARRANTIES OF
  TITLE, MERCHANTIBILITY, FITNESS FOR A PARTICULAR PURPOSE, NONINFRINGEMENT, OR THE
  ABSENCE OF LATENT OR OTHER DEFECTS, ACCURACY, OR THE PRESENCE OF ABSENCE OF ERRORS,
  WHETHER OR NOT DISCOVERABLE. SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED
  WARRANTIES, SO SUCH EXCLUSION MAY NOT APPLY TO YOU.
 </p>

 <p class="simpara">
  <em>6. Limitation on Liability.</em> EXCEPT TO THE EXTENT REQUIRED BY
  APPLICABLE LAW, IN NO EVENT WILL LICENSOR BE LIABLE TO YOU ON ANY LEGAL THEORY FOR ANY
  SPECIAL, INCIDENTAL, CONSEQUENTIAL, PUNITIVE OR EXEMPLARY DAMAGES ARISING OUT OF THIS
  LICENSE OR THE USE OF THE WORK, EVEN IF LICENSOR HAS BEEN ADVISED OF THE POSSIBILITY OF
  SUCH DAMAGES.
 </p>

 <p class="simpara"><em>7. Termination.</em></p>
 <ol type="a">

  <li class="listitem">
   <span class="simpara">
    This License and the rights granted hereunder will terminate automatically upon any
    breach by You of the terms of this License. Individuals or entities who have received
    Adaptations or Collections from You under this License, however, will not have their
    licenses terminated provided such individuals or entities remain in full compliance
    with those licenses. Sections 1, 2, 5, 6, 7, and 8 will survive any termination of
    this License.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    Subject to the above terms and conditions, the license granted here is perpetual (for
    the duration of the applicable copyright in the Work). Notwithstanding the above,
    Licensor reserves the right to release the Work under different license terms or to
    stop distributing the Work at any time; provided, however that any such election will
    not serve to withdraw this License (or any other license that has been, or is required
    to be, granted under the terms of this License), and this License will continue in
    full force and effect unless terminated as stated above.
   </span>
  </li>
 </ol>

 <p class="simpara"><em>8. Miscellaneous</em></p>
 <ol type="a">
  <li class="listitem">
   <span class="simpara">
    Each time You Distribute or Publicly Perform the Work or a Collection, the Licensor
    offers to the recipient a license to the Work on the same terms and conditions as the
    license granted to You under this License.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    Each time You Distribute or Publicly Perform an Adaptation, Licensor offers to the
    recipient a license to the original Work on the same terms and conditions as the
    license granted to You under this License.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    If any provision of this License is invalid or unenforceable under applicable law, it
    shall not affect the validity or enforceability of the remainder of the terms of this
    License, and without further action by the parties to this agreement, such provision
    shall be reformed to the minimum extent necessary to make such provision valid and
    enforceable.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    No term or provision of this License shall be deemed waived and no breach consented to
    unless such waiver or consent shall be in writing and signed by the party to be
    charged with such waiver or consent
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    This License constitutes the entire agreement between the parties with respect to the
    Work licensed here. There are no understandings, agreements or representations with
    respect to the Work not specified here. Licensor shall not be bound by any additional
    provisions that may appear in any communication from You. This License may not be
    modified without the mutual written agreement of the Licensor and You.
   </span>
  </li>

  <li class="listitem">
   <span class="simpara">
    The rights granted under, and the subject matter referenced, in this License were
    drafted utilizing the terminology of the Berne Convention for the Protection of
    Literary and Artistic Works (as amended on September 28, 1979), the Rome Convention of
    1961, the WIPO Copyright Treaty of 1996, the WIPO Performances and Phonograms Treaty
    of 1996 and the Universal Copyright Convention (as revised on July 24, 1971). These
    rights and subject matter take effect in the relevant jurisdiction in which the
    License terms are sought to be enforced according to the corresponding provisions of
    the implementation of those treaty provisions in the applicable national law. If the
    standard suite of rights granted under applicable copyright law includes additional
    rights not granted under this License, such additional rights are deemed to be
    included in the License; this License is not intended to restrict the license of any
    rights under applicable law.
   </span>
  </li>
 </ol>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/license.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcc.license%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=cc.license&amp;repo=en&amp;redirect=https://www.php.net/manual/en/cc.license.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="appendices.php">Appendices</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="history.php" title="History of PHP and Related Projects">History of PHP and Related Projects</a>
                        </li>
                                                <li class="">
                            <a href="examples.php" title="About manual examples">About manual examples</a>
                        </li>
                                                <li class="">
                            <a href="migration84.php" title="Migrating from PHP 8.3.x to PHP 8.4.x">Migrating from PHP 8.3.x to PHP 8.4.x</a>
                        </li>
                                                <li class="">
                            <a href="migration83.php" title="Migrating from PHP 8.2.x to PHP 8.3.x">Migrating from PHP 8.2.x to PHP 8.3.x</a>
                        </li>
                                                <li class="">
                            <a href="migration82.php" title="Migrating from PHP 8.1.x to PHP 8.2.x">Migrating from PHP 8.1.x to PHP 8.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration81.php" title="Migrating from PHP 8.0.x to PHP 8.1.x">Migrating from PHP 8.0.x to PHP 8.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration80.php" title="Migrating from PHP 7.4.x to PHP 8.0.x">Migrating from PHP 7.4.x to PHP 8.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration74.php" title="Migrating from PHP 7.3.x to PHP 7.4.x">Migrating from PHP 7.3.x to PHP 7.4.x</a>
                        </li>
                                                <li class="">
                            <a href="migration73.php" title="Migrating from PHP 7.2.x to PHP 7.3.x">Migrating from PHP 7.2.x to PHP 7.3.x</a>
                        </li>
                                                <li class="">
                            <a href="migration72.php" title="Migrating from PHP 7.1.x to PHP 7.2.x">Migrating from PHP 7.1.x to PHP 7.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration71.php" title="Migrating from PHP 7.0.x to PHP 7.1.x">Migrating from PHP 7.0.x to PHP 7.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration70.php" title="Migrating from PHP 5.6.x to PHP 7.0.x">Migrating from PHP 5.6.x to PHP 7.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration56.php" title="Migrating from PHP 5.5.x to PHP 5.6.x">Migrating from PHP 5.5.x to PHP 5.6.x</a>
                        </li>
                                                <li class="">
                            <a href="debugger.php" title="Debugging in PHP">Debugging in PHP</a>
                        </li>
                                                <li class="">
                            <a href="configure.php" title="Configure options">Configure options</a>
                        </li>
                                                <li class="">
                            <a href="ini.php" title="php.ini directives">php.ini directives</a>
                        </li>
                                                <li class="">
                            <a href="extensions.php" title="Extension List/Categorization">Extension List/Categorization</a>
                        </li>
                                                <li class="">
                            <a href="aliases.php" title="List of Function Aliases">List of Function Aliases</a>
                        </li>
                                                <li class="">
                            <a href="reserved.php" title="List of Reserved Words">List of Reserved Words</a>
                        </li>
                                                <li class="">
                            <a href="resource.php" title="List of Resource Types">List of Resource Types</a>
                        </li>
                                                <li class="">
                            <a href="filters.php" title="List of Available Filters">List of Available Filters</a>
                        </li>
                                                <li class="">
                            <a href="transports.php" title="List of Supported Socket Transports">List of Supported Socket Transports</a>
                        </li>
                                                <li class="">
                            <a href="types.comparisons.php" title="PHP type comparison tables">PHP type comparison tables</a>
                        </li>
                                                <li class="">
                            <a href="tokens.php" title="List of Parser Tokens">List of Parser Tokens</a>
                        </li>
                                                <li class="">
                            <a href="userlandnaming.php" title="Userland Naming Guide">Userland Naming Guide</a>
                        </li>
                                                <li class="">
                            <a href="about.php" title="About the manual">About the manual</a>
                        </li>
                                                <li class="current">
                            <a href="cc.license.php" title="Creative Commons Attribution 3.0">Creative Commons Attribution 3.0</a>
                        </li>
                                                <li class="">
                            <a href="indexes.php" title="Index listing">Index listing</a>
                        </li>
                                                <li class="">
                            <a href="doc.changelog.php" title="Changelog">Changelog</a>
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
