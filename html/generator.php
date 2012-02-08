<?php
    $adj = array(
        "Sustainable",
        "Modular",
        "Urban",
        "Nike-branded",
        "Apple-branded",
        "Educational",
        "Re-envisioned",
        "Crowd-sourced",
        "Feminine",
        "Industrial",
        "Electronic",
        "Retro",
        "Wireless",
        "USB-powered",
        "Smart",
        "Performance",
        "Up-cycled",
        "Reclaimed",
        "Wrist-mounted",
        "Collapsible",
        "Decomposable",
        "Organizational",
        "Simplified",
        "Terrestrial",
        "Protective",
        "Green",
        "Interlocking",
        "Light-weight",
        "Modern",
        "Mobile",
        "Portable",
        "Machined",
        "Collaborative",
        "Recycled",
        "Biodegradable",
        "Aircraft-grade",
        "Robotic",
        "Hybrid",
        "Versatile",
        "All natural",
        "Swiss",
        "Luxury",
        "Touch screen",
        "Voice-activated",
        "Waterproof",
        "Automated",
        "Networked",
        "Rugged",
        "Ergonomic",
        "Solar-powered",
        "Bauhaus-inspired",
        "Blue sky"
    );

    $domain = array(
        "community created",
        "geriatric",
        "education",
        "medical",
        "social media",
        "student life",
        "public transportation",
        "agricultural",
        "garden",
        "DIY",
        "time keeping",
        "EMS",
        "grooming",
        "iPhone",
        "fitness",
        "composting",
        "construction",
        "way finding",
        "elderly care",
        "exercise"           
    );

    $thing = array(
        "device",
        "toy",
        "appliance",
        "app",
        "table",
        "coffee maker",
        "seating aparatus",
        "chair",
        "transportation",
        "wiki",
        "space",
        "experience",
        "monitoring system",
        "monitor",
        "concept",
        "model",
        "writing implement",
        "book",
        "utensil",
        "equipment",
        "packaging",
        "case",
        "toothbrush",
        "power tools",
        "system",
        "garment",
        "tool",
        "structure",
        "equipment",
        "gear",
        "speaker system",
        "GPS",
        "hearing aid",
        "vacuum",
        "motorcycle",
        "bicycle",
        "environment",
        "toilet brush holder",
        "toaster",
        "salt shaker",
        "signage",
        "lighting",
        "messenger bag",
        "exhibit"
    );

    $GLOBALS['adj'] = $adj;
    $GLOBALS['domain'] = $domain;
    $GLOBALS['thing'] = $thing;

    function generate () {

        $adj = $GLOBALS['adj'];
        $domain = $GLOBALS['domain'];
        $thing = $GLOBALS['thing'];

        return $adj[rand(0,(count($adj) - 1))] . " " .
                $domain[rand(0,(count($domain) - 1))] . " " .
                $thing[rand(0,(count($thing) - 1))];
    }

?>