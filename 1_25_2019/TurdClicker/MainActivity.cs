using Android.App;
using Android.Widget;
using Android.OS;
using System.Threading.Tasks;
using System.Threading;
using System.Text;
using System;

namespace TurdClicker
{
    [Activity(Label = "TurdClicker", MainLauncher = true)]
    public class MainActivity : Activity
    {
        int clicks = 0;
        int turdhp = 10;
        int damage = 1;

        private TextView turdhealth;
        private ImageButton btnclicker;
        private TextView turd_value_viewer;
        private ProgressBar healthbar;

        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);

            // Set our view from the "main" layout resource
            SetContentView(Resource.Layout.Main);

            turdhealth = FindViewById<TextView>(Resource.Id.turdhealth);
            btnclicker = FindViewById<ImageButton>(Resource.Id.btnclicker);
            turd_value_viewer = FindViewById<TextView>(Resource.Id.turd1_value_viewer);
            healthbar = FindViewById<ProgressBar>(Resource.Id.healthbar);
            btnclicker.Click += btnclicker_Click;
            healthbar.Max = turdhp;
            healthbar.Progress = turdhp;
        }

        private void btnclicker_Click(object sender, EventArgs e)
        {
            if (btnclicker.Clickable == true)
            clicks++;
            turd_value_viewer.Text = clicks.ToString() + " Clicks!";
            turdhp = turdhp - damage;
            turdhealth.Text = turdhp.ToString();
            healthbar.Progress = turdhp;
            if (turdhp <= 0)
            {
                btnclicker.Clickable = false;
                Thread.Sleep(2000);
                btnclicker.SetImageResource(Resource.Drawable.turd_distressed);
                
                Thread.Sleep(2000);
                btnclicker.SetImageResource(Resource.Drawable.turd_normal);
                turdhp = healthbar.Max;
                btnclicker.Clickable = true;
            }
        }
    }
}