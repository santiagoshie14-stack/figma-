<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstateBid - Verdant Courtyard Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">

        <!-- SIDE PANEL / NAVIGATION -->
        <aside class="side-panel">
            <div class="logo">
                <div class="logo-brand">
                    <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/></svg>
                    <span>EstateBid</span>
                </div>
                <span class="close-icon">&times;</span>
            </div>
            
            <nav class="nav-links">
                <div class="section-title">WORKSPACE</div>
                <a href="index.html" class="nav-item">
                    <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                    Overview
                </a>
                <a href="explore.html" class="nav-item active">
                    <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    Explore
                </a>
                <a href="mybids.html" class="nav-item">
                    <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 7l6 6M4 20l4-4M13 4l6 6L7 22H3v-4L13 4z"/></svg>
                    My bids
                </a>
                <a href="update.html" class="nav-item">
                    <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    Updates <span class="badge">3</span>
                </a>
                <a href="profile.html" class="nav-item">
                    <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    Profile
                </a>
            </nav>

            <div class="bid-smarter-card">
                <div class="card-trophy-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#B08D57" stroke-width="2"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6M18 9h1.5a2.5 2.5 0 0 0 0-5H18M4 22h16M10 14.66V17M14 14.66V17M18 2H6v7a6 6 0 0 0 12 0V2z"/></svg>
                </div>
                <h3>Bid smarter</h3>
                <p>Set alerts on properties you love and never miss a deadline.</p>
                <a href="explore.html" class="browse-link">Browse auctions &rarr;</a>
            </div>

            <div class="footer-link">Do not sell or share my personal info &rsaquo;</div>
        </aside>

        <!-- MAIN CONTENT AREA -->
        <main class="main-content">
            <header class="top-nav">
                <div class="breadcrumb">EstateBid &nbsp;&rsaquo;&nbsp; <span>Property details</span></div>
                <div class="top-nav-right">
                    <svg class="nav-svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    <div class="user-avatar">AM</div>
                </div>
            </header>

            <div class="details-page-container">
                
                <!-- BACK TO PROPERTIES LINK -->
                <a href="explore.html" class="back-to-props-link">
                    &larr; Back to properties
                </a>

                <!-- PHOTO GALLERY GRID (tulad ng nasa bagong larawan) -->
                <div class="property-gallery-grid">
                    <div class="main-gallery-img">
                        <img src="images/download.jpg" alt="Verdant Courtyard Main" onerror="this.src='https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80'">
                    </div>
                    <div class="side-gallery-col">
                        <div class="sub-gallery-img">
                            <img src="images/download.jpg" alt="Property view" onerror="this.src='https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=600&q=80'">
                        </div>
                        <div class="sub-gallery-img position-relative">
                            <img src="images/download.jpg" alt="Property view" onerror="this.src='https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=600&q=80'">
                            <button class="view-all-photos-btn">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                                View all 12 photos
                            </button>
                        </div>
                    </div>
                </div>

                <!-- MAIN CONTENT INFO + BIDDING BOX -->
                <div class="property-details-layout">
                    
                    <!-- LEFT INFO COLUMN -->
                    <div class="property-main-info">
                        <div class="prop-status-row">
                            <span class="prop-status-badge live-pill"><span class="live-dot"></span> Live auction</span>
                            <span class="prop-category-tag">TOWNHOUSE</span>
                        </div>

                        <div class="title-save-row">
                            <h1 class="serif-property-title">Verdant Courtyard</h1>
                            <button class="save-property-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                                Save property
                            </button>
                        </div>

                        <div class="prop-location-full">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            92 Cedar Lane, Portland, OR
                        </div>

                        <!-- 4 STATS BOX (3 beds, 3 baths, 2,680 ft², 4,300 ft²) -->
                        <div class="property-features-box">
                            <div class="feature-col">
                                <span class="feat-label">Bedrooms</span>
                                <div class="feat-val-row">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 4v16M2 8h20M2 17h20M22 4v16"/></svg>
                                    <strong>3</strong>
                                </div>
                            </div>
                            <div class="feature-col">
                                <span class="feat-label">Bathrooms</span>
                                <div class="feat-val-row">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6 6.5 3.5a1.5 1.5 0 0 0-2.12 0l-.88.88a1.5 1.5 0 0 0 0 2.12L6 9M4 12v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6"/></svg>
                                    <strong>3</strong>
                                </div>
                            </div>
                            <div class="feature-col">
                                <span class="feat-label">Floor area</span>
                                <div class="feat-val-row">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/></svg>
                                    <strong>2,680 ft²</strong>
                                </div>
                            </div>
                            <div class="feature-col">
                                <span class="feat-label">Lot area</span>
                                <div class="feat-val-row">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                                    <strong>4,300 ft²</strong>
                                </div>
                            </div>
                        </div>

                        <!-- ABOUT THIS PROPERTY -->
                        <div class="about-property-section">
                            <h2>About this property</h2>
                            <p>Architectural precision meets effortless California living in this exceptional residence. Expansive glass walls frame panoramic views while warm natural materials create a sophisticated, welcoming atmosphere.</p>
                            <p>The open-concept living level flows into a chef's kitchen, private garden, and resort-style pool. Every detail has been considered, from the custom millwork to integrated smart-home systems.</p>
                        </div>

                        <!-- PROPERTY HIGHLIGHTS (tulad ng nasa bago.jpg) -->
                        <div class="property-highlights-section" style="margin-top: 32px;">
                            <h2>Property highlights</h2>
                            <div class="highlights-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 16px;">
                                <div class="highlight-item" style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #334155;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                    Chef's kitchen with premium appliances
                                </div>
                                <div class="highlight-item" style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #334155;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                    Heated infinity pool and spa
                                </div>
                                <div class="highlight-item" style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #334155;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                    Floor-to-ceiling glass walls
                                </div>
                                <div class="highlight-item" style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #334155;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                    Smart-home automation
                                </div>
                                <div class="highlight-item" style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #334155;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                    Private two-car garage
                                </div>
                                <div class="highlight-item" style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #334155;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                    Landscaped entertainment terrace
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT BIDDING SIDEBAR BOX (688,000) -->
                    <div class="property-bidding-sidebar">
                        <span class="bid-card-title">CURRENT HIGHEST BID</span>
                        <h2 class="serif-highest-bid">$688,000</h2>
                        
                        <div class="registered-bidders-row">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            <span>9 registered bidders</span>
                        </div>

                        <div class="bid-details-meta-list">
                            <div class="meta-row">
                                <span>Starting bid</span>
                                <strong>$620,000</strong>
                            </div>
                            <div class="meta-row">
                                <span>Minimum increase</span>
                                <strong>$10,000</strong>
                            </div>
                            <div class="meta-row">
                                <span>Auction ends</span>
                                <strong>May 23, 5:00 PM</strong>
                            </div>
                        </div>

                        <div class="time-remaining-box">
                            <div class="time-left-label">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                Time remaining
                            </div>
                            <div class="time-left-val">6d 21h 32m</div>
                        </div>

                        <button class="place-bid-main-btn" id="openBidModalBtn">Place bid</button>
                        
                        <div style="text-align: center; margin-top: 12px; font-size: 0.75rem; color: #94A3B8;">
                            Secure and legally binding auction
                        </div>
                    </div>

                </div>

            </div>
        </main>
    </div>

    <!-- SCRIPT (Optional para sa modals kung kailanganin) -->
    <script>
        // Pwede mong gamitin ang dating modal script dito kung kinakailangan.
    </script>
</body>
</html>