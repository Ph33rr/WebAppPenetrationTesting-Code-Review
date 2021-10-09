using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using XssDemo.Models;

namespace XssDemo.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        [HttpGet]
        public IActionResult Index()
        {
            return View(new Customer());
        }

        [HttpPost]
        public IActionResult Index(Customer model)
        {
            return View(model);
        }
        
        public IActionResult JavascriptAttack(int userId)
        {
            return View(new Customer{UserId= userId });
        }

        [HttpPost]
        public IActionResult JavascriptAttack(Customer model)
        {
            return RedirectToAction("JavascriptAttack", new { userId = model.UserId });
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel
            {
                RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier
            });
        }
    }
}