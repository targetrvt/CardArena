<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Arena - Premium Online Blackjack & Poker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .card-glow { box-shadow: 0 0 30px rgba(102, 126, 234, 0.3); }
        .floating-card { animation: float 6s ease-in-out infinite; }
        .floating-card:nth-child(2) { animation-delay: -2s; }
        .floating-card:nth-child(3) { animation-delay: -4s; }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        .stats-counter { animation: countUp 2s ease-out; }
        @keyframes countUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .game-card { transition: all 0.3s ease; }
        .game-card:hover { transform: translateY(-10px) scale(1.05); }
    </style>
</head>
<body class="bg-gray-900 text-white overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-gray-900/80 backdrop-blur-lg border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                        <span class="text-2xl">♠</span>
                    </div>
                    <span class="text-xl font-bold bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                        Card Arena
                    </span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#games" class="hover:text-yellow-400 transition-colors">Games</a>
                    <a href="#leaderboard" class="hover:text-yellow-400 transition-colors">Leaderboard</a>
                    <a href="#features" class="hover:text-yellow-400 transition-colors">Features</a>
                    <a href="/login" class="px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg transition-colors">Login</a>
                    <a href="/register" class="px-4 py-2 bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-500 hover:to-orange-600 rounded-lg font-medium transition-all">Get Started</a>
                </div>
                <button class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 gradient-bg opacity-20"></div>
        
        <!-- Floating Cards -->
        <div class="absolute top-20 left-10 floating-card">
            <div class="w-16 h-24 bg-white rounded-lg shadow-2xl flex items-center justify-center text-black text-2xl">♠A</div>
        </div>
        <div class="absolute top-40 right-20 floating-card">
            <div class="w-16 h-24 bg-white rounded-lg shadow-2xl flex items-center justify-center text-red-500 text-2xl">♥K</div>
        </div>
        <div class="absolute bottom-32 left-20 floating-card">
            <div class="w-16 h-24 bg-white rounded-lg shadow-2xl flex items-center justify-center text-black text-2xl">♣Q</div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                Play Like a
                <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                    Champion
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Experience the thrill of professional blackjack and poker in our premium online casino. 
                Compete with players worldwide and climb the leaderboards.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                <a href="/register" class="px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-500 hover:to-orange-600 rounded-xl font-semibold text-lg transition-all transform hover:scale-105 card-glow">
                    Start Playing Now
                </a>
                <a href="/app" class="px-8 py-4 bg-gray-800 hover:bg-gray-700 border border-gray-600 rounded-xl font-semibold text-lg transition-all">
                    Enter Game Room
                </a>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16">
                <div class="stats-counter">
                    <div class="text-3xl font-bold text-yellow-400">50K+</div>
                    <div class="text-gray-400">Active Players</div>
                </div>
                <div class="stats-counter">
                    <div class="text-3xl font-bold text-yellow-400">$2M+</div>
                    <div class="text-gray-400">Winnings Paid</div>
                </div>
                <div class="stats-counter">
                    <div class="text-3xl font-bold text-yellow-400">24/7</div>
                    <div class="text-gray-400">Game Sessions</div>
                </div>
                <div class="stats-counter">
                    <div class="text-3xl font-bold text-yellow-400">99%</div>
                    <div class="text-gray-400">Uptime</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Games Section -->
    <section id="games" class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Choose Your Game</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Master the art of cards with our expertly designed game modes
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Blackjack Card -->
                <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-700">
                    <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-2xl">♠</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Blackjack</h3>
                    <p class="text-gray-400 mb-6">
                        Challenge the dealer in this classic card game. Get as close to 21 as possible without going over.
                    </p>
                    <ul class="space-y-2 mb-8">
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></span>
                            Multiple betting options
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></span>
                            Side bets available
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></span>
                            Progressive jackpots
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 rounded-lg font-semibold transition-all">
                        Play Blackjack
                    </button>
                </div>

                <!-- Poker Card -->
                <div class="game-card bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-700">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-2xl">♦</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Texas Hold'em</h3>
                    <p class="text-gray-400 mb-6">
                        Test your skills against other players in the world's most popular poker variant.
                    </p>
                    <ul class="space-y-2 mb-8">
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></span>
                            Multiplayer tables
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></span>
                            Tournament play
                        </li>
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></span>
                            Various stake levels
                        </li>
                    </ul>
                    <button class="w-full py-3 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-lg font-semibold transition-all">
                        Play Poker
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Leaderboard Preview -->
    <section id="leaderboard" class="py-20 px-4 bg-gray-800/50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Top Players</h2>
                <p class="text-xl text-gray-400">
                    Compete with the best and earn your place among the legends
                </p>
            </div>

            <div class="bg-gray-900 rounded-2xl p-8 border border-gray-700">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-700">
                                <th class="text-left py-4 px-4">Rank</th>
                                <th class="text-left py-4 px-4">Player</th>
                                <th class="text-left py-4 px-4">Games Won</th>
                                <th class="text-left py-4 px-4">Total Winnings</th>
                                <th class="text-left py-4 px-4">Win Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-800 hover:bg-gray-800/50">
                                <td class="py-4 px-4">
                                    <span class="w-8 h-8 bg-yellow-400 text-black rounded-full flex items-center justify-center font-bold">1</span>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full flex items-center justify-center font-bold">
                                            CK
                                        </div>
                                        <span class="font-semibold">CardKing99</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4 text-green-400">2,847</td>
                                <td class="py-4 px-4 text-yellow-400">$45,230</td>
                                <td class="py-4 px-4">
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm font-medium">87%</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-800 hover:bg-gray-800/50">
                                <td class="py-4 px-4">
                                    <span class="w-8 h-8 bg-gray-300 text-black rounded-full flex items-center justify-center font-bold">2</span>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full flex items-center justify-center font-bold">
                                            PA
                                        </div>
                                        <span class="font-semibold">PokerAce</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4 text-green-400">2,691</td>
                                <td class="py-4 px-4 text-yellow-400">$38,950</td>
                                <td class="py-4 px-4">
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm font-medium">84%</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-800 hover:bg-gray-800/50">
                                <td class="py-4 px-4">
                                    <span class="w-8 h-8 bg-orange-400 text-black rounded-full flex items-center justify-center font-bold">3</span>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-gradient-to-r from-orange-400 to-red-400 rounded-full flex items-center justify-center font-bold">
                                            BM
                                        </div>
                                        <span class="font-semibold">BlackjackMaster</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4 text-green-400">2,456</td>
                                <td class="py-4 px-4 text-yellow-400">$32,100</td>
                                <td class="py-4 px-4">
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm font-medium">81%</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-8">
                    <a href="/app/leaderboard" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-500 hover:to-orange-600 rounded-lg font-semibold transition-all">
                        View Full Leaderboard
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Why Choose Card Arena?</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Experience the ultimate online gaming platform with cutting-edge features
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-gray-800/50 rounded-2xl border border-gray-700">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Secure Gaming</h3>
                    <p class="text-gray-400">
                        Bank-level security with SSL encryption and fair play algorithms ensure your safety and privacy.
                    </p>
                </div>

                <div class="text-center p-8 bg-gray-800/50 rounded-2xl border border-gray-700">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-400 to-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Lightning Fast</h3>
                    <p class="text-gray-400">
                        Real-time gameplay with instant updates and minimal latency for the best gaming experience.
                    </p>
                </div>

                <div class="text-center p-8 bg-gray-800/50 rounded-2xl border border-gray-700">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-400 to-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Global Community</h3>
                    <p class="text-gray-400">
                        Join thousands of players worldwide and compete in tournaments and daily challenges.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 bg-gradient-to-r from-yellow-400 to-orange-500">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Ready to Win Big?</h2>
            <p class="text-xl text-gray-900 mb-8 max-w-2xl mx-auto">
                Join thousands of players and start your journey to becoming a card game champion today.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/register" class="px-8 py-4 bg-gray-900 hover:bg-gray-800 text-white rounded-xl font-semibold text-lg transition-all">
                    Create Free Account
                </a>
                <a href="/app" class="px-8 py-4 bg-white hover:bg-gray-100 text-gray-900 rounded-xl font-semibold text-lg transition-all">
                    Play as Guest
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12 px-4 border-t border-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                            <span class="text-lg">♠</span>
                        </div>
                        <span class="text-lg font-bold">Card Arena</span>
                    </div>
                    <p class="text-gray-400">
                        The premier destination for online blackjack and poker games.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Games</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Blackjack</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Texas Hold'em</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Tournaments</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Live Chat</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Responsible Gaming</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Card Arena. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>